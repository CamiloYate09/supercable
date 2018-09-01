<?php
$con = pg_connect("host=ec2-54-227-237-27.compute-1.amazonaws.com port=5432  dbname=ddob655ldc9d3u  user=lhpkliyrbkfwac  password=c4261efd43b96cb28c5cd52efe6d04298f0cd9b7ab88fe269313cfd798027670");



if (!$con) {
    echo "Error al establecer la conexion" . pg_errormessage();
}

if (isset($_POST['submit'])) {

    $type = $_POST['type'];
    $username = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $query = "SELECT * FROM login WHERE usuario='$username' AND contrasena='$password' AND tipo='$type'";
    echo "Error al establecer la conexion" . pg_errormessage();
    $result = pg_query($query);

    while ($row = pg_fetch_array($result)) {
        if ($row['usuario'] == $username && $row['contrasena'] == $password && $row['tipo'] == 'Admin') {
            header("Location: admin.php");
        }elseif ($row['usuario'] == $username && $row['contrasena'] == $password && $row['tipo'] == 'User'){
            header("Location: user.php");
        }
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width-device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimum-scale=1">
    <title>Super Cable</title>
    <link rel="stylesheet" href="styles/estilos.css">
    <!---->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"-->
    <!--          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->

</head>


<body id="particles-js">


<form  method="post">
    <img id="logo" src="img/LogoLetters.png" alt="Supercable">

    <table class="table table-striped table-dark">
        <tr>
            <td>
                <select name="type" id="">
                    <option value="-1">Seleccione el tipo de Usuario</option>
                    <option value="Admin">Admin</option>
                    <option value="User">Usuario</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="text" placeholder="&#128187; Usuario" name="usuario" required />
    <input type="password" placeholder="&#128273; Contraseña" name="contrasena" required/>
    <input type="submit" value="Ingresar" name="submit"/>
</form>


<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>


</html>
