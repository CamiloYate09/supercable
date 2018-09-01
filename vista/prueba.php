<?php
include_once('administrador.php');

//fetch the record to be updated
if (isset($_GET['edit'])) {
    $contrato = $_GET['edit'];
    $edit_state = true;
    //frontend 7) llamara datos
    $rec = pg_query($db, "SELECT * FROM ventas WHERE contrato=$contrato");
    $record = pg_fetch_array($rec);
    $contrato = $record['contrato'];
    $nombre = $record['nombre'];
    $apellido = $record['apellido'];
    $tipo = $record['tipo'];
    $numerodocumento = $record['numerodocumento'];
    $email = $record['email'];
    $hobby1 = $record['hobby1'];
    $hobby2 = $record['hobby2'];
    $hobby3 = $record['hobby3'];


}

?>


<!DOCTYPE HTML>

<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/styles/estilosadmin.css">
    <link rel="stylesheet" type="text/css" href="/styles/semantic.min.css">
    <!--    //SEMANTIC UI CON  JQUERY-->

    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="/js/semantic.js"></script>

</head>
<body>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
<div class="ui teal  menu">
    <div class="header item">
        Administrador Learnet
    </div>
    <a class="item active " href="/user.php">
        Portal Cursos
    </a>

    <a class="item active " href="/controlador/salir.php">
        Salir
    </a>


</div>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

<div class="ui small circular rotate left reveal image imgcenter">
    <img src="../img/admin.png " class="hidden content">
</div>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

<!--//Mostrar notificaciones de mensajes
//3-->
<?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>

<?php endif; ?>


<table class="ui inverted grey celled">
    <thead>
    <tr>
        <!--fronted 8) desplegar datos en html-->
        <th>contrato</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>tipo</th>
        <th>numerodocumento</th>
        <th>email</th>
        <th>hobby1</th>
        <th>hobby2</th>
        <th>hobby3</th>


        <th colspan="2">Action</th>
    </tr>

    </thead>


    <tbody>
    <!-- 9)llamando registros de la base de datos-->
    <?php while ($row = pg_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['contrato']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['tipocedula']; ?></td>
            <td><?php echo $row['cc']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['hobby1']; ?></td>
            <td><?php echo $row['hobby2']; ?></td>
            <td><?php echo $row['hobby3']; ?></td>
        </tr>

    <?php } ?>
    </tbody>

</table>


</body>


</html>