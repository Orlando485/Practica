<?php
include('conexion.php');
    $noProducto = $_POST['noProducto'];

$sql = "DELETE FROM productos WHERE noProducto = '$noProducto'";

$enlace=conectar();
if (mysqli_query($enlace, $sql)){
    echo '<script language="javascript">alert("El producto ha sido eliminado"); window.location.href="index1.php";</script>';
}else{
    echo "Error deleting: " . mysqli_error($enlace);
}
mysqli_close($enlace);
?>