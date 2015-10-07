<?php

	include 'include/db.php';

	$action = $_POST['action'];

	if($action == 'delete_class')
	{
		$classId = $_POST['classId'];

		$sql = "DELETE FROM class WHERE classId = '$classId'";
		if (mysql_query($sql)) {
			echo "Successfully Deleted";
		}
		else
		{
			echo "error";
		}	
	}
	else
	{
		echo "error";
	}

	
?>