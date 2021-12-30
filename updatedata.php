<?php

include("config.php");

$id=intval($_POST['id']);
$name=$_POST['name'];
$branch=$_POST['branch'];
$college=$_POST['college'];

$sql="update tableapidemo set name='$name',branch='$branch',college='$college' where id=$id";

$res=mysqli_query($con,$sql);

$response=array();

if($res)
{
	echo "Success";
}
else
{
	echo "failed to update";
	echo mysqli_error($con);
}

?>