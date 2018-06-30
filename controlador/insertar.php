<?php

include("../user.php");

//$con

//validar que los datos no esten vacios
session_start();

$contrato = "";//1
$nombre = "";//2
$apellido = "";//3
$tipo = "";//4
$numerodocumento = "";//5
$email = "";//6
$hobby1 = "";//7
$hobby2 = "";//8
$hobby3 = "";//9

$con = pg_connect("host=ec2-54-227-237-27.compute-1.amazonaws.com port=5432  dbname=ddob655ldc9d3u  user=lhpkliyrbkfwac  password=c4261efd43b96cb28c5cd52efe6d04298f0cd9b7ab88fe269313cfd798027670");

if (isset($_POST['save'])) {
    //2)empiezo a pasar los nombres de los atributos de mi formulario

    //$name = $_POST['name'];
    //$address = $_POST['address'];
    $contrato = $_POST['contrato'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo = $_POST['tipo'];
    $numerodocumento = $_POST['numerodocumento'];
    $email = $_POST['email'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];


    //3) hacemos la query de insertar datos

    $query = "INSERT INTO VENTAS(contrato,nombre,apellido,tipocedula,cc,email,hobby1,hobby2,hobby3) VALUES('$contrato', '$nombre',
        '$apellido','$tipo','$numerodocumento','$email','$hobby1','$hobby2','$hobby3')";
    pg_query($con, $query);
    //Mostrar notificaciones de mensajes
    //3
    $_SESSION['msg'] = "Imformacion Guardada";

    header('location: ../user.php'); //redireccionamos a la pagina principal

}


?>