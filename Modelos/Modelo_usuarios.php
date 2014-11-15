<?php
	require_once "Conexion.php";
	function Registrar_usuario($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Contrasena,$Tipo,$Usuario,$aux){
		$string="";
		$auxi=$aux;
		$ya_inscrito=0;
		$conexion = conectar_base_de_datos();
		$salt=md5(time());
		$contracod=hash("sha512",$Contrasena);
		$contracod=$contracod.$salt;
		$ya_inscrito=consultar_usuario_ingresado($Cedula);
		if ($ya_inscrito==1) {
			$string="El usuario ya se encuentra en la base de datos";
			return $string;
		}else{
			$insertar="INSERT INTO usuarios VALUES ('$Cedula','$Nombre','$Apellido1','$Apellido2','$Email','$Telefono','$Direccion','$Ciudad','$Usuario','$contracod','$Tipo','$salt')";
			if (!mysqli_query($conexion,$insertar)) {
				 $string="".mysqli_error($conexion);
			}else{
			$string="El usuario se ha registrado exitosamente";}
			if ($auxi==1) {
				return $string;
			}else if ($auxi==2) {
				login($Usuario,$Contrasena);
			}
		}
		cerrar_conexion_base_de_datos($conexion);
	}
	function Actualizar_usuario($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Tipo,$Usuario){
		$string="";
		$conexion = conectar_base_de_datos();
			$actualizar="UPDATE usuarios SET  Nombre = '".$Nombre."', Apellido1 = '".$Apellido1."', Apellido2 = '".$Apellido2."', Email = '".$Email."',
Telefono = '".$Telefono."', Direccion = '".$Direccion."', Ciudad = '".$Ciudad."', Usuario = '".$Usuario."' WHERE Cedula= '".$Cedula."';";
			if (!mysqli_query($conexion,$actualizar)) {
				 $string="".mysqli_error($conexion);
			}else{
			$string="El usuario se ha actualizado exitosamente";
			session_start();
			$_SESSION["Tipo"]=$Tipo;
			$_SESSION['Cedula']=$Cedula;
			$_SESSION['Nombre']=$Nombre;
			session_unset();}
			return $string;
		cerrar_conexion_base_de_datos($conexion);
	}
	function actualizar_contrasena($Nombre,$ContraActual,$ContraNueva){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM usuarios where Nombre = '$Nombre'";
		$resultado = mysqli_query($conexion,$consulta);
		if (!mysqli_query($conexion,$consulta)) {
				 $string="".mysqli_error($conexion);
		}else{
			while ($fila = $resultado->fetch_assoc()) {
				$string="";
				$Cedula=$fila['Cedula'];
				$salt=$fila['salt'];
				$contrabd=$fila['Contrasena'];
				$ContraA=hash("sha512",$ContraActual);
				$ContraA=$ContraA.$salt;
				if ($ContraA==$contrabd) {
					$Contra=hash("sha512",$ContraNueva);
					$Contra=$Contra.$salt;
					$Actualizar="UPDATE usuarios SET  Contrasena = '$Contra' WHERE Cedula= '$Cedula';";
					if (!mysqli_query($conexion,$Actualizar)) {
						$string="".mysqli_error($conexion);
					}else{
						$string="La contraseña se ha actualizado exitosamente";
					}
				}else{
						$string="La contraseña actual es incorrecta";
					}
			}
		}
		cerrar_conexion_base_de_datos($conexion);
		return $string;
	}
	function mostrarusuarios($cedula){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM usuarios where Cedula = '$cedula'";
		$resultado = mysqli_query($conexion,$consulta);
		$usuario=array();

		while ($fila = $resultado->fetch_assoc()) {
			$usuario[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $usuario;
	}
	function consultar_usuario_ingresado($Cedula){
		$conexion=conectar_base_de_datos();
		$consulta="SELECT * FROM usuarios where Cedula = '$Cedula'";
		$resultado = mysqli_query($conexion,$consulta);
		while ($fila = $resultado->fetch_assoc()) {
		if ($Cedula==$fila['Cedula']) {
			return 1;
		}else {return 0;}
		}
		cerrar_conexion_base_de_datos($conexion);
	}
	function listarusuarios(){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM usuarios";
		$resultado = mysqli_query($conexion,$consulta);
		$usuarios=array();

		while ($fila = $resultado->fetch_assoc()) {
			$usuarios[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $usuarios;
	}
	function login($usuario,$contrasena){
		$conexion=conectar_base_de_datos();
		$iniciarsesion="SELECT * FROM usuarios";
		$resultado = mysqli_query($conexion,$iniciarsesion);
		$Usuarioarray=array();

		while ($fila = $resultado->fetch_assoc()) {
			$Usuario = $fila['Usuario'];
			$Tipo=$fila['Tipo'];
			$salt=$fila['salt'];
			$contpost=hash("sha512",$contrasena);
			$contpost=$contpost.$salt;
			$contrabd=$fila['Contrasena'];
			if($Usuario==$usuario && $contrabd==$contpost){
				session_start();
					$_SESSION["Tipo"]=$fila['Tipo'];
					$_SESSION['Cedula']=$fila['Cedula'];
					$_SESSION['Nombre']=$fila['Nombre'];
					header("location:/Sistemas_2/Index.php/inicio");
					$aux=1;
			}
		}if($aux==0){header("location: /Sistemas_2/Index.php/iniciar_sesion");} else{$aux=0;}
		cerrar_conexion_base_de_datos($conexion);
	}
?>