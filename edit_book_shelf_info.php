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
	
	if(isset($_GET['book_shelf_id'])) 
	{
	
	
		//echo $_GET['book_shelf_id'];die;
		$book_shelf_id = $_GET['book_shelf_id'];
		
		$sql = "SELECT * FROM book_shelf_info WHERE book_shelf_id='$book_shelf_id'";
	
		//echo $sql; die;
		
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result)) 
		{
			 $book_shelf_id    			= $row['book_shelf_id'];
			$book_shelf_name 			= $row['book_shelf_name'];
			$book_shelf_location 		 = $row['book_shelf_location'];
			
			
			//echo $book_shelf_id;die;

		
		}
	}
	
	
	
	
	
	if(isset($_POST['update'])) 
	{
		 $book_shelf_id    			    = $_POST['book_shelf_id'];
		$book_shelf_name 			    = $_POST['book_shelf_name'];
		$book_shelf_location 		    = $_POST['book_shelf_location'];
		

		$sql = "UPDATE book_shelf_info set book_shelf_id='$book_shelf_id',book_shelf_name='$book_shelf_name',book_shelf_location='$book_shelf_location' WHERE book_shelf_id='$book_shelf_id'";
		 
		//echo $sql; die;
		
		$result = $conn->query($sql);
		
		if($result) 
		{
			echo "Updated Successfully!";
			echo "<meta http-equiv='refresh' content='2;url=book_shelf_info_listview.php'>";
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
      <a href="index.html" class="logo"><b>Library Management System<span></span></b></a>
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
		           
			       <li><a href="listview_issue_book.php">View Issued Book</a></li>
            </ul>
          </li>
		  
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>User Part</span>            </a>
            <ul class="sub">
             	<li><a href="users_listview.php">All User Information</a></li>
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
        <h3>Book Shelf Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="edit_book_shelf_info.php">
			  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Shelf ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_shelf_id" value="<?php  echo $book_shelf_id;   ?>">
                  </div>
                </div>
			  
			      <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Shelf Name :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_shelf_name" value="<?php  echo $book_shelf_name;   ?>">
                  </div>
                </div>
				
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Shelf Location :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_shelf_location" value="<?php  echo $book_shelf_location;   ?>">
                  </div>
                </div>		
						
				
				
				<div class="form-group" align="center">
				
					<input type="submit" class="btn btn-info" name="update" value="Update"/>
					<input type="hidden" class="form-control" name="book_shelf_id" value="<?php  echo $book_shelf_id;   ?>">
				
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

