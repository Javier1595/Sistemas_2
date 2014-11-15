<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'admin':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'usuario':
        header("Location: /Sistemas_2/Index.php/inicio");
      break;
    }
  }else{
  	include 'plantillas/menu/menu_publico.php';
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $submenu1;?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Mision</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<p align="justify">
						Proporcionar los mejores instrumentos musicales con la mas alta calidad y precios accesibles, para satisface las necesidades
						presentes en nuestros clientes. Anhelamos que nuestros clientes esten satisfechos con nuestros productos y servicios. De igual 
						manera proporcionaremos a nuestros trabajadores las areas y los elementos adecuados para la comercializacion de los elementos.

						Brindaremos un mejor sonido con diseño innovador para que tanto niños, jovenes y adultos tengan acceso a productos que esten a 
						la varguandia
					</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="../Imagenes/mision.png" class="img-responsive" alt="Guitarra 1">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>