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
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  
  	<style>

		.button1 {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 3px 6px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 4px;
		}
		
		.button2 
		{
			background-color: #f44336; /* Red */
			border: none;
			color: white;
			padding: 3px 6px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 4px;
		}
		
		.content-panel
		{
			width:100%;
		}
		
		.div1
		{
			width:80%;
			display:inline-block;
			font-weight:bold;
			font-size:18px;
		}
		
		.div2
		{
			width:17%;
			display:inline-block;
		}
		
		.button3 {
			 background-color:#00CED1; /*DarkTurquoise */
			border: none;
			color: white;
			padding: 3px 6px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 4px;
		}
		.button4 {
			background-color: #3366ff; /* Primary */
			border: none;
			color: white;
			padding: 3px 6px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 13px;
			margin: 2px 2px;
			cursor: pointer;
			border-radius: 4px;
		}
		.table,tr,td{
		 border: 1px solid black;
  border-collapse: collapse;
  }
		
	</style>
  
  
  
  
</head>




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
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <div class="div1"><h4>Book Information List</h4></div>
			  <div class="div2">
					<a href="book_info.php" class="button3">Add Book</a>
			  </div>
              <hr>
			  <?php

						include('connection.php');
						
						/*Delete Code*/
						
						if(isset($_GET['id'])) 
						{
							$id = $_GET['id'];
							
							$sql = "DELETE FROM book_info WHERE id='$id'";
							$conn->query($sql);
							//header("Location: budget_entry.php");
						}
						
						/*List View  Code*/
					
						$sql = "SELECT * FROM book_info";
						//echo $sql;die;
						$rec = $conn->query($sql);
						
						
						
						
						echo "<table class='table'>";
							echo "<thead>";
							echo "<tr>
										<td>SL</td>
										<td>Book Name</td>
										<td>Book Author</td>
								
										<td>Isbn Number</td>
								    	<td>Category</td>
										<td>Book Location</td>
										<td>Action</td>
									</tr>";
									
							echo "</thead>";
							
							echo "<tbody>";
							
							$i = 0;
								
							while($row = mysqli_fetch_array($rec))
							{
							
								$i++;
							
							  
							    $id    			        = $row['id'];
								$book_id    			= $row['book_id'];
								$book_name 			    = $row['book_name'];
								$book_author 		    = $row['book_author'];
								$book_edition 	        = $row['book_edition'];
								$publication_year   	= $row['publication_year'];
								$isbn_number            = $row['isbn_number'];   
								$book_price             =$row['book_price'];
								$book_category   	    = $row['book_category'];
								$book_location   	    = $row['book_location'];

								$category_name = array();
								$sql1 = "SELECT * FROM category_info";
								$rec1 = $conn->query($sql1);
								while($row1 = mysqli_fetch_array($rec1))
								{
									$category_name[$row1['category_id']] = $row1['category_name'];
								}






					
								echo "<tr>
										<td align='center'>$i</td>
										<td align='center'>$book_name</td>
										<td>$book_author</td>
										<td align='center'>$isbn_number</td>
										
										<td>$category_name[$book_category]</td>	
										<td>$book_location</td>			
					
										<td>
											<a href='view_book_info.php?id=$id' class='button4'>View</a> | 
											<a href='edit_book_info.php?id=$id' class='button1'>Edit</a> | 
											<a href='$_SERVER[SCRIPT_NAME]?id=$id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
										</td>
									</tr>";
							}	
									
									
							echo "</tbody>";		
						echo "</table>";
					
					
					
					
					
					?>
            </div>
          </div>
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        
        <!-- /row -->
      </section>
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
  
</body>

</html>
