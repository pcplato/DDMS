<a href="#menu-toggle" class="btn btn-primary btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a><br/>


   <div class="col-sm-3">	
        <div id="wrapper"> 
	
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <li>
                    <h3 style="color:#FAFAFA;"><b>Admin Dashboard</b></h3>
                </li>
                <li>
                    <a href="welcome_admin.php">Dashboard</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
            <li>
                    <a href="student.php">Student Details</a>
                </li>
                <li>
                    <a href="teacher_insert.php">Teacher</a>
                </li>
                <li>
                    <a href="routine_insert.php">Routine</a>
                </li>
                <li>
                    <a href="insert_result.php">Result</a>
                </li>
                <li>
                    <a href="lab_insert.php">Lab Management</a>
                </li>
                <li>
                    <a href="biolab_insert.php">Bio Lab</a>
                </li>
                <li>
                    <a href="course_insert.php">Syllabus</a>
                </li>
                <li>
                    <a href="room_insert.php">Room</a>
                </li>
                <li>
                    <a href="course_insert.php">Syllabus</a>
                </li>
                <li>
                    <a href="accounts_insert.php">Account Management</a>
                </li>
                <li>
                    <a href="library.php">Library Management</a>
                </li>
                <li>
                    <a href="storeroom.php">Store Room Management</a>
                </li>
            </ul>
			
        </div>
        <!-- /#sidebar-wrapper -->
		
    </div>
    <!-- /#wrapper -->
	
	
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</div>
