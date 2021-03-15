<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Employee Information</title>
</head>

<?php

	include('connection.php');
	
	if(isset($_GET['employee_id'])) 
	{
		$employee_id = $_GET['employee_id'];
		
		$sql = "SELECT * FROM employee_info WHERE employee_id='$employee_id'";
	
		//echo $sql; die;
		
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result)) 
		{
			$employee_name 			= 	$row['employee_name'];
			$employee_email 		= 	$row['employee_email'];
			$employee_contact_no 	= 	$row['employee_contact_no'];
			
			$employee_id 		= 	$row['employee_id'];
		}
	}
	
	
	if(isset($_POST['update'])) 
	{
		$employee_name 		= $_POST['employee_name'];
		$employee_email 	= $_POST['employee_email'];
		$employee_contact_no = $_POST['employee_contact_no'];
		
		$employee_id 		= $_POST['employee_id'];
		
		$sql = "UPDATE employee_info set employee_name='$employee_name', employee_email='$employee_email', employee_contact_no='$employee_contact_no' WHERE employee_id='$employee_id'";
		
		//echo $sql; die;
		
		$result = $conn->query($sql);
		
		if($result) 
		{
			echo "Updated Successfully!";
			echo "<meta http-equiv='refresh' content='2;url=employee_info_listview.php'>";
			exit();
		}
	}



?>

<body bgcolor="#99CCFF" style="margin-top:200px;">

	<form action="edit_employee_info.php" method="post">

	<table border="1" cellpadding="0" cellspacing="0" align="center">
	
		<tr><td colspan="2" align="center" style="font-size:20px; font-weight:bold">Employee Information</td></tr>
		
		<tr>
			<td>Employee Name :</td>
			<td><input type="text" name="employee_name" value="<?php echo $employee_name; ?>"/></td>
		</tr>
		<tr>
			<td>Employee Email :</td>
			<td><input type="text" name="employee_email" value="<?php echo $employee_email; ?>"/></td>
		</tr>
		
		<tr>
			<td>Employee Contact No. :</td>
			<td><input type="text" name="employee_contact_no" value="<?php echo $employee_contact_no; ?>"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="update" value="Update"/>
				<input type="hidden" name="employee_id" value="<?php  echo $employee_id;  ?>" />
			</td>
		</tr>
	
	</table>

	</form>

</body>
</html>
