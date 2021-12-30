<?php
include("config.php");

$id=intval($_POST['id']);

$sql="select * from tableapidemo where id=$id";

if($r=mysqli_query($con,$sql)){
	
	$msg['msg']="success";
	array_push($response,$msg);
	
	$data['id']=$rw[0];
	$data['name']=$rw[1];
	$data['branch']=$rw[2];
	$data['college']=$rw[3];
	
	array_push($response,$data);
}
else
{
	$msg['msg']="Fail";
	$msg['error']=mysqli_error($con);
	array_push($response,$msg);
	
}

echo json_encode($response);

?>