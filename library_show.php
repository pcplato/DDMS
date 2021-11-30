<?php include("header.php");?>
<?php include('db_con.php');?>

<div class="container-fluid">
    <div class="row" id="wrapper">
        <?php require_once'menubar.php';?>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <center><h1>Library Management</h1></center>
                    <hr>

                   

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