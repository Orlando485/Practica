<?php

function conectar(){
    $server="localhost";
    $user="root";
    $pass="987654321";
    $bd="progweb";
        
    $con=mysqli_connect($server, $user, $pass, $bd) or die ("error de conexion".mysqli_error());

    return $con;
}
?>