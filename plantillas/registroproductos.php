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
  	header("Location: /Sistemas_2/Index.php/inicio");
  } ?>
<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
	<?php if ($_SESSION["Tipo"]=="Administrador"): ?>
		<?php echo $submenu2;?>
	<?php endif ?>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<?php if(empty($string)):?>
		<?php else:?>
			<center><h4><?php echo "".$string;?></h4></center>
		<?php endif ?>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h1 class="panel-title"><b><center>Ingreso producto nuevo</center></b></h1>
          </div>
          <div class="panel-body">
            <form name="formRegistroProd" enctype="multipart/form-data" method="post" action="/Sistemas_2/Index.php/registrar_producto" class="form-horizontal" role="form">
              <div class="form-group">
                <label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nombre producto</label>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                  <input type="text" class="form-control" id="ejemplo_text_3" placeholder="Nombre del producto" name="Nombrep" required>
                </div>
              </div>
              <div class="form-group">
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Codigo</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Codigo del producto" name="Codigop" required>
                </div>
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Precio</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Precio en pesos" name="Preciop" required>
                </div>
              </div>
              <div class="form-group">
                <label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Clasificacion</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <select class="form-control" name="Tipop" required>
                    <option></option>
                    <option>Percusion</option>
                    <option>Viento</option>
                    <option>Cuerda</option>
                    <option>Teclado</option>
                  </select>
                </div>
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Cantidad</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Cantidad" name="Cantidadp"required>
                </div>
              </div>
              <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Descripcion</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <textarea rows="3" type="number" class="form-control" id="ejemplo_number_3" placeholder="Descripcion del producto" name="Descripcionp"required></textarea>
                </div>
              <div class="form-group">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <input type="file" id="ejemplo_archivo_1" name="archivo" required>
                  <p class="help-block">Imagen tipo PNG, de 1600 x 1600</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                </div>
              </div>
            </form>
            <center><a class='btn btn-primary' href='javascript:enviar_formRegistroProd()'><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</a></center>
          </div>
	     </div>
    </div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>