<?php ob_start();
  if(isset($_SESSION["Tipo"])){
    switch($_SESSION["Tipo"]){
      case 'Administrador':
        include 'plantillas/menu/menu_administrador.php';
      break;
      case 'Usuario':
        header("Location: /Sistemas_2/Index.php/inicio");
      break;
    }
  }else{
  	header("Location: /Sistemas_2/Index.php/inicio");
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	<?php if ($_SESSION["Tipo"]=="Administrador"): ?>
		<?php echo $submenu1;?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>Lista de usuarios</center></b></h1>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table-hover">
						<thead>
							<tr>
								<th><center>Cedula</center></th>
								<th><center>Nombre</center></th>
								<th><center>Primer Apellido</center></th>
								<th><center>Segundo Apellido</center></th>
								<th><center>Email</center></th>
								<th><center>Telefono</center></th>
								<th><center>Direccion</center></th>
								<th><center>Ciudad</center></th>
								<th><center>Usuario</center></th>
								<th><center>Rol</center></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($usuarios as $usuarios):?>
							<tr>
								<td><center><?php echo $usuarios["Cedula"];?></center></td>
								<td><center><?php echo $usuarios["Nombre"];?></center></td>
								<td><center><?php echo $usuarios["Apellido1"];?></center></td>
								<td><center><?php echo $usuarios["Apellido2"];?></center></td>
								<td><center><?php echo $usuarios["Email"];?></center></td>
								<td><center><?php echo $usuarios["Telefono"];?></center></td>
								<td><center><?php echo $usuarios["Direccion"];?></center></td>
								<td><center><?php echo $usuarios["Ciudad"];?></center></td>
								<td><center><?php echo $usuarios["Usuario"];?></center></td>
								<td><center><?php echo $usuarios["Tipo"];?></center></td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
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