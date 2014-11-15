<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
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
	<?php if (isset($_SESSION["Tipo"])=='Administrador' || isset($_SESSION["Tipo"])=='Usuario'): ?>
		<?php echo $submenu2;?>
	<?php else: ?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	    <?php if(empty($string)):?>
	    <?php else:?>
	      <center><h4><?php echo "".$string;?></h4></center>
	    <?php endif ?>
		<?php require 'plantillas/menu/submenu_productos.php';?>
		<h1><center>Instrumentos de <?php echo $tipo; ?></center></h1>
		<div class="panel panel-primary">
			<div class="panel-body">
				<?php foreach ($producto as $producto):?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="caption">
							<h3><b><center><?php echo $producto["nombre"]; ?></center></b></h3>
							<img class="img-responsive" alt="<?php echo $producto["nombre"]; ?>" src="/Sistemas_2/productos/<?php echo $producto["tipo"]; ?>/<?php echo $producto["codp"]; ?>.png"/>
							<table align="center">
								<tr>
									<td><h5><b>Referencia:</b>  </h5></td>
									<td><h5><?php echo $producto["codp"]; ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Precio: </b></h5></td>
									<td><h5><b>$</b><?php echo $producto["precio"]; ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Cantidad: </b></h5></td>
									<td><h5><?php echo $producto["cantidad"]; ?></h5></td>
								</tr>
							</table>
							<center><a class='btn btn-primary' href='/Sistemas_2/Index.php/muestra_productos?id=<?php echo $producto["codp"]; ?>'><span class='glyphicon glyphicon-share-alt'></span> Ver mas</a></center>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>