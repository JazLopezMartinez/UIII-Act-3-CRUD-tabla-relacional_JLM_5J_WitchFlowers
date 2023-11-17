<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM flor_temporada;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>idflortempo</th>
					<th>idpedido</th>
					<th>temporada</th>
					<th>tipoflor</th>
					<th>nombreped</th>
					<th>cantidadped</th>
					<th>nota</th>
					<th>tipopago</th>
					<th>precio</th>
					<th>existencia</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->idflortempo ?></td>
					<td><?php echo $producto->idpedido ?></td>
					<td><?php echo $producto->temporada ?></td>
					<td><?php echo $producto->tipoflor ?></td>
					<td><?php echo $producto->nombreped ?></td>
					<td><?php echo $producto->cantidadped ?></td>
					<td><?php echo $producto->nota ?></td>
					<td><?php echo $producto->tipopago ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->idflortempo?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->idflortempo?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>