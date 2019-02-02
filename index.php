<?php session_start(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Pastores Trochez - Ministerio Internacional Activate">
  <meta name="keywords" content="Ministerio Misionero">
  <meta name="author" content="pastorestrochez.com">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Noto+Sans" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <!-- Firescroll -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href=img/favicon.png>
  <title>Pastores Trochez - ACTIVATE Ministerio Internacional</title>
</head>

<body>
  <!-- navbar start -->
  <nav>
    <div class="nav-wrapper blue darken-3">
      <a class="brnad-logo center" href="index.html">
        <img src="img/logo.png" width="40px" height="auto" alt=""> </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text">
        <i class="material-icons black-text">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="white-text" href="index.html">Inicio</a>
        </li>
        <li>
          <a class="white-text" href="#bienvenidos">Nosotros</a>
        </li>
        <li>
          <a class="white-text" href="#unete">Únete</a>
        </li>
        <li>
          <a class="white-text" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li>
      <a href="index.html">Inicio</a>
    </li>
    <li>
      <a href="#bienvenidos">Nosotros</a>
    </li>
    <li>
      <a href="#unete">Únete</a>
    </li>
    <li>
      <a href="#contacto">Contacto</a>
    </li>
  </ul>
  <!-- navbar end -->

  <!-- Slider start -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/pastorestrochez.jpg">
        <!-- random image -->
        <div class="caption left-align">
          <h3>Bienvenidos</h3>
          <h5 class="light grey-text text-lighten-3">-Pastores Trochez</h5>
          <a class="btn blue accent-4 white-text" href="#bienvenidos">Sobre nosotros</a>
        </div>
      </li>
      <li>
        <img src="img/blueflame.jpg">
        <!-- random image -->
        <div class="caption center-align">
          <h3>AIM</h3>
          <h5 class="light grey-text text-lighten-3">Activate International Ministry</h5>
          <a class="btn blue accent-4 white-text" href="#aim">Conoce más</a>
        </div>
      </li>
      <li>
        <img src="img/itzelmusic.jpg">
        <!-- random image -->
        <div class="caption right-align black-text">
          <h3>Itzel Music</h3>
          <h5 class="light black-text">Suscríbete a nuestro canal</h5>
          <a class="btn blue accent-4 black-text" href="#itzel">
            <i class="fab fa-youtube"></i>Suscríbete</a>
        </div>
      </li>
      <li>
        <img src="img/donate.jpg">
        <!-- random image -->
        <div class="caption center-align">
          <h3>Únete a nosotros</h3>
          <h5 class="light grey-text text-lighten-3">Descubre las formas de unirte al movimiento</h5>
          <a class="btn blue accent-4 white-text" href="#unete">Únete</a>
        </div>
      </li>
    </ul>
  </div>
  <!-- Slider end -->
  <main>

    <!-- Welcome section -->
    <section class="container-fluid block-section-1" id="bienvenidos">
      <div class="container">
        <div class="row">
          <div class="text-left center paragraph col s12 m6 l6">
            <h3>Bienvenidos</h3>
            <p>Gracias por visitar nuestro website, aquí podrás encontrar todo lo relacionado al ministerio que Dios ha puesto
              en nuestras manos. Es un honor para nosotros ponernos a la disposición de Dios. Navega nuestro website para
              que conozcas sobre nosotros, el ministerio AIM (Actívate Ministerio Internacional) y el ministerio de adoración
              Itzel Music. Bendiciones.</p>
          </div>
          <div class="col s12 m6 l6">
            <img class="img-right flowers" src="img/welcome.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Welcome section end -->

    <!-- AIM section -->
    <section class="container-fluid grey lighten-2 block-section-2" id="aim">
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l6">
            <img class="img-left flowers" src="img/logo.png
            " alt="">
          </div>
          <div class="text-right center paragraph col s12 m6 l6">
            <h3>AIM</h3>
            <p>ACTÍVATE Ministerio Internacional es un ministeiro misionero que busca alcanzar las naciones con el amor de Dios.
              Todo lo que el mundo necesita para poder ser transformado, pero que el mundo rechaza. Visita la sección SOBRE
              NOSOTROS y conoce más, así como la forma en la puedes unirte y ser parte de este esfuerzo.</p>
          </div>
        </div>
      </div>


      <div class = "icon-section">
        <h3 class="text-black lead center" href="">Búscanos en las redes sociales</h3>
        <div class="container redes-sociales">
          <a href="https://www.facebook.com/pastorestrochez">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="https://twitter.com/pastorestrochez">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
          <a href="https://www.instagram.com/pastorestrochez/">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
          <a href="https://www.snapchat.com/download">
            <i class="fab fa-snapchat fa-2x"></i>
          </a>
          <a href="https://www.whatsapp.com/">
            <i class="fab fa-whatsapp fa-2x"></i>
          </a>
        </div>
      </div>

    </section>
    <!-- AIM section end -->

    <!-- Itzel Music Section -->
    <section class="container-fluid block-section-3" id="itzel">
      <div class="container">
        <div class="row">

          <div class="text-left center paragraph col s12 m6 l6">
            <h3>Itzel Music</h3>
            <p>Itzel Music es un ministerio de adoración en el cual utilizamos música como un instrumento de adoración a Dios
              junto con la palabra para llevar esperanza a las vidas. Visíta nuestra página de YouTube y suscríbete a nuestro
              canal para que te mantengas actualizado en nuestra música.</p>
          </div>
          <div class="img-right col s12 m6 l6">
            <img class="flowers" src="img/itzelmusic.png" alt="">
          </div>
        </div>
        <div class = "icon-section">
          <h3 class="text-black lead center" href="">Encuentra nuestra música!</h3>
          <div class="redes-sociales">
            <a href="https://www.apple.com/itunes/">
              <i class="fab fa-itunes-note fa-2x"></i>
            </a>
            <a href="https://www.spotify.com/">
              <i class="fab fa-spotify fa-2x"></i>
            </a>
            <a href="https://music.amazon.com/home#">
              <i class="fab fa-amazon fa-2x"></i>
            </a>
            <a href="https://www.youtube.com/user/CIAMD1">
              <i class="fab fa-youtube fa-2x"></i>
            </a>
            <a href="https://play.google.com/">
              <i class="fab fa-google-play fa-2x"></i>
            </a>
          </div>
        </div>
        <div class="video-container responsive-video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xBBd2RhmszE" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <!-- Itzel Music Section end -->

    <!-- Video -->

    <!-- Video -->

    <!-- Seccion unete -->
    <section class="container-fluid grey lighten-2 block-section-2" id="unete">
      <div class="container">
        <div class="row">
          <div class="img-left col s12 m6 l6">
            <img class="flowers materialboxed" src="img/unete.jpg
                " alt="">
          </div>
          <div class="text-right center paragraph col s12 m6 l6">
            <h3>Únete</h3>
            <p>Si quieres ser parte de nuestro ministerio no dudes en ayudarnos. Aceptamos donaciones y cualquier contribución
              que Dios ponga en tu corazón. Comunícate con nosotros y ayúdanos a seguir llevando el evangelio de amor a las
              naciones a través de nuestro ministerio misionero. ¡Dios te bendiga!</p>
            <a class="btn blue accent-4 black-text" href="https://www.paypal.me/pastorest" target="blank">
              <i class="fab fa-paypal"></i>Donaciones</a>
          </div>

        </div>
      </div>
    </section>
    <!-- Seccion unete -->
    <!-- Declaracion de fe y carta de recomendación -->
    <section class = "declaracion container-fluid">
      <div class="declaracion__wrap container">
        <div class="declaracion__fe">
          <h5>Declaración de fe</h5>
          <a class="btn white black-text" href="/doc/declaracion.pdf" download>Leer...</a>
        </div>
        <div class="declaracion__carta">
          <h5>Carta de recomendación</h5>
          <a class="btn white black-text" href="/doc/recomendacion.pdf" download>Leer...</a>
        </div>
      </div>

    </section>

    <!-- Contacto Section -->
    <section class="container-fluid block-section-3" id="contacto">
        <div class="container formadecontacto">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-field">
                        <h3 class="center">Contáctanos</h3>
                        <div class="text-center">
                            <?php
                            
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            } else if(isset($_SESSION['msgFields'])){
                                echo $_SESSION['msgFields'];
                                unset($_SESSION['msgFields']);
                            }
                            
                            ?>
                        </div>
                        <form class = "col s12 m12 l12" action="SendGrid-API/f_process.php" method="post">
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">person</i>
                                    <label for="Name">Nombre<span>*</span></label>
                                    <input type="text" name="name" class="input-field">
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">phone</i>
                                    <label for="Phone">Teléfono<span>*</span></label>
                                    <input type="text" name="phone" class="input-field">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <i class="material-icons prefix">mail</i>
                                    <label for="Email">Correo Electrónico<span>*</span></label>
                                    <input type="text" name="email" class="input-field">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <label for="Name">Mensaje<span>*</span></label>
                                    <textarea class = "materialize-textarea" name="message" id="" cols="30" rows="10" class="input-field text-white"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn blue accent-4 black-text">Enviar</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Contacto Section end -->

    <!-- Footer start -->
    <footer class="page-footer grey darken-2">
      <div class="container" id="footer">
        <div class="row">
          <div class="contact col s12 m6">
            <h6 class="flow-text">Contactos</h6>
            <br>
            <li>
              <a class="white-text" href="tel:2402747225">
                <i class="fas fa-phone"></i>Llámanos</a>
            </li>
            <br>
            <li>
              <a class="white-text" href="mailto:pastorestrochez@gmail.com" target="blank">
                <i class="fas fa-envelope"></i>Correo</a>
            </li>
            <br>
          </div>
          <div class="thanks col s12 m6">
            <h6 class="flow-text white-text">Gracias por tu apoyo</h6>
            <p class="white-text">Si somos de gran ayuda, tu también puedes ayudarnos con tus donaciones, De esta manera nos ayuda a continuar
              haciendo la obra que Dios nos llamó hacer. No importa la cantidad, toda donación es recibida con gran agradecimiento.
              Dios les bendiga.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright center">
        <div class="container">
          <p> © 2018 Derechos reservados </p>
          <a class="white-text center" href="http://www.codingimages.com" target="blank"> Creado por Coding Images</a>
        </div>
      </div>
    </footer>
    <!-- Footer ends -->




  </main>



  <!-- Jquery before materialize -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>


  <!-- jquery initialization -->
  <script>
    $(document).ready(function () {
      $('.sidenav').sidenav();
      $('.slider').slider();
      $('.materialboxed').materialbox();
    });
  </script>

  <!-- Fire scroll section -->
  <script>
    window.sr = ScrollReveal();
    sr.reveal('.text-left', {
      duration: 1100,
      origin: 'left',
      distance: '100px',
      mobile: true,
      reset: true,
    });
    sr.reveal('.img-right', {
      duration: 1100,
      origin: 'right',
      distance: '100px',
      mobile: true,
      reset: true,
    });
    sr.reveal('.text-right', {
      duration: 1100,
      origin: 'right',
      distance: '100px',
      mobile: true,
      reset: true,
    });
    sr.reveal('.img-left', {
      duration: 1100,
      origin: 'left',
      distance: '100px',
      mobile: true,
      reset: true,
    });
    sr.reveal('.video-container', {
      duration: 1100,
      origin: 'bottom',
      distance: '100px',
      mobile: true,
      reset: true,
    });
  </script>



</body>

</html>