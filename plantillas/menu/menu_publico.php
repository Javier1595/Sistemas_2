<?php ob_start(); ?>
<nav class='navbar navbar-inverse' role='navigation'>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		<a class='navbar-brand' href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span></a>
		<ul class='nav navbar-nav'>
			<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
			<li class='dropdown'>
				<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-bookmark'></span> Nosotros<span class='caret'></span></a>
				<ul class='dropdown-menu' role='menu'>
					<li><a href='/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span></span> Mision</a></li>
					<li><a href='/Sistemas_2/Index.php/vision'><span class='glyphicon glyphicon-bookmark'></span></span> Vision</a></li>
				</ul>
			</li>
		</ul>
		<ul class='nav navbar-nav navbar-right'>
      		<li><a href='/Sistemas_2/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'></span> Ingresar</a></li>
    	</ul>
	</div>
</nav>
<?php $menu = ob_get_clean(); ?>

<?php ob_start(); ?>
<h1 class='panel-title'><center><b>MENU</b></center></h1>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span> Inicio</a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
	<li><a href='/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span> Nosotros</a></li>
	<li><a href='/Sistemas_2/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'> Iniciar sesion</a></li>
</ul>
<?php $menu1 = ob_get_clean(); ?>

<?php ob_start(); ?>
<ul class='nav nav-pills nav-stacked'>
	<li><a href='http://localhost/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-ok'></span> Mision</a></li>
	<li><a href='http://localhost/Sistemas_2/Index.php/vision'><span class='glyphicon glyphicon-ok'></span> Vision</a></li>
</ul>
<?php $submenu1 = ob_get_clean(); ?>