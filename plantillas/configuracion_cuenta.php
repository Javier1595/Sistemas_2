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
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
		<?php foreach($usuario as $usuario):?>
		<form action="/Sistemas_2/Index.php/Actualizar_usuario" method="post" name="formRegistro" class="form-horizontal">
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Cedula</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_number_3" placeholder="Cedula" value="<?php echo $usuario['Cedula']; ?>" name="Cedula" readonly>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nombre</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Nombre" value="<?php echo $usuario['Nombre']; ?>" name="Nombre" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Primer Apellido</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Primer Apellido" value="<?php echo $usuario['Apellido1']; ?>" name="Papellido" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_2" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Segundo Apellido</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Segundo Apellido" value="<?php echo $usuario['Apellido2']; ?>" name="Sapellido" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Email</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="email" class="form-control" id="ejemplo_email_3" placeholder="Email" value="<?php echo $usuario['Email']; ?>" name="Email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Telefono</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_number_3" placeholder="Telefono" value="<?php echo $usuario['Telefono']; ?>" name="Telefono" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Direccion</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Direccion" value="<?php echo $usuario['Direccion']; ?>" name="Direccion" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Ciudad</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Ciudad" value="<?php echo $usuario['Ciudad']; ?>" name="Ciudad" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Usuario</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Usuario" value="<?php echo $usuario['Usuario']; ?>"name="Usuario" required>
				</div>
			</div>
					<div class="form-group">
						<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Tipo</label>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Contraseña" value="<?php echo $usuario['Tipo']; ?>" name="Tipop" readonly>
						</div>
					</div>
		       			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		       				<center><a class="btn btn-primary" href="javascript:enviar_formRegistro()"><span class="glyphicon glyphicon-refresh"></span> Actualizar</a></center>
		                </div>
			</form>
		<?php endforeach ?>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>