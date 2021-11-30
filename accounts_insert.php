<?php include("header.php");?>
<?php include('db_con.php');?>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Insert Accounts Entry</h1></center>
                    <hr>

                    <div class="col-sm-10 col-sm-offset-2">
                        <?php
                        if(isset($_POST['submit'])){
                            $accounts_detail = $_POST['accounts_detail'];
                            $accounts_type = $_POST['accounts_type'];
                            $accounts_amount = $_POST['accounts_amount'];
                            $accounts_voucher=$_POST['accounts_voucher'];
                            // var_dump($accounts_voucher);
                            // die();

                            if($accounts_detail!=NULL && $accounts_type!=NULL && $accounts_amount!=NULL && $accounts_voucher!=NULL ){
 
                                $sql = "INSERT INTO accounts (accounts_detail,accounts_type,accounts_amount,accounts_voucher) VALUES ('$accounts_detail','$accounts_type','$accounts_amount',$accounts_voucher)";
                                $result = mysqli_query($conn,$sql);
                              
                                if(!$result){
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Error!</strong> in submisssion.Please try again.";
                                    echo "</div>";
                                }else{
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Success!</strong> Insert Successfully";
                                    echo "</div>";

                                    header("Location: #");
                                }
                            }
                        }
                        ?>

                        <form action="accounts_insert.php" method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="accounts_detail" class="col-sm-2 control-label">Entry Detail:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="accounts_detail" placeholder="Enter Detail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Type:</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="accounts_type">
                                        <option value="Deposit">Deposit</option>
                                        <option value="Expense">Expense</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="accounts_amount" class="col-sm-2 control-label">Amount:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="accounts_amount" placeholder="Enter Amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="accounts_amount" class="col-sm-2 control-label">Voucher:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="accounts_voucher" placeholder="Enter Voucher">
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>

                    <?php
                    $sql1 = "SELECT * FROM accounts";
                    $result1 = mysqli_query($conn,$sql1);
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Entry Detail</th>";
                    echo "<th>Type</th>";
                    echo "<th>Amount</th>";
                    echo "<th>Voucher</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row1=mysqli_fetch_array($result1)){
                        echo "<tbody>";
                        echo "<tr class='success'>";
                        echo "<td>".$row1['accounts_id']."</td>";
                        echo "<td>".$row1['accounts_detail']."</td>";
                        echo "<td>".$row1['accounts_type']."</td>";
                        echo "<td>".$row1['accounts_amount']."</td>";
                        echo "<td>".$row1['accounts_voucher']."</td>";
                        echo '<td><a href="update_accounts.php?id=' . $row1['accounts_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                        echo '<a href="delete_accounts.php?id=' . $row1['accounts_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                        echo "</tr>";
                        echo "</tbody>";
                    }
                    echo "</table>";
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>