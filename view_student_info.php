<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Library Management System</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<?php

	include('connection.php');
	
	if(isset($_GET['student_id'])) 
	{
	
	
		//echo $_GET['student_id'];die;
		$student_id = $_GET['student_id'];
		
		$sql = "SELECT * FROM student_info WHERE student_id='$student_id'";
	
		//echo $sql; die;
		
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result)) 
		{
			$student_id    			    = $row['student_id'];
			$student_library_id 		= $row['student_library_id'];
			$student_name 		        = $row['student_name'];
			$student_email 	            = $row['student_email'];
			$student_contact_no   	    = $row['student_contact_no'];
			$student_address   	        = $row['student_address'];
			
			
			//echo $student_library_id;die;

		  
		}
	}
	
	
	
	
	
	if(isset($_POST['update'])) 
	{
		$student_id    			    = $_POST['student_id'];
		$student_library_id 		= $_POST['student_library_id'];
		$student_name  		        = $_POST['student_name'];
		$student_email 	            = $_POST['student_email'];
	    $student_contact_no   	    = $_POST['student_contact_no'];
		$student_address   	        = $_POST['student_address'];
		

		$sql = "UPDATE student_info set student_id='$student_id',student_library_id='$student_library_id',student_name='$student_name',student_email='$student_email',student_contact_no='$student_contact_no',student_address='$student_address' WHERE student_id='$student_id'";
		 
		//echo $sql; die;
		
		$result = $conn->query($sql);
		
		if($result) 
		{
			echo "Updated Successfully!";
			echo "<meta http-equiv='refresh' content='2;url=student_info_listview.php'>";
			exit();
		}
	}


?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>Library <span>Management System</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/images.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">LMS</h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>              </a>          </li>
          
          
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-envelope-o"></i>
              <span>Master Setup</span>            </a>
            <ul class="sub">
              <li><a href="book_info_listview.php">Book Information</a></li>
				  <li><a href="student_info_listview.php">Student Information</a></li>
				  <li><a href="book_shelf_info_listview.php">Book Shelf Information</a></li> 
				  <li><a href="supplier_info_listview.php">Supplier Information</a></li>
				  <li><a href="writer_info_listview.php">Writer Information</a></li>
            </ul>
          </li>
		  
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-heart"></i>
              <span>Admin Part</span>            </a>
            <ul class="sub">
               <li><a href="book_collection_info_listview.php">Book Collection Information</a></li>
		      <li><a href="book_circulation_info_listview.php">Book Circulation Info</a></li>
		      <li><a href="listview_issue_book.php">View Issued Book</a></li>
            </ul>
          </li>
		  
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>User Part</span>            </a>
            <ul class="sub">
           		<li><a href="staff_info_listview.php">Staff Information</a></li>
				<li><a href="role_info_listview.php">Role Information</a></li>
            </ul>
          </li>
		  
		  
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-file-o"></i>
              <span>Report Part</span>            </a>
            <ul class="sub">
             <li><a href="employee_info.php">Employee Information</a></li>
			   <li><a href="salary_info.php">Salary Information</a></li>
            </ul>
          </li>
          
         
          
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Student Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="edit_student_info.php">
			                    
          		  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student ID  :</label>
                  <div class="col-sm-6">
				  <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_id;   ?></label>
                  </div>
                </div>
				  
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student Library ID :</label>
                  <div class="col-sm-6">
				  <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_library_id;   ?></label>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student Name :</label>
                  <div class="col-sm-6">
				    <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_name;   ?></label>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student Email :</label>
                  <div class="col-sm-6">
				    <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_email;   ?></label>
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student Contact No. :</label>
                  <div class="col-sm-6">
				    <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_contact_no;   ?></label>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Student Address :</label>
                  <div class="col-sm-6">
				    <label class="col-sm-6 col-sm-6 control-label"><?php  echo $student_address;   ?></label>
                  </div>
                </div>			
						
				               
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>

</body>

</html>

