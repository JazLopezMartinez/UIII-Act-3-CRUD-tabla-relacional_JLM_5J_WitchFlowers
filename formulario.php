<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
	<label for="idpedido">idpedido:</label>
			<input  class="form-control" name="idpedido" required type="number" id="idpedido" placeholder="Escribe el idpedido">

			<label for="temporada">temporada:</label>
			<input  class="form-control" name="temporada" required type="text" id="temporada" placeholder="Escribe la temporada">

			<label for="tipoflor">tipoflor:</label>
			<input class="form-control" name="tipoflor" required type="text" id="tipoflor" placeholder="tipoflor">

			<label for="nombreped">nombreped:</label>
			<input class="form-control" name="nombreped" required type="text" id="nombreped" placeholder="nombreped">

			<label for="cantidadped">cantidadped:</label>
			<input class="form-control" name="cantidadped" required type="number" id="cantidadped" placeholder="cantidadped">
			
			<label for="nota">nota:</label>
			<input  class="form-control" name="nota" required type="text" id="nota" placeholder="Escribe la nota">

			<label for="tipopago">tipopago:</label>
			<input class="form-control" name="tipopago" required type="text" id="tipopago" placeholder="Escribe el tipopago">

			<label for="precio">precio:</label>
			<input  class="form-control" name="precio" required type="number" id="precio" placeholder="precio">

			<label for="existencia">existencia:</label>
			<input  class="form-control" name="existencia" required type="number" id="existencia" placeholder="existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>