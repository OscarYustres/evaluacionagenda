<?php 
	require('./conexion.php');
	$con = new ConectorBD(); //Iniciar el objeto ConectorBD
	$response['msg'] = $con->estadoConexion();//Iniciar la función verifyConexion
	return $response['msg']; //Devolver resultado

 ?>