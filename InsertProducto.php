<?php
include("conexion.php");

$noProducto = $_POST['noProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$unidadesProducto = $_POST['unidadesProducto'];
$descripcionProducto = $_POST['descripcionProducto'];

$enlace=conectar();

$sql = "INSERT INTO productos (noProducto, nombreProducto, precioProducto, unidadesProducto,  descripcionProducto)
        VALUES ('$noProducto', '$nombreProducto', '$precioProducto', '$unidadesProducto', '$descripcionProducto')";

if (mysqli_query($enlace, $sql)) {
    echo '<script language="javascript">alert("Producto agregado exitosamente"); window.location.href="index1.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);
?>
