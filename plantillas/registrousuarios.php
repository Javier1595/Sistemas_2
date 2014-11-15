<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION['Tipo']){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        header("Location: /Sistemas_2/Index.php/inicio");
      break;
    }
  }else{
  	include 'plantillas/menu/menu_publico.php';
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	<?php if (isset($_SESSION["Tipo"])=="Administrador"): ?>
		<?php echo $submenu1;?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(empty($registro)):?>
		<?php else:?>
			<center><h4><?php echo "".$registro;?></h4></center>
		<?php endif ?>
		<form action="/Sistemas_2/Index.php/Registrar_usuario" method="post" name="formRegistro" class="form-horizontal">
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Cedula</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_number_3" placeholder="Cedula" name="Cedula" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nombre</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Nombre" name="Nombre" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Primer Apellido</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Primer Apellido" name="Papellido" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_2" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Segundo Apellido</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Segundo Apellido" name="Sapellido" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Email</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="email" class="form-control" id="ejemplo_email_3" placeholder="Email" name="Email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Telefono</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_number_3" placeholder="Telefono" name="Telefono" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Direccion</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Direccion" name="Direccion" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Ciudad</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Ciudad" name="Ciudad" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Usuario</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="text" class="form-control" id="ejemplo_text_3" placeholder="Usuario" name="Usuario" required>
				</div>
			</div>
			<div class="form-group">
				<label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Contraseña</label>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="password" class="form-control" id="ejemplo_password_3" placeholder="Contraseña" name="Contrasena" required>
				</div>
			</div>
			<?php
				if(isset($_SESSION["Tipo"])):?>
					<?php if ($_SESSION["Tipo"]=="Administrador"):?>
					<div class="form-group">
		                <label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Clasificacion</label>
		                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                  <select class="form-control" name="Tipop" required>
		                    <option selected></option>
		                    <option>Administrador</option>
		                    <option>Usuario</option>
		                  </select>
		                </div>
		            </div>
		            <input type="hidden" class="form-control" id="ejemplo_text_3" value="1" name="aux">
		        	<?php endif ?>
		        <?php else: ?>
							<input type="hidden" class="form-control" id="ejemplo_text_3" value="Usuario" name="Tipop">
							<input type="hidden" class="form-control" id="ejemplo_text_3" value="2" name="aux">
				<?php endif ?>
		       			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		       				<center><a class="btn btn-primary" href="javascript:enviar_formRegistro()"><span class="glyphicon glyphicon-floppy-disk"></span> Registrar</a></center>
		                </div>
		</form>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>