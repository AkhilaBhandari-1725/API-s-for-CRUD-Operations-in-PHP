<?php

include("config.php");

$sql="select * from tableapidemo";

$res=mysqli_query($con,$sql);

$response=array();

if(mysqli_num_fields($res)>0)
{
	$msg['msg']="Success";
	array_push($response,$msg);
	
	while($rw=mysqli_fetch_row($res))
	{
		$data['id']=$rw[0];
		$data['name']=$rw[1];
		$data['branch']=$rw[2];
		$data['college']=$rw[3];
		
		array_push($response,$data);
		
	}
	
}
else
{
	$msg['msg']="Fail";
	$msg['error']=mysqli_error($con);
	array_push($response,$msg);
	
}

echo json_encode($response);

?>