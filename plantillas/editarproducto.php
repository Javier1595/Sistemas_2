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
            <h1 class="panel-title"><b><center>Editar producto</center></b></h1>
          </div>
          <div class="panel-body">
            <?php foreach($producto as $producto):?>
            <form name="formEditarProd" method="post" action="/Sistemas_2/Index.php/actualizar_producto" class="form-horizontal" role="form">
              <div class="form-group">
                <label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Nombre producto</label>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                  <input type="text" class="form-control" id="ejemplo_text_3" placeholder="Nombre del producto" value="<?php echo $producto["nombre"]; ?>" name="Nombrep" required>
                </div>
              </div>
              <div class="form-group">
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Codigo</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Codigo del producto" value="<?php echo $producto["codp"];?>" name="Codigop" readonly>
                </div>
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Precio</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Precio en pesos" value="<?php echo $producto["precio"]; ?>" name="Preciop" required>
                </div>
              </div>
              <div class="form-group">
                <label for="ejemplo_text_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Clasificacion</label>
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" id="ejemplo_text_3" placeholder="Tipo" value="<?php echo $producto["tipo"]; ?>" name="Tipop" readonly>
                  </div>
                <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Cantidad</label>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <input type="number" class="form-control" id="ejemplo_number_3" placeholder="Cantidad" value="<?php echo $producto["cantidad"]; ?>" name="Cantidadp"required>
                </div>
              </div>
              <label for="ejemplo_number_3" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Descripcion</label>
               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <textarea rows="3" type="text" class="form-control" id="ejemplo_number_3" placeholder="Descripcion del producto" name="Descripcionp"required><?php echo $producto['Descripcion'];?></textarea>
                </div>
            </form>
            <?php endforeach ?>
            <center><a class='btn btn-primary' href='javascript:enviar_formEditarProd()'><span class="glyphicon glyphicon-refresh"></span> Actualizar</a></center>
          </div>
	     </div>
    </div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<?php echo $menu1;?>
	</div>
</div>
<?php $contenido = ob_get_clean(); ?>
<?php include "PlantillaBase.php"; ?>