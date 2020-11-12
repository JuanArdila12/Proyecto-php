<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
  <title>Home</title>
</head>

<body>
  <!--Inicio de Navbar-->
  <nav class="navbar navbar-expand-md navbar-sticky navbar-stuck">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="assets/img/logo-azul.png" alt="" srcset="">
      </a>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="navbar-item"><a href="#" class="nav-link">Home</a></li>
          <li class="navbar-item"><a href="login.php" class="nav-link">Iniciar sesion</a></li>
          <li class="navbar-item"><a href="register.php" class="nav-link">Registrarse</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fin navbar -->

  <header class="main-header" id="home">
    <div>
      <video autoplay muted loop>
        <source src="assets/video/video.mp4" type="video/mp4">
      </video>
      <div>
        <h1 class="text-center text-white mx-auto welcome">Bienvenido a</h1>
        <h1 class="text-center text-white mx-auto">Andromeda Games</h1>
      </div>
    </div>
  </header>

  <main>
    <div>
    </div>
    <div class="container">
      <div class="section-container text-center">
        <h2 >Sobre Andromeda games</h2>
      </div>


      <div class="row mt-5">
        <div class="col">
          <img src="assets/img/ilustracion 1.png" alt="" class="img-fluid ilustraciones">
        </div>
        <div class="col">
          <h3>Andromeda games te permite crear tus torneos</h3>
          <ul class="ml-5 mt-4">
            <li>
              <i class="fas fa-check"></i>
              Permite crear tus torneos en cualquier dispositivo
            </li>
            <li>
              <i class="fas fa-check"></i>
              Puedes ingresar multiples premios para los ganadores de tu torneo
            </li>
            <li>
              <i class="fas fa-check"></i>
              Facil administracion de torneos
            </li>
            <li>
              <i class="fas fa-check"></i>
              Multiples juegos disponibles para que organices tus torneos
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h3>Ingresa a torneos de la comunidad con multiples premios </h3>
          <ul class="ml-5 mt-4">
            <li>
              <i class="fas fa-check"></i>
              Puedes ingresar a torneos en los juegos autorizados por la plataforma
            </li>
            <li>
              <i class="fas fa-check"></i>
              Puedes ganar premios si ganas en el torneo
            </li>
            <li>
              <i class="fas fa-check"></i>
              Equipos competitivos pueden contratarte
            </li>
            <li>
              <i class="fas fa-check"></i>
              Mejoras tu nivel competitivo a cada torneo que ingreses
            </li>
          </ul>
        </div>
        <div class="col">
          <img src="assets/img/ilustracion2.png" alt="" class="img-fluid ilustraciones">
        </div>
      </div>
    </div>

    <section class="contact" id="contacto">
      <div class="container">
          <div class="section-title">
              <h2 class="text-center pt-5 pb-5 text-andromeda">Contáctanos</h2>
          </div>
  
          <div class="row">
              <div class="col-md-6 col-lg-4">
                  <div class="contact-about text-center">
                      <h3 class="text-andromeda">Nuestras redes sociales</h3>
                      <p>
                      </p>
                      <div class="iconos">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-github"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3 mt-4 mt-md-0 ">
                  <div class="info">
                      <div>
                          <span class="icono"><i class="fas fa-map-marker-alt"></i></span>
                          <span class="pl-3">Calle 72 sur # 14-24</span>
                      </div>
                      <div>
                          <span class="icono"><i class="fas fa-phone-alt"></i></span>
                          <span class="pl-2">+57 3057391845</span>
                      </div>
  
                      <div>
                          <span class="icono"><i class="fas fa-envelope-open"></i></span>
                          <span class="pl-2">andromeda@gmail.com</span>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-12 col-lg-5 pt-3">
                  <form class="needs-validation" name="form" novalidate>
                      <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo" required>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email"
                                 placeholder="Correo Electronico" required>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                      </div>
                      <div class="form-group">
                          <textarea class="form-control" name="message" placeholder="Mensaje" required></textarea>
                      </div>
                      <div class="text-center">
                          <button class="btn btn-andromeda" type="submit">Enviar mensaje</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>

  <footer id="footer" class="pt-5 mt-5 ">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copy">
                    © Copyright
                    <strong>Andromeda games</strong>
                    todos los derechos reservados
                </div>
            </div>
            <div class=" col-md-6 col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <a href="#">Inicio</a>
                    <a href="#">About</a>
                    <a href="#">Politicas de privacidad</a>
                    <a href="#">Términos de uso</a>
                </nav>
            </div>
        </div>
    </div>
</footer>

  </main>
</body>
<script src="assets/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>