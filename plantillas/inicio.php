<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION['Tipo']){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        include 'plantillas/menu/menu_usuario.php';
      break;
    }
  }else{
  	include 'plantillas/menu/menu_publico.php';
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(isset($_SESSION["Nombre"])):?>
			<h4><font color="white">Bienvenido <?php echo "".$_SESSION["Nombre"];?></font></h4>
		<?php endif ?>
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Comercializadora SPEED MUSIC</center></b></h1>
			</div>
			<div class="panel-body">
				<p align="justify">
					Speed Music se dedica a la comercializacion en linea de instrumentos musicales de ultima calidad. Podemos
					encontrar desde el mas economico hasta el mas costoso segun su necesidad.
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img src="../productos/ins1.png" class="img-responsive" alt="Instrumentos">
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<img src="../productos/ins.png" class="img-responsive" alt="Instrumentos">
						</div>
					</div>
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>