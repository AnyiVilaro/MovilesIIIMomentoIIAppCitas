<?php 
	$user_name=$_POST['username'];
	$password=$_POST['password'];

	$cnx =  mysqli_connect("localhost","root","","citapp");

	$res=$cnx->query("select * from user where user_name = '$user_name' and password = '$password'");
	
	$data = array();
	foreach ($res as $row) 
	{
		$json['data'][]=$row;
	}
	
	echo json_encode($json);

 ?>