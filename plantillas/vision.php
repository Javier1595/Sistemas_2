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
				<h1 class="panel-title"><center><b>Vision</b></center></h1>
			</div>
			<div class="panel-body">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<p align="justify">
						Consolidarnos como la empresa numero uno en venta de instrumentos musicales, asi como tambien lograr un mejor
						sonido y diseños vanguardistas para lograr una mejor imagen en nuestros instrumentos.
					</p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<img src="../Imagenes/vision.png" class="img-responsive" alt="Guitarra 1">
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