<?php 
	if (isset($_REQUEST['id_user']))
	{
		$id_user=$_REQUEST['id_user'];
		$cnx =  mysqli_connect("localhost","root","","citapp") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
		$result = mysqli_query($cnx,"select id_user from appointment where id_user = '$id_user'");
		if (mysqli_num_rows($result)>0)
		{
			mysqli_query($cnx,"DELETE FROM appointment WHERE id_user = '$id_user'");			
		}
		else
		{
			echo "El usuario no se encuentra....";
		}

		mysqli_close($cnx);
	}
	else
	{
		echo "Debe especificar documento del paciente<br>";
		//echo "http://localhost:8081/ServiciosWebAndroidPHP/elimina.php?usr=___";
	}

?>
