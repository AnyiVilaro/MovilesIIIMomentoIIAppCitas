<?php 
if (isset($_REQUEST['id_appointment']) && isset($_REQUEST['id_user']) && isset($_REQUEST['description']) && isset($_REQUEST['date'])) {
	$id_appointment=$_REQUEST['id_appointment'];
	$id_user=$_REQUEST['id_user'];
	$description=$_REQUEST['description'];
	$date=$_REQUEST['date'];

	$cnx =  mysqli_connect("localhost","root","","citapp") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select id_user from appointment where id_user = '$id_user'");
	if (mysqli_num_rows($result)==0)
	{
		mysqli_query($cnx,"INSERT INTO appointment (id_appointment,id_user,description,date) 
		VALUES ('$id_appointment','$id_user','$description','$date')");	
	}
	else
	{
		echo "Usuario ya existe....";
	}

	mysqli_close($cnx);
}
else
{
	echo "Debe especificar los datos solicitados";
}

 ?>
