<?php
	require_once "Modelos/Modelo_usuarios.php";
	require_once "Modelos/Modelo_productos.php";
	session_start();
	function inicio_action(){
		require "plantillas/inicio.php";
	}
	function iniciar_sesion_action(){
		require "plantillas/iniciar_sesion.php";
	}
	function cerrar_sesion_action(){
		session_unset();
		session_destroy();
		header("Location: /Sistemas_2/Index.php/inicio");
	}
	function login_action($usuario,$contrasena){
		$login=login($usuario,$contrasena);
	}
	function registrousuarios_action(){
		require "plantillas/registrousuarios.php";
	}
	function actualizar_contrasena_action($Nombre,$ContraActual,$ContraNueva){
		$string=actualizar_contrasena($Nombre,$ContraActual,$ContraNueva);
		require "plantillas/cambio_contrasena.php";
	}
	function Registrar_usuario_action($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$contrasena,$Tipo,$Usuario,$aux){
		$registro=Registrar_usuario($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$contrasena,$Tipo,$Usuario,$aux);
		require "plantillas/registrousuarios.php";
	}
	function Actualizar_usuario_action($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Tipo,$Usuario){
		$string=Actualizar_usuario($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Tipo,$Usuario);
		session_unset();
		session_destroy();
		session_start();
		$_SESSION["Tipo"]=$Tipo;
		$_SESSION['Cedula']=$Cedula;
		$_SESSION['Nombre']=$Nombre;
		configuracion_cuenta_action(1);
	}
	function listarusuarios_action(){
		$usuarios=listarusuarios();
		require "plantillas/listarusuarios.php";
	}
	function configuracion_cuenta_action(){
		$cedula=$_SESSION['Cedula'];
		$usuario=mostrarusuarios($cedula);
		require "plantillas/configuracion_cuenta.php";
	}
	function cambio_contrasena_action(){
		require "plantillas/cambio_contrasena.php";
	}
	function mision_action(){
		require "plantillas/mision.php";
	}
	function vision_action(){
		require "plantillas/vision.php";
	}
	function registroproductos_action(){
		require "plantillas/registroproductos.php";
	}
	function listarproductos_action($tipo){
		$producto=listarproductos($tipo);
		require "plantillas/listarproductos.php";
	}
	function muestra_productos_action($id){
		$producto = mostrarproducto($id);
		require "plantillas/mostrarproducto.php";
	}
	function agregar_productos_action($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$uploadfile_nombre,$Descripcion){
		$string = agregarproducto($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$uploadfile_nombre,$Descripcion);
		require "plantillas/registroproductos.php";
	}
	function editar_producto_action($id){
		$producto = mostrarproducto($id);
		require "plantillas/editarproducto.php";
	}
	function actualizar_productos_action($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$Descripcion){
		$string = actualizarproducto($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$Descripcion);
		$producto=mostrarproducto($Codigo);
		require "plantillas/mostrarproducto.php";
	}
	function eliminar_producto_action($id){
		$producto=array();
		$car=consultar_producto_carrito($id);
		if($car==0){
		$string = eliminarproducto($id);
		require "plantillas/mostrarproducto.php";
		}else{
			$string="El producto no se puede eliminar ya que se encuentra en alguna lista de compra";
			$producto = mostrarproducto($id);
			require "plantillas/mostrarproducto.php";
		}
	}
	function carrito_action($id){
		$ced=$_SESSION["Cedula"];
		$producto = mostrarproducto($id);
		$a=ingresar_carrito($ced,$producto);
		if ($a==1) {
			$string="Producto agregado";
		}else{
			$string="No se logro agregar al carrito";
		}
		require "plantillas/mostrarproducto.php";
	}
	function mostrar_carrito_action(){
		$carrito=mostrarcarrito();
		require "plantillas/listarcarrito.php";
	}
?>