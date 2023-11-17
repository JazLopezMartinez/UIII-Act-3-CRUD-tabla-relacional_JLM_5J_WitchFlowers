<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM flor_temporada WHERE idflortempo = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->idflortempo; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="idflortempo" value="<?php echo $producto->idflortempo; ?>">
	
			<label for="idpedido">idpedido:</label>
			<input value="<?php echo $producto->idpedido ?>" class="form-control" name="idpedido" required type="number" id="idpedido" placeholder="Escribe el idpedido">

			<label for="temporada">temporada:</label>
			<input value="<?php echo $producto->temporada ?>" class="form-control" name="temporada" required type="text" id="temporada" placeholder="Escribe la temporada">

			<label for="tipoflor">tipoflor:</label>
			<input value="<?php echo $producto->tipoflor ?>" class="form-control" name="tipoflor" required type="text" id="tipoflor" placeholder="tipoflor">

			<label for="nombreped">nombreped:</label>
			<input value="<?php echo $producto->nombreped ?>" class="form-control" name="nombreped" required type="text" id="nombreped" placeholder="nombreped">

			<label for="cantidadped">cantidadped:</label>
			<input value="<?php echo $producto->cantidadped ?>" class="form-control" name="cantidadped" required type="number" id="cantidadped" placeholder="cantidadped">
			
			<label for="nota">nota:</label>
			<input value="<?php echo $producto->nota ?>" class="form-control" name="nota" required type="text" id="nota" placeholder="Escribe la nota">

			<label for="tipopago">tipopago:</label>
			<input value="<?php echo $producto->tipopago ?>" class="form-control" name="tipopago" required type="text" id="tipopago" placeholder="Escribe el tipopago">

			<label for="precio">precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="precio">

			<label for="existencia">existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="existencia">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
