<?php
include("config.php");
$id='';
$id=$_POST['id'];
	
	$sql="delete from tableapidemo where id='$id'";

	if(mysqli_query($con,$sql))
	{
		echo "delete successfully done";
	}
	else
	{
		echo "failed !!";
		echo mysqli_error($con);
	}
	
?>