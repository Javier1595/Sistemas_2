<?php
	function conectar_base_de_datos(){
		$conexion = mysqli_connect("localhost","root","","casamusical2");
	if(!$conexion){
		die("Error no se logro conectar con la base de datos".mysqli_connect_error());
	}
	$conexion->query("SET NAMES 'utf8'");
	$conexion->query("SET CHARACTER SET utf8");

	return $conexion;
	}
	function cerrar_conexion_base_de_datos($conexion){
		mysqli_close($conexion);
	}
?>
