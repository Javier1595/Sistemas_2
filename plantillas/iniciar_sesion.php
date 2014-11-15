<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'admin':
        header("Location: /Sistemas_2/Index.php/inicio");
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
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Iniciar sesion</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="col-sm-1 col-md-1 col-lg-1">
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<form action="/Sistemas_2/Index.php/Login" method="post" name="formInicioSesion">
						  	<div class="form-group" action="login.php" method="post">
					          <label>Usuario: </label>
					          <div class="input-group">
					            <input type="text" class="form-control" id="ejemplo_text_3" placeholder="Usuario" name="usuario" required>
					            <span class="input-group-btn">
					              <button class="btn btn-default" type="button" id="filter-clear"><span class="glyphicon glyphicon-user"></span></button>
					            </span>
					          </div>
					          <label>Contraseña</label>
					          <div class="input-group">
					            <input type="password" class="form-control" id="ejemplo_password_3" placeholder="Contraseña" name="contrasena" required>
					            <span class="input-group-btn">
					              <button class="btn btn-default" type="button" id="filter-clear"><span class="glyphicon glyphicon-lock"></span></button>
					            </span>
					          </div>
					        </div>
					        <div class="input-group">
						        	<center><a class="btn btn-primary" href="javascript:enviar_formInicioSesion()"><span class='glyphicon glyphicon-ok-sign'></span> Ingresar</a></center>
							</div>
					</form>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<p align="Justify">¿Te gustan nuestros instrumentos?, registrate y podras tener mas informacion sobre este gran mundo
					que esperas, <a href="/Sistemas_2/Index.php/registrousuarios"><span class="glyphicon glyphicon-edit"></span> Registrate</a></p>
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>