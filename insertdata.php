<?php

include("config.php");

//$id=$_POST['id'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$college=$_POST['college'];

$sql="insert into tableapidemo(id,name,branch,college) values('','$name','$branch','$college')";

$res=mysqli_query($con,$sql);

$response=array();

if($res)
{
	echo "Success";
}
else
{
	echo "failed to insert";
	echo mysqli_error($con);
}

?>