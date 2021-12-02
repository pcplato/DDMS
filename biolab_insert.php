<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'admin_menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Biomedical Signal Processing & Deep Learning LAB</h1></center>
                    <hr>
                    <center><h2>Director: Dr. Md Aktaruzzaman </h2></center>
                    
                    <center><h3>Address: Room No 408, Dept of CSE, IU </h3></center>
                    

                    <div class="col-sm-10 col-sm-offset-2">
                        <?php
                        if(isset($_POST['submit'])){
                            $item_name = $_POST['item_name'];
                            $item_num = $_POST['item_num'];
                            

                            if($item_name!=NULL && $item_num!=NULL  ){

                                $sql = "INSERT INTO biolab_insert (item_name, item_num) VALUES ('$item_name','$item_num')";
                                $result = mysqli_query($conn,$sql);
                                if(!$result){
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Error!</strong> in submisssion.Please try again.";
                                    echo "</div>";
                                }else{
                                    echo "<div class='alert alert-success'>";
                                    echo "<strong>Success!</strong> Insert Successfully";
                                    echo "</div>";
                                }
                            }
                        }
                        ?>

                        <form action="biolab_insert.php" method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="item_name" class="col-sm-2 control-label">Equipments:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="item_name" placeholder="Enter equipment name or info">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="item_num" class="col-sm-2 control-label">Quantity:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="item_num" placeholder="Enter quantity">
                                </div>
                            </div>

                            

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>

                    <?php
                    $sql1 = "SELECT * FROM biolab_insert";
                    $result1 = mysqli_query($conn,$sql1);
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Equipments</th>";
                    echo "<th>Quantity</th>";
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                     while($row1=mysqli_fetch_array($result1)){
                        echo "<tbody>";
                        echo "<tr class='success'>";
                        echo "<td>".$row1['item_id']."</td>";
                        echo "<td>".$row1['item_name']."</td>";
                        echo "<td>".$row1['item_num']."</td>";
                        echo '<td><a href="update_biolab.php?id=' . $row1['item_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                        echo '<a href="delete_biolab.php?id=' . $row1['item_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
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