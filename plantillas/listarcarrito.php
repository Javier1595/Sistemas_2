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
		<?php echo $submenu2; $total=0;?>
	<?php else: ?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h1><center>Carrito de <?php echo "".$_SESSION["Nombre"]; ?></center></h1>
		<div class="panel panel-primary">
			<div class="panel-body">
				<?php foreach ($carrito as $carrito):?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="caption">
							<h3><b><center><?php echo $carrito["Nombre"]; ?></center></b></h3>
							<img class="img-responsive" alt="<?php echo $carrito["Nombre"]; ?>" src="/Sistemas_2/productos/<?php echo $carrito["Tipo"]; ?>/<?php echo $carrito["Codp"]; ?>.png"/>
							<table align="center">
								<tr>
									<td><h5><b>Referencia:</b>  </h5></td>
									<td><h5><?php echo $carrito["Codp"]; ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Precio: </b></h5></td>
									<td><h5><b>$</b><?php echo $carrito["Precio"]; ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Cantidad: </b></h5></td>
									<td><h5><?php echo $carrito["Cantidad"]; ?></h5></td>
								</tr>
								<tr>
									<td><h5><b>Total: </b></h5></td>
									<td><h5><b>$</b><?php echo $carrito["Total"]; ?></h5></td>
								</tr>
							</table>
						</div>
					</div>
					<?php $total=$total+$carrito["Total"]; ?>
				<?php endforeach ?>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"></div><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><h4 align="right"><b>Total pedido:</b> <b>$</b><?php echo "".$total; ?> </h4></div>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>