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
	<?php if (isset($_SESSION["Tipo"])){
		if ($_SESSION["Tipo"]=="Administrador" || $_SESSION["Tipo"]=="Usuario"){
			echo $submenu2;
		}
	}?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h3><?php echo "".$string;?></h3></center>
		<?php endif ?>
		<?php require 'plantillas/menu/submenu_productos.php';?>
		<?php foreach($producto as $producto):?>
			<h1><center>Instrumentos de <?php echo $producto['tipo']; ?></center></h1>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class='panel-title'><center><b><?php echo $producto['nombre']; ?></b></center></h1>
				</div>
				<div class="panel-body">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<img src="/Sistemas_2/productos/<?php echo $producto["tipo"]; ?>/<?php echo $producto["codp"]; ?>.png" class="img-responsive" alt="<?php echo $producto['nombre']; ?>">
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<?php echo $producto['Descripcion']; ?>
								<h4><b>Precio: </b><?php echo $producto['precio']; ?></h4>
								<h4><b>Referencia: </b><?php echo $producto['codp']; ?></h4>
								<h4><b>Cantidad: </b><?php echo $producto['cantidad']; ?></h4>
							</div>
						</div>
						<div class="row">
							<?php
							if(isset($_SESSION["Tipo"])):?>
							    <?php switch($_SESSION["Tipo"]):
							        case 'Administrador': ?>
							        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>
											<form action="/Sistemas_2/Index.php/editar_producto" method="post" name="formEditarProd">
												<input type="hidden" name="id" value="<?php echo $producto["codp"];?>">
											</form>
											<center><a class="btn btn-primary" href="javascript:enviar_formEditarProd()"><span class='glyphicon glyphicon-pencil'></span> Editar</a></center>
										</p>
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<p>
											<form action="/Sistemas_2/Index.php/eliminar_producto" method="post" name="formEliminarProd">
												<input type="hidden" name="id" value="<?php echo $producto["codp"];?>">
											</form>
											<a class='btn btn-primary' href="javascript:enviar_formEliminarProd()"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
										</p>
									</div>
									<?php break;?>
								<?php case 'Usuario': ?>
							      	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									</div>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<a class='btn btn-primary' href='/Sistemas_2/Index.php/carrito?id=<?php echo $producto["codp"];?>'><span class='glyphicon glyphicon-shopping-cart'> Agregar a carrito</span></a>
									</div>
									<?php break ?>
								<?php endswitch ?>
							<?php else: ?>
							 	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								</div>
							<?php endif ?>
						</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>