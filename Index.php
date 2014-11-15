<?php
require_once "Controlador.php";
$url = $_SERVER['REQUEST_URI'];
$uri = explode("?", $url);
switch ($uri[0]) {
	case "/Sistemas_2/":
		header("Location: /Sistemas_2/Index.php/inicio");
		break;
	case "/Sistemas_2/Index.php/inicio":
		inicio_action();
	break;
	case "/Sistemas_2/Index.php/iniciar_sesion":
		iniciar_sesion_action();
	break;
	case "/Sistemas_2/Index.php/cerrar_sesion":
		cerrar_sesion_action();
	break;
	case "/Sistemas_2/Index.php/Login":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$usuario=$_POST['usuario'];
			$contrasena=$_POST['contrasena'];
			login_action($usuario,$contrasena);
		}
	break;
	case "/Sistemas_2/Index.php/registrousuarios":
		registrousuarios_action();
	break;
	case "/Sistemas_2/Index.php/Registrar_usuario":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$Cedula = $_POST['Cedula'];
			$Nombre = $_POST['Nombre'];
			$Apellido1 = $_POST['Papellido'];
			$Apellido2 = $_POST['Sapellido'];
			$Email = $_POST['Email'];
			$Telefono = $_POST['Telefono'];
			$Direccion = $_POST['Direccion'];
			$Ciudad = $_POST['Ciudad'];
			$Usuario = $_POST['Usuario'];
			$Contrasena = $_POST['Contrasena'];
			$Tipo = $_POST['Tipop'];
			$aux = $_POST['aux'];
			Registrar_usuario_action($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Contrasena,$Tipo,$Usuario,$aux);
		}
	break;
	case "/Sistemas_2/Index.php/Actualizar_usuario":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$Cedula = $_POST['Cedula'];
			$Nombre = $_POST['Nombre'];
			$Apellido1 = $_POST['Papellido'];
			$Apellido2 = $_POST['Sapellido'];
			$Email = $_POST['Email'];
			$Telefono = $_POST['Telefono'];
			$Direccion = $_POST['Direccion'];
			$Ciudad = $_POST['Ciudad'];
			$Usuario = $_POST['Usuario'];
			$Tipo = $_POST['Tipop'];
			Actualizar_usuario_action($Cedula,$Nombre,$Apellido1,$Apellido2,$Email,$Telefono,$Direccion,$Ciudad,$Tipo,$Usuario);
		}
	break;
	case "/Sistemas_2/Index.php/Actualizar_contrasena":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$Nombre=$_POST['Nombre'];
			$ContraActual=$_POST['ContraActual'];
			$ContraNueva=$_POST['ContraNueva'];
			actualizar_contrasena_action($Nombre,$ContraActual,$ContraNueva);
		}
	break;
	case "/Sistemas_2/Index.php/listarusuarios":
		listarusuarios_action();
	break;
	case "/Sistemas_2/Index.php/configuracion_cuenta":
		configuracion_cuenta_action();
	break;
	case "/Sistemas_2/Index.php/cambio_contrasena":
		cambio_contrasena_action();
	break;
	case "/Sistemas_2/Index.php/mision":
		mision_action();
	break;
	case "/Sistemas_2/Index.php/vision":
		vision_action();
	break;
	case "/Sistemas_2/Index.php/registroproductos":
		registroproductos_action();
	break;
	case "/Sistemas_2/Index.php/listarprodcuerda":
		listarproductos_action("Cuerda");
	break;
	case "/Sistemas_2/Index.php/listarprodteclado":
		listarproductos_action("Teclado");
	break;
	case "/Sistemas_2/Index.php/listarprodpercusion":
		listarproductos_action("Percusion");
	break;
	case "/Sistemas_2/Index.php/listarprodviento":
		listarproductos_action("Viento");
	break;
	case "/Sistemas_2/Index.php/muestra_productos":
	if(isset($_GET["id"])){
		$id=$_GET['id'];
		muestra_productos_action($id);
	}
	break;
	case "/Sistemas_2/Index.php/editar_producto":
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_POST['id'];
		editar_producto_action($id);
	}
	break;
	case "/Sistemas_2/Index.php/registrar_producto":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$string="";
			$Codigo = $_POST['Codigop'];
			$Nombre = $_POST['Nombrep'];
			$Precio = $_POST['Preciop'];
			$Tipo = $_POST['Tipop'];
			$Cantidad = $_POST['Cantidadp'];
			$Descripcion = $_POST['Descripcionp'];
			$ruta="C:/wamp/www/Sistemas_2/productos/".$Tipo."/";
			$uploadfile_temporal=$_FILES["archivo"]['tmp_name'];
			$uploadfile_nombre=$ruta.$Codigo.".png";

			if ($_FILES["archivo"]["error"] > 0)
			{
			  $string="Error: " . $_FILES["archivo"]["error"];
			  require '/Sistemas_2/Index.php/registroproducto';
			}else{
			if (is_uploaded_file($uploadfile_temporal)){
				  move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);
				}
			agregar_productos_action($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$uploadfile_nombre,$Descripcion);
		}
	}
	break;
	case "/Sistemas_2/Index.php/actualizar_producto":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$string="";
			$Codigo = $_POST['Codigop'];
			$Nombre = $_POST['Nombrep'];
			$Precio = $_POST['Preciop'];
			$Tipo = $_POST['Tipop'];
			$Cantidad = $_POST['Cantidadp'];
			$Descripcion = $_POST['Descripcionp'];
			actualizar_productos_action($Codigo,$Precio,$Cantidad,$Nombre,$Tipo,$Descripcion);
		}
	break;
	case "/Sistemas_2/Index.php/eliminar_producto":
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$string="";
			$id=$_POST['id'];
			eliminar_producto_action($id);
		}
	break;
	case "/Sistemas_2/Index.php/carrito":
		if(isset($_GET["id"])){
			$string="";
			$id=$_GET['id'];
			carrito_action($id);
		}
	break;
	case "/Sistemas_2/Index.php/mostrarcarrito":
		mostrar_carrito_action();
	break;
	}
?>