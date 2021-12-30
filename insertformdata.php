<?php

include("config.php");

if(isset($_POST['btn_ins']))
{

	$name=$_POST['name'];
	$branch=$_POST['branch'];
	$college=$_POST['college'];

	$sql="insert into tableapidemo values('','$name','$branch','$college')";

	if(mysqli_query($con,$sql))
	{
		echo "insert successfully done";
	}
	else
	{
		echo "failed !!";
		echo mysqli_error($con);
	}
}

elseif(isset($_POST['btn_del']))
{
	
	include("config.php");
	
	$sql="select * from tableapidemo";

	if($res=mysqli_query($con,$sql))
	{
		echo "<table border='1'>
		<tr><th>id</th><th>name</th><th>branch</th><th>college</th><th>delete</th></tr>";
		
		while($rw=mysqli_fetch_array($res))
		{
		
			 echo "<tr><td>$rw[0]</td><td>$rw[1]</td><td>$rw[2]</td><td>$rw[3]</td><td><a href='delete.php?id=$rw[0]'>Delete</a></td></tr>";
			 
		}
		
		echo "</table>";
	}
	
	
	
}
elseif(isset($_POST['btn_disp']))
{
	include("config.php");
	
	$sql="select * from tableapidemo";

	if($res=mysqli_query($con,$sql))
	{
		echo "<br><br><br><br><br><center><table border='1'>
		<tr><th>id</th><th>name</th><th>branch</th><th>college</th></tr>";
		
		while($rw=mysqli_fetch_array($res))
		{
		
			 echo "<tr><td>$rw[0]</td><td>$rw[1]</td><td>$rw[2]</td><td>$rw[3]</td></tr>";
			 
		}
		
		echo "</center></table>";
	}
	else
	{
		echo "failed !!";
		echo mysqli_error($con);
	}
	
}
else
{
	
	echo "no button click has been done !!";
}

?>