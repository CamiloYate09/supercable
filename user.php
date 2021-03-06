<?php
//include_once('controlador/insertar.php');
//include_once('controlador/salir.php');
//?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <!--Semantic UI-->
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <title>Learnet</title>
</head>
<body>

<!--//Mostrar notificaciones de mensajes
//3-->
<?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>

<?php endif;  ?>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Luis Eduardo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Salir <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="controlador/salir.php">login</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--Contenedor-->

<div class="container-fluid jumbotron" >
    <div class="row">


        <div class="col-md-9">
            <div >
                <h3>Bienvenido a Learnet Luis Eduardo</h3>
     

<h4>Tus cursos perfilados a tu busqueda </h4>

  <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/lights.jpg">
        <img src="https://i0.wp.com/static.platzi.com/media/courses/opengraph-and.png?ssl=1" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Desarrollo Movil</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="https://static.platzi.com/media/courses/opengraph-firebase-praa-android.png" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Desarrollo Web</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="http://infotic.co/wp-content/uploads/2017/10/articles-61415_foto_marquesina.png" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Desarrollo Web</p>
        </div>
      </a>
    </div>
  </div>
</div>


<h4>Tus cursos disponibles para tu Cuidad Bogota</h4>

 <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="https://udemy-images.udemy.com/course/750x422/1504576_89d5.jpg">
        <img src="https://udemy-images.udemy.com/course/750x422/1504576_89d5.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Cursos Udemy</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="https://udemy-images.udemy.com/course/750x422/894834_ca04_4.jpg">
        <img src="https://udemy-images.udemy.com/course/750x422/894834_ca04_4.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Cursos Udemy</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="https://i.imgur.com/yMpdMkd.png">
        <img src="https://i.imgur.com/yMpdMkd.png" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Cursos Udemy</p>
        </div>
      </a>
    </div>
  </div>
</div>


<h4>Becas Disponibles para tu perfil </h4>

<div class="row">
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://admin.kienyke.com/wp-content/uploads/2018/04/cursos-online.jpg">
       <img src="https://admin.kienyke.com/wp-content/uploads/2018/04/cursos-online.jpg" alt="Lights" style="width:100%">
       <div class="caption">
         <p>Curso Fullstack Fedesoft</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://pbs.twimg.com/media/DlJo8djXoAAwBMD.jpg">
       <img src="https://pbs.twimg.com/media/DlJo8djXoAAwBMD.jpg" alt="Nature" style="width:100%">
       <div class="caption">
         <p>Piensa Digital</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="http://clustercreatic.com/media/filer_public/15/39/15395c0d-2018-4e32-868b-77255f0d63a6/curso_android-01-min.jpg">
       <img src="http://clustercreatic.com/media/filer_public/15/39/15395c0d-2018-4e32-868b-77255f0d63a6/curso_android-01-min.jpg" alt="Fjords" style="width:100%">
       <div class="caption">
         <p>CreaTic</p>
       </div>
     </a>
   </div>
 </div>
</div>


<h4>Bibliotecas con libros disponibles para tu perfil</h4>

<div class="row">
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://www.eltiempo.com/contenido/bogota/IMAGEN/IMAGEN-14882069-2.jpg">
       <img src="https://www.eltiempo.com/contenido/bogota/IMAGEN/IMAGEN-14882069-2.jpg" alt="Lights" style="width:100%">
       <div class="caption">
         <p>Bilioteca Virgilio Barco</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://www.kiero.co/ProductImages/ISBN%C2%A097861-1.jpg">
       <img src="https://www.kiero.co/ProductImages/ISBN%C2%A097861-1.jpg" alt="Nature" style="width:100%">
       <div class="caption">
         <p>Piensa Digital</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://olcovers2.blob.core.windows.net/coverswp/2011/07/curso_android1.png">
       <img src="https://olcovers2.blob.core.windows.net/coverswp/2011/07/curso_android1.png" alt="Fjords" style="width:100%">
       <div class="caption">
         <p>CreaTic</p>
       </div>
     </a>
   </div>
 </div>
</div>



<h4>Cursos Mas Cailifacdos en Youtube para comenzar Aprender </h4>

<div class="row">
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="http://www.inkmark.mx/images/slider-img5.1.jpg">
       <img src="http://www.inkmark.mx/images/slider-img5.1.jpg" alt="Lights" style="width:100%">
       <div class="caption">
         <p>Bilioteca Virgilio Barco</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://solucioneswindroid.es/wp-content/uploads/2018/02/youtube-logo-696x392.png">
       <img src="https://solucioneswindroid.es/wp-content/uploads/2018/02/youtube-logo-696x392.png" alt="Nature" style="width:100%">
       <div class="caption">
         <p>Piensa Digital</p>
       </div>
     </a>
   </div>
 </div>
 <div class="col-md-4">
   <div class="thumbnail">
     <a href="https://voltaico.lavozdegalicia.es/wp-content/uploads/2016/05/Youtube-chat.jpg">
       <img src="https://voltaico.lavozdegalicia.es/wp-content/uploads/2016/05/Youtube-chat.jpg" alt="Fjords" style="width:100%">
       <div class="caption">
         <p>CreaTic</p>
       </div>
     </a>
   </div>
 </div>
</div>


    <!--     Codigo de formulario
                             <form method="post" name="formulario" action="controlador/insertar.php">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Contrato</label>
                            <input type="number" class="form-control is-valid" id="validationServer01"
                                   placeholder="Numero de Contrato"  name="contrato" required autofocus>
                            <div class="valid-feedback">
                                ----
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Nombre</label>
                            <input type="text" class="form-control is-valid" id="validationServer02"
                                   placeholder="Robert" name="nombre" required autofocus>
                            <div class="valid-feedback">
                                ----
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer02">Apellido</label>
                            <input type="text" class="form-control is-valid" id="validationServer02"
                                   placeholder="Morales"  name="apellido" required autofocus>
                            <div class="valid-feedback">
                                ----
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer03">Tipo Documento</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03"
                                   placeholder="Tipo de Documento" name="tipo" required autofocus>
                            <div class="invalid-feedback">
                                CC - TI
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer04">Numero de Documento</label>
                            <input type="number" class="form-control is-invalid" id="validationServer04"
                                   placeholder="Numero de Documento" name="numerodocumento" required autofocus>
                            <div class="invalid-feedback">
                                # 1.255.5555
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer05">Email</label>
                            <input type="email" class="form-control is-invalid" name="email" id="validationServer05"
                                   placeholder="Email" autofocus
                            >
                            <div class="invalid-feedback">
                                morales@gmail.com
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer05">Hobby 1</label>
                            <input type="text" class="form-control is-invalid" name="hobby1" id="validationServer05"
                                   placeholder="Curso 1" autofocus>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer05">Hobby 2</label>
                            <input type="text" class="form-control is-invalid" name="hobby2" id="validationServer05"
                                   placeholder="Curso 2" autofocus>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer05">Hobby 3</label>
                            <input type="text" class="form-control is-invalid" name="hobby3" id="validationServer05"
                                   placeholder="Curso 3" autofocus>

                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">

                            <button class="btn btn-primary" name="save" type="submit"
                                    onclick="alert('Tu imformacion se esta actualizando')">Guardar
                            </button>
                        </div>
                    </div>
                </form>

                       -->

            </div>

        </div>

    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=" https:
                            //code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
