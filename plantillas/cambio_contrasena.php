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
	<?php if($_SESSION["Tipo"]=="Administrador"): ?>
		<?php echo $submenu1;?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
		<form action="/Sistemas_2/Index.php/Actualizar_contrasena" method="post" name="formActualizarContrasena" class="form-horizontal">
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Contraseña actual</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="password" class="form-control" id="ejemplo_email_3" placeholder="Contraseña actual" name="ContraActual" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nueva contraseña</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="password" class="form-control" id="ejemplo_email_3" placeholder="Nueva contraseña" name="ContraNueva" required>
				</div>
			</div>
			<div class="form-group">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input type="hidden" name="Nombre" value="<?php echo $_SESSION["Nombre"];?>">
				</div>
            </div>
		</form>
		<center><a class='btn btn-primary' href="javascript:enviar_formActualizarContrasena()"><span class="glyphicon glyphicon-refresh"></span> Actualizar</a><center>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>