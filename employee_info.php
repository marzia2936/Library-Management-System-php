<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Employee Information</title>
</head>

<?php

	include('connection.php');
	
	if(isset($_POST['save'])) 
	{
		$employee_name 			= $_POST['employee_name'];
		$employee_email 		= $_POST['employee_email'];
		$employee_contact_no 	= $_POST['employee_contact_no'];
		
		$sql = "INSERT INTO employee_info (employee_name, employee_email, employee_contact_no) values('$employee_name', '$employee_email', '$employee_contact_no')";
		
		$result = $conn->query($sql);
		
		if($result == 1)
		{
			echo "Insert Successfully!";
			header("Location: employee_info_listview.php");
		}
	
	}


?>

<body bgcolor="#99CCFF" style="margin-top:200px;">

	<form action="employee_info.php" method="post">

	<table border="1" cellpadding="0" cellspacing="0" align="center">
	
		<tr><td colspan="2" align="center" style="font-size:20px; font-weight:bold">Employee Information</td></tr>
		
		<tr>
			<td>Employee Name :</td>
			<td><input type="text" name="employee_name"/></td>
		</tr>
		<tr>
			<td>Employee Email :</td>
			<td><input type="text" name="employee_email"/></td>
		</tr>
		
		<tr>
			<td>Employee Contact No. :</td>
			<td><input type="text" name="employee_contact_no"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"><input type="submit" name="save" value="Save"/></td>
		</tr>
	
	</table>

	</form>

</body>
</html>
