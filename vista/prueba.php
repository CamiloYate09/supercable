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
        Administrador SuperCable
    </div>
    <a class="item active " href="index.php">
        EMPLOYEES
    </a>

</div>
<!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

<div class="ui small circular rotate left reveal image imgcenter">
    <img src="../img/supercable.png " class="visible content ">
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
            <td><?php echo $row['tipo']; ?></td>
            <td><?php echo $row['numerodocumento']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['hobby1']; ?></td>
            <td><?php echo $row['hobby2']; ?></td>
            <td><?php echo $row['hobby3']; ?></td>
            <td>
                <!--10)//actualizar registros-->
                <a class="ui circular blue  icon button" href="prueba.php?edit=<?php echo $row['contrato']; ?>">
                    Edit</a>
            </td>
            <td>
                <!-- 11)BORRAR REGISTROS-->
                <a class="ui circular teal twitter icon button"
                   href="administrador.php?del=<?php echo $row['contrato']; ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>
    </tbody>

</table>
<!--server.php conexion con la base de datos-->
<form action="administrador.php" method="POST" class="ui form">
    <!--//12) actualizar registros en el formulario-->
    <input type="hidden" name="contrato" value="<?php echo $contrato; ?>">


    <div class="field">
        <div class="two fields">

            <div class="ui right labeled input corner">
                <input type="number" placeholder="Enter ..." autofocus maxlength="20" name="contrato"
                       value="<?php echo $contrato; ?>">
                <div class="ui teal   label">
                    contrato
                </div>
            </div>


            <div class="ui right labeled input ">
                <input type="text" placeholder="Enter ..." autofocus maxlength="20" name="nombre"
                       value="<?php echo $nombre; ?>">
                <div class="ui teal   label">
                    Nombre
                </div>
            </div>

        </div>


    </div>

    <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

    <div class="field">
        <div class="two fields">
            <div class="ui right labeled input ">
                <input type="text" placeholder="Enter ..." name="apellido" autofocus maxlength="50"
                       value="<?php echo $apellido; ?>">
                <div class="ui teal   label">
                    Apellido
                </div>
            </div>


            <div class="ui right labeled input ">
                <input type="text" placeholder="Enter ..." autofocus maxlength="15" name="tipo"
                       value="<?php echo $tipo; ?>">
                <div class="ui teal   label">
                    Tipo
                </div>
            </div>
        </div>
    </div>


    <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

    <div class="field">
        <div class="two fields">
            <div class="ui right labeled input ">
                <input type="number" placeholder="Enter..." name="numerodocumento"
                       value="<?php echo $numerodocumento; ?>">
                <div class="ui teal   label">
                    Numero Documento
                </div>
            </div>


            <div class="ui right labeled input ">
                <input type="email" placeholder="Enter ..." autofocus maxlength="20" name="email"
                       value="<?php echo $email; ?>">
                <div class="ui teal   label">
                    Email
                </div>
            </div>
        </div>
    </div>


    <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->

    <div class="field">
        <div class="two fields">
            <div class="ui right labeled input ">
                <input type="text" placeholder="Enter ..." autofocus maxlength="14" name="hobby1"
                       value="<?php echo $hobby1; ?>">
                <div class="ui teal   label">
                    Hobby1
                </div>
            </div>


            <div class="two fields">
                <div class="ui right labeled input ">
                    <input type="text" placeholder="Enter ..." autofocus maxlength="14" name="hobby2"
                           value="<?php echo $hobby2; ?>">
                    <div class="ui teal   label">
                        Hobby2
                    </div>
                </div>

            </div>
        </div>

        <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
        <div class="field">
            <div class="two fields">
                <div class="ui right labeled input ">
                    <input type="text" placeholder="Enter ..." autofocus maxlength="14" name="hobby3"
                           value="<?php echo $hobby3; ?>">
                    <div class="ui teal   label">
                        Hobby3
                    </div>
                </div>


            </div>
        </div>


        <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->
        <div class="input-group">
            <!-- //actualizar registros
             //3-->
            <?php if ($edit_state == false): ?>

                <button type="submit" name="save" class="btn" onclick="alert('Tu imformacion se esta actualizando')">
                    Guardar
                </button>
                <button type="button" onclick="alert('Tu imformacion se esta actualizando')"
                        class="ui secondary  loading button positive"></button>
            <?php else: ?>

                <button type="submit" name="update" class="btn" onclick="alert('Tu imformacion se esta actualizando')">
                    Actualizar
                </button>
                <button type="button" onclick="alert('Tu imformacion se esta actualizando')"
                        class="ui secondary  loading button positive"></button>
            <?php endif; ?>

        </div>

        <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->


</form>


</body>


</html>