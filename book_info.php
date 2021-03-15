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
	include("function.php");
	
	$category_arry = getCategory();
	
	
	if(isset($_POST['save'])) 
	{
	    $book_id			    = $_POST['book_id'];
		$book_name 			    = $_POST['book_name'];
		$book_author 		    = $_POST['book_author'];
		$book_edition 	        = $_POST['book_edition'];
	    $publication_year 	    = $_POST['publication_year'];
		$isbn_number 	        = $_POST['isbn_number'];
		$book_price 	        = $_POST['book_price'];
		$book_category   	    = $_POST['book_category'];
		$book_location   	    = $_POST['book_location'];

		
		$sql = "INSERT INTO book_info (book_id,book_name, book_author, book_edition, publication_year, isbn_number, book_price, book_category, book_location)    values('$book_id','$book_name','$book_author', '$book_edition','$publication_year','$isbn_number','$book_price','$book_category','$book_location')";
		
		//echo $sql;die;
		
		$result = $conn->query($sql);
		
		if($result == 1)
		{
			//echo "Insert Successfully!";
			header("Location: book_info_listview.php");
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
			   <li><a href="employee_info.php">Salary Information</a></li>
			   	 <li><a href="book_info.php">Book Information</a></li>
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
        <h3>Add Book Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="book_info.php">
			   <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="id">
                  </div>
                </div>
			       <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_id">
                  </div>
                </div>
			  
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Name :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_name">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Author :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_author">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Book Edition :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_edition">
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Publication Year :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="publication_year">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Isbn Number :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="isbn_number">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Price :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_price">
                  </div>
                </div>
				
				
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Category :</label>
                  <div class="col-sm-6">
				   
														
						<select id="book_book" name='book_category'style="width:100%;height:34px;">
						<?php
						foreach($category_arry as $key=>$value) {
							
							echo "<option value='$key'>$value</option>";
								
						}
						?>	
					</select>
						
						
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"> Book Location :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="book_location">
                  </div>
                </div>
				
				
				
				<div class="form-group" align="center">
				
					<input type="submit" class="btn btn-info" name="save" value="Save"/>
				
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

