<?php


function getCategory()
{
	include("connection.php");
	
	$sql = "SELECT * FROM category_info";
	$rec = $conn->query($sql);
	
	$catagory_arry = array();
	while($row = mysqli_fetch_array($rec))
	{
		$category_id = $row['category_id'];
		$category_name = $row['category_name'];
		
		$category_arry[$category_id] = $category_name;
	}
	
	return $category_arry;
}
?>