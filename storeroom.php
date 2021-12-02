<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'admin_menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Insert Store Entry</h1></center>
                    <hr>

                    <div class="col-sm-10 col-sm-offset-2">
                        <?php
                        if(isset($_POST['submit'])){
                            $product_name = $_POST['product_name'];
                            $product_supplier = $_POST['product_supplier'];
                            $product_quantity = $_POST['product_quantity'];
                            $purchase_date = $_POST['purchase_date'];
                            $warranty_expiration_date = $_POST['warranty_expiration_date'];
                            

                            if($product_name!=NULL && $product_supplier!=NULL && $product_quantity!=NULL && $purchase_date!=NULL && $warranty_expiration_date!=NULL ){

                                $sql = "INSERT INTO `store` (product_name ,product_supplier,product_quantity,purchase_date,warranty_expiration_date) VALUES ('$product_name','$product_supplier','$product_quantity','$purchase_date','$warranty_expiration_date')";
                                $result = mysqli_query($conn,$sql);
                                if(!$result){
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Error!</strong> in submisssion. Please try again.";
                                    echo "</div>";
                                }else{
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Success!</strong> Insert Successfully";
                                    echo "</div>";
                                }
                            }
                        }
                        ?>

                        <form action="storeroom.php" method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="product_name" class="col-sm-2 control-label">Product Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_supplier" class="col-sm-2 control-label">Product Supplier Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="product_supplier" placeholder="Enter the name of the product">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_quantity" class="col-sm-2 control-label">Quantity:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="product_quantity" placeholder="Enter quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="purchase_date" class="col-sm-2 control-label">Purchase Date:</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="purchase_date" placeholder="Enter purchase date(Ex- 2021-11-30)">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="warranty_expiration_date" class="col-sm-2 control-label">Warranty Expiration Date:</label>
                                <div class="col-sm-7">
                                    <input type="date" class="form-control" name="warranty_expiration_date" placeholder="Enter warranty expiration date (Ex- 2021-11-30)">
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>

                    <?php
                    $sql1 = "SELECT * FROM store";
                    $result1 = mysqli_query($conn,$sql1);
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Product Name</th>";
                    echo "<th>Supplier Name</th>";
                    echo "<th>Quantity</th>";
                    echo "<th>Purchase Date</th>";
                    echo "<th>Warranty Expiration Date</th>";
        
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row1=mysqli_fetch_array($result1)){
                        echo "<tbody>";
                        echo "<tr class='success'>";
                        echo "<td>".$row1['product_id']."</td>";
                        echo "<td>".$row1['product_name']."</td>";
                        echo "<td>".$row1['product_supplier']."</td>";
                        echo "<td>".$row1['product_quantity']."</td>";
                        echo "<td>".$row1['purchase_date']."</td>";
                        echo "<td>".$row1['warranty_expiration_date']."</td>";
                       
                        echo '<td><a href="update_storeroom.php?id=' . $row1['product_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                        echo '<a href="delete_storeroom.php?id=' . $row1['product_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
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