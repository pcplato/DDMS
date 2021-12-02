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

     $product_name = $_POST['product_name'];
     $product_supplier = $_POST['product_supplier'];
     $product_quantity = $_POST['product_quantity'];
     $purchase_date = $_POST['purchase_date'];
     $warranty_expiration_date = $_POST['warranty_expiration_date'];
                            
     $sql = "UPDATE `store` SET `product_name`='$product_name',`product_supplier`='$product_supplier',`product_quantity`='$product_quantity',`purchase_date`='$purchase_date',`warranty_expiration_date`='$warranty_expiration_date' WHERE `product_id`='$id'";
     $result = mysqli_query($conn,$sql);
     if($result){

        echo "<div class='alert alert-success'>";
        echo "<strong>Success!</strong>Successfully Updated";
        echo "</div>";
    }else{
        echo "<div class='alert alert-danger'>";
        echo "<strong>Error!</strong> in update. Please try again.";
        echo "</div>";
    }
}


?>
<center><h3>Update Product Entry</h3></center>

<?php
    $id = $_REQUEST['id'];
    $sql1 = "SELECT * FROM store WHERE product_id='$id'";
     $result1 = mysqli_query($conn,$sql1);
     while($row = mysqli_fetch_array($result1)){

?>

<form action="update_storeroom.php" method="post" class="form-horizontal" role="form">

            <div class="form-group">
                <label for="product_name" class="col-sm-2 control-label">Enter product name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="product_name" value="<?= $row['product_name']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="product_supplier" class="col-sm-2 control-label">Enter product supplier name</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" name="product_supplier" value="<?= $row['product_supplier']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="product_quantity" class="col-sm-2 control-label">quantity</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="product_quantity" value="<?= $row['product_quantity']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="purchase_date" class="col-sm-2 control-label">Enter purchase date</label>
                <div class="col-sm-7">
                <input type="date" class="form-control" name="purchase_date" value="<?= $row['purchase_date']; ?>" >
                </div>
            </div>

            <div class="form-group">
                <label for="warranty_expiration_date" class="col-sm-2 control-label">Enter warranty expiration date</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="warranty_expiration_date" value="<?= $row['warranty_expiration_date']; ?>">
                </div>
            </div>

            
            <center><input type="submit" name="submit" value="Update" class="btn btn-primary" style="padding: 10px; width: 100px;"></center>
            <input type="hidden" name="id" value="<?=$id;?>" />
</form>
<br>
 <a href="storeroom.php" class="btn btn-warning" style="padding: 10px; width: 100px;"> Go Back </a>

<?php
    }

?>
 </div>
 </div>
 </div>
 </div>
 </div>