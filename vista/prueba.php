<?php
//include_once('controlador/salir.php');
include_once 'vendor/autoload.php';
include_once 'vista/administrador.php';

$uo = new Users();
echo "Error al establecer la conexion" . pg_errormessage();

for ($i = 0; $i < 5; $i++) {

    $uo->generaUser();
    echo "Error al establecer la conexion" . pg_errormessage();
}


//?>