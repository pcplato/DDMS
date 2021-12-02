<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'admin_menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Library Management</h1></center>
                    <hr>

                    <div class="col-sm-10 col-sm-offset-2">
                        <?php
                        if(isset($_POST['submit'])){
                            $book_name = $_POST['book_name'];
                            $book_author = $_POST['book_author'];
                            $book_publisher = $_POST['book_publisher'];
                            $book_edition = $_POST['book_edition'];
                            $book_quantity = $_POST['book_quantity'];
                            $book_borrowed = $_POST['book_borrowed'];
                            $book_available= $_POST['book_available'];

                            

                        if($book_name!= NULL && $book_author != NULL && $book_publisher != NULL && $book_edition != NULL && $book_quantity != NULL && $book_borrowed != NULL && $book_available != NULL){

                                $sql = "INSERT INTO `library` (book_name ,book_author,book_publisher, book_edition, book_quantity,book_borrowed, book_available) VALUES ('$book_name' ,'$book_author','$book_publisher', '$book_edition', '$book_quantity' , '$book_borrowed', '$book_available')";
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
                    

                        <form action="library.php" method="post" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="book_name" class="col-sm-2 control-label">Book Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_name" placeholder="Enter Book Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="book_author" class="col-sm-2 control-label">Book Author Name:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_author" placeholder="Enter the author name of the book">
                                </div>
                            </div>
                        

                            <div class="form-group">
                            <label for="book_publisher" class="col-sm-2 control-label">Publisher</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="book_publisher" placeholder="Enter Publisher Name">
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="book_edition" class="col-sm-2 control-label">Edition</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_edition" placeholder="Enter the edition number of the book">
                                </div>
                            </div>

        
                            <div class="form-group">
                                <label for="book_quantity" class="col-sm-2 control-label">Quantity:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_quantity" placeholder="Enter quantity">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="book_borrowed" class="col-sm-2 control-label">Book Borrowed</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_borrowed" placeholder="Enter Borrowed book">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="book_available" class="col-sm-2 control-label">Book Available</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="book_available" placeholder="Enter Available book">
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary" style="padding: 10px; width: 100px; left:20px;">
                            <br>
                            <br>
                            <br>
                        </form>
                    </div>
                    <form method="post">
                        <input type="textbox" name="str" required/>
                        <input type="submit" name="submit2" value="Search"/>
                    </form>
                    <?php
                    
                    if(isset($_POST['submit2'])){
                         $str=mysqli_real_escape_string($conn,$_POST['str']);
                         $sql1="select * FROM library WHERE book_name like '%$str%'";   
                         $result1=mysqli_query($conn,$sql1);
                         if(mysqli_num_rows($result1)>0){
                             //while($row1=mysqli_fetch_assoc($result1)){
                                echo "<table class='table table-bordered'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Book Name</th>";
                                echo "<th>Book Author</th>";
                                echo "<th>Publisher</th>";
                                echo "<th>Edition</th>";
                                echo "<th>Quantity</th>";
                                echo "<th>Borrowed</th>";
                                echo "<th>Available</th>";
                    
                                echo "<th>Actions</th>";
                                echo "</tr>";
                                echo "</thead>";
                                while($row1=mysqli_fetch_array($result1)){
                                    echo "<tbody>";
                                    echo "<tr class='success'>";
                                    echo "<td>".$row1['book_id']."</td>";
                                    echo "<td>".$row1['book_name']."</td>";
                                    echo "<td>".$row1['book_author']."</td>";
                                    echo "<td>".$row1['book_publisher']."</td>";
                                    echo "<td>".$row1['book_edition']."</td>";
                                    echo "<td>".$row1['book_quantity']."</td>";
                                    echo "<td>".$row1['book_borrowed']."</td>";
                                    echo "<td>".$row1['book_available']."</td>";
                                   
                                    echo '<td><a href="update_book.php?id=' . $row1['book_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                                    echo '<a href="delete_book.php?id=' . $row1['book_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
                                    echo "</tr>";
                                    echo "</tbody>";
                                }
                                echo "</table>";
                             }
                          else {
                             echo "No data found";
                         }
                    }
                    
                
                    ?>
                  
                     <?php
                    $sql1 = "SELECT * FROM library";
                    $result1 = mysqli_query($conn,$sql1);
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Book Name</th>";
                    echo "<th>Book Author</th>";
                    echo "<th>Publisher</th>";
                    echo "<th>Edition</th>";
                    echo "<th>Quantity</th>";
                    echo "<th>Borrowed</th>";
                    echo "<th>Available</th>";
        
                    echo "<th>Actions</th>";
                    echo "</tr>";
                    echo "</thead>";
                    while($row1=mysqli_fetch_array($result1)){
                        echo "<tbody>";
                        echo "<tr class='success'>";
                        echo "<td>".$row1['book_id']."</td>";
                        echo "<td>".$row1['book_name']."</td>";
                        echo "<td>".$row1['book_author']."</td>";
                        echo "<td>".$row1['book_publisher']."</td>";
                        echo "<td>".$row1['book_edition']."</td>";
                        echo "<td>".$row1['book_quantity']."</td>";
                        echo "<td>".$row1['book_borrowed']."</td>";
                        echo "<td>".$row1['book_available']."</td>";
                       
                        echo '<td><a href="update_book.php?id=' . $row1['book_id'] . '"><b class="btn btn-warning">Update</b></a>' ;
                        echo '<a href="delete_book.php?id=' . $row1['book_id'] . '" onclick=\'return confirm("Are you sure you want to delete this record?")\'><b class="btn btn-danger">Delete</b></a></td>' ;
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