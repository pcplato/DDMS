<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
    <?php require_once'menubar.php';?>
    <div class="col-sm-12">
        <div class="panel panel-default">
        <div class="panel-body">


<?php

if (isset($_POST['submit'])){

     $id = $_REQUEST['id'];

     $accounts_detail = $_POST['accounts_detail'];
     $accounts_type = $_POST['accounts_type'];
     $accounts_amount = $_POST['accounts_amount'];
     $accounts_voucher = $_POST['accounts_voucher'];
     $sql = "UPDATE `accounts` SET `accounts_detail`='$accounts_detail',`accounts_type`='$accounts_type',`accounts_amount`='$accounts_amount', `accounts_voucher`='$accounts_voucher' WHERE accounts_id='$id')";
     $result = mysqli_query($conn,$sql);
     if($result){

        echo "<div class='alert alert-success'>";
        echo "<strong>Success!</strong>Successfully Updated";
        echo "</div>";
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update.Please try again.";
        echo "</div>";
    }
}


?>
<center><h3>Update Accounts Entry</h3></center>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM accounts WHERE accounts_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="update_accounts.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="accounts_detail" class="col-sm-2 control-label">Entry Detail</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="accounts_detail" value="<?= $row['accounts_detail']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="accounts_type" class="col-sm-2 control-label">Type:</label>
                <div class="col-sm-7">
                    <select class="form-control" name="accounts_type" value="<?= $row['accounts_type']; ?>">
                        <option value="Deposit">Deposit</option>
                        <option value="Expense">Expense</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="accounts_amount" class="col-sm-2 control-label">Amount</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="accounts_amount" value="<?= $row['accounts_amount']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="accounts_voucher" class="col-sm-2 control-label">Voucher</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="accounts_voucher" value="<?= $row['accounts_voucher']; ?>">
                </div>
            </div>
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="accounts_insert.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>