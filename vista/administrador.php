<?php

session_start();

//INICIALIZAR VARIABLES

$contrato = "";//1
$nombre = "";//2
$apellido = "";//3
$tipocedula = "";//4
$cc = "";//5
$email = "";//6
$hobby1 = "";//7
$hobby2 = "";//8
$hobby3 = "";//9


//actualizar registros
//3
$edit_state = false;


//conectar con la base de datos

$db = pg_connect("host=ec2-54-227-237-27.compute-1.amazonaws.com port=5432  dbname=ddob655ldc9d3u  user=lhpkliyrbkfwac  password=c4261efd43b96cb28c5cd52efe6d04298f0cd9b7ab88fe269313cfd798027670");

// si se presiona el boton save de el formulario

if (isset($_POST['save'])) {
    //2)empiezo a pasar los nombres de los atributos de mi formulario

    //$name = $_POST['name'];
    //$address = $_POST['address'];
    $contrato = $_POST['contrato'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipocedula = $_POST['tipocedula'];
    $cc = $_POST['cc'];
    $email = $_POST['email'];
    $hobby1 = $_POST['hobby1'];
    $hobby2 = $_POST['hobby2'];
    $hobby3 = $_POST['hobby3'];


    //3) hacemos la query de insertar datos

    $query = "INSERT INTO VENTAS(contrato,nombre,apellido,tipocedula,cc,email,hobby1,hobby2,hobby3) VALUES('$contrato', '$nombre',
        '$apellido','$tipocedula','$cc','$email','$hobby1','$hobby2','$hobby3')";
    pg_query($con, $query);
    //Mostrar notificaciones de mensajes
    //3
    $_SESSION['msg'] = "Imformacion Guardada";

    header('location: ./prueba.php'); //redireccionamos a la pagina principal

}

//actualizar registros
//4)-->

if (isset($_POST['update'])) {
    $contrato = pg_escape_string($_POST['contrato']);
    $nombre = pg_escape_string($_POST['nombre']);
    $apellido = pg_escape_string($_POST['apellido']);
    $tipocedula = pg_escape_string($_POST['tipocedula']);
    $cc = pg_escape_string($_POST['cc']);
    $email = pg_escape_string($_POST['email']);
    $hobby1 = pg_escape_string($_POST['hobby1']);
    $hobby2 = pg_escape_string($_POST['hobby2']);
    $hobby3 = pg_escape_string($_POST['hobby3']);


    pg_query($db, "UPDATE ventas SET contrato='$contrato', nombre='$nombre', apellido='$apellido', tipocedula='$tipocedula' , cc='$cc', email='$email', hobby1='$hobby1', hobby2='$hobby2',hobby3='$hobby3 WHERE contrato=$contrato");
    $_SESSION['msg'] = "Imformacion Actualizada";

    header('location: ./prueba.php'); //redireccionamos a la pagina principal
}

//<!-- BORRAR REGISTROS
//5)-->
if (isset($_GET['del'])) {
    $empleado_id = $_GET['del'];
    pg_query($db, "DELETE FROM ventas WHERE contrato=$contrato");
    $_SESSION['msg'] = "Imformacion Eliminada";

    header('location: ./prueba.php'); //redireccionamos a la pagina principal

}

//recuperar registros##################
//6)
$results = pg_query($db, "SELECT * FROM ventas ORDER BY contrato ");


?>