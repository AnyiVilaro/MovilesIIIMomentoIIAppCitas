<?php 
if (isset($_REQUEST['id_appointment']) && isset($_REQUEST['id_user']) && isset($_REQUEST['description']) 
&& isset($_REQUEST['date'])) {
	$id_appointment=$_REQUEST['id_appointment'];
	$id_user=$_REQUEST['id_user'];
	$description=$_REQUEST['description'];
	$date=$_REQUEST['date'];

	$cnx =  mysqli_connect("localhost","root","","citapp") or die("Ha sucedido un error inexperado en la 
	conexion de la base de datos");
	$result = mysqli_query($cnx,"select id_user from appointment where id_user = '$id_user'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"UPDATE appointment SET id_appointment='$id_appointment', 
		description='$description', date='$date' WHERE id_user='$id_user'");
		
	}
	else
	{
		echo "El usuario no se encuentra....";
	}

	mysqli_close($cnx);
}
else
{
	echo "Debe especificar los datos de la cita<br>";
	//echo "http://localhost:8081/ServiciosWebAndroidPHP/actualiza.php?usr=___&clave=___&nombre=___%20___&correo=___";
}

 ?>
