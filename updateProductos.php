<?php   

include("conexion.php");

$noProducto = $_POST['noProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$unidadesProducto = $_POST['unidadesProducto'];
$descripcionProducto = $_POST['descripcionProducto'];


$enlace=conectar();

$sql = "UPDATE productos SET nombreProducto='$nombreProducto', precioProducto='$precioProducto',
 unidadesProducto='$unidadesProducto', descripcionProducto='$descripcionProducto' 
 WHERE noProducto='$noProducto'";

if (mysqli_query($enlace, $sql)) {
    echo "Actualización exitosa";
} else {
    echo "Error: " . mysqli_error($enlace); // Corrección aquí
}

mysqli_close($enlace);

header("Location: index1.php"); // Corrección aquí
exit(); // Añadido para terminar el script después de redirigir
?>
