<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["idpedido"]) || 
	!isset($_POST["temporada"]) || 
	!isset($_POST["tipoflor"]) || 
	!isset($_POST["nombreped"]) || 
	!isset($_POST["cantidadped"]) || 
	!isset($_POST["nota"])|| 
	!isset($_POST["tipopago"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["existencia"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$idpedido = $_POST["idpedido"];
$temporada = $_POST["temporada"];
$tipoflor = $_POST["tipoflor"];
$nombreped = $_POST["nombreped"];
$cantidadped = $_POST["cantidadped"];
$nota = $_POST["nota"];
$tipopago = $_POST["tipopago"];
$precio = $_POST["precio"];
$existencia = $_POST["existencia"];
$idflortempo = $_POST["idflortempo"];

$sentencia = $base_de_datos->prepare("UPDATE flor_temporada SET idpedido = ?, temporada = ?, tipoflor = ?, nombreped = ?, cantidadped = ?, nota = ?, tipopago = ?, precio = ?, existencia = ? WHERE idflortempo = ?;");
$resultado = $sentencia->execute([$idpedido, $temporada, $tipoflor, $nombreped, $cantidadped, $nota, $tipopago, $precio, $existencia, $idflortempo]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>