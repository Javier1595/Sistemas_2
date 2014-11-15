<?php ob_start(); ?>
<nav class='navbar navbar-inverse' role='navigation'>
		<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		 <ul class='nav navbar-nav'>
			<a class='navbar-brand' href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span></a>
			<li class='dropdown'>
				<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-tasks'></span> Productos<span class='caret'></span></a>
				<ul class='dropdown-menu' role='menu'>
					<li><a href='/Sistemas_2/Index.php/registroproductos'><span class='glyphicon glyphicon-plus'></span> Nuevo producto</a></li>
					<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-list'></span> Listar productos</a></li>
				</ul>
			</li>
			<li class='dropdown'>
				<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> Usuarios<span class='caret'></span></a>
				<ul class='dropdown-menu' role='menu'>
					<li><a href='/Sistemas_2/Index.php/registrousuarios'><span class='glyphicon glyphicon-plus'></span> Nuevo usuario</a></li>
					<li><a href='/Sistemas_2/Index.php/listarusuarios'><span class='glyphicon glyphicon-list'></span> Listar usuario</a></li>
				</ul>
			</li>
		</ul>
		<ul class='nav navbar-nav navbar-right'>
	      <li class='dropdown'>
	        <a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span> <?php echo "".$_SESSION["Nombre"];?><b class='caret'></b></a>
	        <ul class='dropdown-menu'>
	          <li><a href='/Sistemas_2/Index.php/configuracion_cuenta'><span class='glyphicon glyphicon-cog'> Configuracion de Cuenta</span></a></li>
	          <li><a href='/Sistemas_2/Index.php/cambio_contrasena'><span class='glyphicon glyphicon-wrench'> Cambio contrasena</span></a></li>
			  <li><a href='/Sistemas_2/Index.php/cerrar_sesion'><span class='glyphicon glyphicon-log-out'> Salir</span></a></li>
	        </ul>
	      </li>
	    </ul>
	</div>
</nav>
<?php $menu = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><center><b>MENU</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span>  Inicio</a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
	<li><a href='/Sistemas_2/Index.php/listarusuarios'><span class='glyphicon glyphicon-user'></span> Usuarios</a></li>
	<li><a href='/Sistemas_2/Index.php/cerrar_sesion'><span class='glyphicon glyphicon-log-out'></span> Salir</a></li>
</ul>
<?php $menu1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><b><center>USUARIOS</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='/Sistemas_2/Index.php/registrousuarios'><span class='glyphicon glyphicon-user'></span>  Nuevo usuario</a></li>
	<li><a href='/Sistemas_2/Index.php/listarusuarios'><span class='glyphicon glyphicon-tasks'></span> Listar Usuarios</a></li>
</ul>
<?php $submenu1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><b><center>PRODUCTOS</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='/Sistemas_2/Index.php/registroproductos'><span class='glyphicon glyphicon-plus'></span>  Nuevo producto</a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Listar productos</a></li>
</ul>
<?php $submenu2 = ob_get_clean(); ?>