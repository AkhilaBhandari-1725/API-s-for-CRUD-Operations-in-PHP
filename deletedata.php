<?php

include("config.php");

$id=$_POST['id'];
//$name=$_POST['name'];
//$branch=$_POST['branch'];
$//college=$_POST['college'];

$sql="delete from tableapidemo where id='$id'";

$res=mysqli_query($con,$sql);

$response=array();

if($res)
{
	echo "Success";
}
else
{
	echo "failed to delete";
	echo mysqli_error($con);
}

?>