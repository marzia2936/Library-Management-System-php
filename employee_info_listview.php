<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Employee List View</title>
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
		
		.button2 {
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
		
		.button3 {
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
		
		.main{
			width:100%;
			
		}
		
		.div1{
			width:80%;
			display:inline-block;
			height:30px;
			text-align:center;
			font-weight:bold;
			font-size:18px;
		}
		
		.div2{
			width:17%;
			display:inline-block;
			height:30px;
		}
	
	
	</style>
</head>

<body bgcolor="#99CCFF" style="margin-top:200px;">

<div class="main">
	<div class="div1">Employee Information</div>

	<div class="div2">
		<a href="employee_info.php" class="button3">Add New Employee</a>
	</div>
</div>	

<?php

	include('connection.php');

	$sql = "SELECT * FROM employee_info";
	//echo $sql;die;
	$rec = $conn->query($sql);
	
	
	echo "<table border='1' cellpadding='0' cellspacing='0' align='center' style='margin-top:50px;'>";
		echo "<thead>";
		echo "<tr style='background-color:#66CCCC'>
					<td>Employee Name</td>
					<td>Employee Email</td>
					<td>Employee Contact No</td>
					<td>Action</td>
				</tr>";
				
		echo "</thead>";
		
		echo "<tbody style='height:30px; overflow: auto; background-color:#ffff'>";
			
		while($row = mysqli_fetch_array($rec))
		{
			$employee_name 			= $row['employee_name'];
			$employee_email 		= $row['employee_email'];
			$employee_contact_no 	= $row['employee_contact_no'];
			
			$employee_id 			= $row['employee_id'];
				
			echo "<tr>
					<td align='center'>$employee_name</td>
					<td>$employee_email</td>
					<td align='center'>$employee_contact_no</td>
					<td>
						<a href='edit_employee_info.php?employee_id=$employee_id' class='button1'>Edit</a> | 
						<a href='$_SERVER[SCRIPT_NAME]?employee_id=$employee_id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
					</td>
				</tr>";
		}	
				
				
		echo "</tbody>";		
	echo "</table>";





?>




</body>
</html>
