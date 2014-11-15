<?php
	require_once "Conexion.php";

	function listarproductos($tipo){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM producto WHERE tipo='$tipo'";
		$resultado = mysqli_query($conexion,$consulta);
		$productos=array();

		while ($fila = $resultado->fetch_assoc()) {
			$productos[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $productos;
	}
	function mostrarproducto($id){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM producto WHERE codp='$id'";
		$resultado = mysqli_query($conexion,$consulta);
		$producto=array();

		while ($fila = $resultado->fetch_assoc()) {
			$producto[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $producto;
	}
	function consultar_producto_ingresado($Codigo){
		$conexion=conectar_base_de_datos();
		$consulta="SELECT * FROM producto";
		$resultado = mysqli_query($conexion,$consulta);
		while ($fila = $resultado->fetch_assoc()) {
		if ($Codigo==$fila['codp']) {
			return 1;
		}else {return 0;}
		}
		cerrar_conexion_base_de_datos($conexion);
	}
	function agregarproducto($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$uploadfile_nombre,$Descripcion){
	$prod_inscrito="";
	$prod_inscrito=consultar_producto_ingresado($Codigo);
		if ($prod_inscrito==1) {
			$string="Registro ya ingresado";
		}else{
			$conexion=conectar_base_de_datos();
			$insertar="INSERT INTO producto VALUES ('$Codigo','$Precio','$Cantidad','$Nombre','$Tipo','$uploadfile_nombre','$Descripcion')";
			if (!mysqli_query($conexion,$insertar)) {
				 $string="".mysqli_error($conexion);
			}else{
			$string="El producto se ha registrado exitosamente";}
			cerrar_conexion_base_de_datos($conexion);
		}
		return $string;
	}
	function Actualizarproducto($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$Descripcion){
		$string="";
		$conexion = conectar_base_de_datos();
			$actualizar="UPDATE producto SET  precio = '$Precio', Cantidad = '$Cantidad', nombre = '$Nombre', tipo = '$Tipo', Descripcion= '$Descripcion' WHERE codp= '$Codigo';";
			if (!mysqli_query($conexion,$actualizar)) {
				 $string="".mysqli_error($conexion);
			}else{
			$string="El producto se ha actualizado exitosamente";
			}
			return $string;
		cerrar_conexion_base_de_datos($conexion);
	}
	function restarproducto($Codigo){
		$string="";
		$producto=mostrarproducto($Codigo);
		foreach ($producto as $producto) {
			$cant=$producto["cantidad"];
		}
		$Cantidad=$cant-1;
		$conexion = conectar_base_de_datos();
			$actualizar="UPDATE producto SET  Cantidad = '$Cantidad' WHERE codp= '$Codigo';";
			if (!mysqli_query($conexion,$actualizar)) {
				 $string="".mysqli_error($conexion);
			}
		cerrar_conexion_base_de_datos($conexion);
	}
	function eliminarproducto($id){
		$string="";
		$conexion = conectar_base_de_datos();
			$eliminar="DELETE FROM producto WHERE codp='$id';";
			if (!mysqli_query($conexion,$eliminar)) {
				 $string="".mysqli_error($conexion);
			}else{
			$string="El producto se ha eliminado exitosamente";
			}
			return $string;
		cerrar_conexion_base_de_datos($conexion);
	}
	function consultar_producto_carrito($Codigo){
		$conexion=conectar_base_de_datos();
		$consulta="SELECT * FROM carrito";
		$resultado = mysqli_query($conexion,$consulta);
		while ($fila = $resultado->fetch_assoc()) {
		if ($Codigo==$fila['Codp']) {
			return 1;
		}else {return 0;}
		}
		cerrar_conexion_base_de_datos($conexion);
	}
	function ingresar_carrito($ced,$producto){
		$conexion = conectar_base_de_datos();
		$a=0;
		foreach($producto as $producto) {
			$prod_carrito=consultar_producto_carrito($producto["codp"]);
			$cod=$producto["codp"];
			$nomprod=$producto["nombre"];
			$tipoprod=$producto["tipo"];
			$cant=1;
			$precio=$producto["precio"];
			$tot=$producto["precio"]*$cant;
		}
		if ($prod_carrito==1) {
		}else{
				$insertar="INSERT INTO carrito VALUES ('','$ced','$cod','$nomprod','$tipoprod','$cant','$precio','$tot')";
				if (!mysqli_query($conexion,$insertar)) {
					 $a=0;
				}else{
					restarproducto($cod);
					$a=1;
				}
		}
		return $a;
		cerrar_conexion_base_de_datos($conexion);
	}
	function mostrarcarrito(){
		$conexion=conectar_base_de_datos();
		$consulta = "SELECT * FROM carrito";
		$resultado = mysqli_query($conexion,$consulta);
		$carrito=array();

		while ($fila = $resultado->fetch_assoc()) {
			$carrito[]=$fila;
		}
		cerrar_conexion_base_de_datos($conexion);
		return $carrito;
	}
?>