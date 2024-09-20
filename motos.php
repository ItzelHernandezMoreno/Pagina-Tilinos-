<?php
include'includes/conecta.php';
include'includes/acciones.php';
include'querys.php'
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Motos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <div class="container">
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Motos los Tilinos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Motos
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Italika</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Dukati</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Yamaha</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"></li>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ubicacion
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="https://maps.app.goo.gl/6a3Xdz5KL6gXXwxCA">Conalep Naucalpan 1</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://maps.app.goo.gl/5nyDU5gUTCJkUcdT6">Las Torres</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://maps.app.goo.gl/m2VcEn5Nd1df2Vrr8">Las Huertas</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"></li>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servicios
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Aceite</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Cambio de llantas</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Revision de Cadena</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"></li>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Facebook
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="https://www.facebook.com/geneditaa.hernandez?mibextid=ZbWKwL">Itzel</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://www.facebook.com/karoldejesus.castrocorrea?mibextid=ZbWKwL">Jesus</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://www.facebook.com/profile.php?id=100084568323534&mibextid=ZbWKwL">Alan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"></li>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Instagram
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="https://www.instagram.com/ge.itzel_hm?igsh=MWJkamkycHp2ZDdmYg==">Itzel</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://www.instagram.com/jesuus_black?igsh=NGc0aHY4ZnF0eHZn">Jesus</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://www.instagram.com/alan_bae__?igsh=eTFncThraXFna25w">Alan</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="https://www.instagram.com/ssxld_27?igsh=dHN2M2lhMWk1ZnV2">Oswaldo</a></li>
                    </ul>
                  </li>
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
    <h1>Motos insanas</h1>

    <section class="carousel">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://th.bing.com/th/id/R.55f150c032bc127e1ebb1e8ef64e8673?rik=JNmR0090T%2bG8cA&pid=ImgRaw&r=0" class="d-block w-100" class="img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://th.bing.com/th/id/R.5eb2d40b269014e204611467880144c7?rik=3U6EFp01k7vddg&pid=ImgRaw&r=0" class="d-block w-100" class="img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://motospedia.com/imagenes/Lexmoto-LXR380-Mejores-marcas-de-motos-chinas-1024x816.png" class="d-block w-100"
              class="img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="music my-5">
      <h2 class="text-center my-5">¿Qué son las motos?</h2>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p>
              Las motocicletas, con su elegante fusión de potencia y libertad, son una manifestación emblemática de la ingeniería y la pasión por la velocidad sobre dos ruedas. Estos vehículos de dos ruedas han dejado una huella indeleble en la cultura del transporte, brindando a los amantes de la carretera una experiencia única.
            </p>
          </div>
          <div class="col-6">
            <img class="img-fluid" src="https://cdn-images.motor.es/image/m/1100w.webp/fotos-diccionario/2023/10//motocicleta_1698776586.jpg"
              alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="music my-5">
      <h2 class="text-center my-5">Tipos de motos</h2>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="card">
              <img src="https://www.mundodelmotor.net/wp-content/uploads/2020/03/1.-Motocicleta-est%C3%A1ndar.jpg" class="card-img-top"
                alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Motocicleta estándar</h5>
                <p class="card-text text-center">La motocicleta estándar también conocida como motocicleta naked o roadster, es muy cómoda y se pueden realizar las maniobras a baja velocidad, como giros y despegues lentos. Las motocicletas estándar suelen tener asientos grandes, ruedas grandes y una cilindrada de entre 500 cc y 800 cc. Ofrecen una conducción cómoda a un precio económico y han seguido siendo bastante populares desde principios del siglo XX, cuando se introdujeron por primera vez.
                  <br><br>

                  Este tipo de motocicleta no está especializada para ningún estilo de conducción en particular y funcionará bastante bien en la mayoría de las situaciones. Además, se pueden modificar para obtener la máxima velocidad y equiparse con portaequipajes para viajar mejor..</p>
                
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="https://www.mundodelmotor.net/wp-content/uploads/2020/03/2.-Motocicleta-Scooter.jpg" class="card-img-top"
                alt="...">
              <div class="card-body">
                <h5 class="card-title text-center"> Motocicleta Scooter</h5>
                <p class="card-text text-center">Una motocicleta scooter, es una moto de baja cilindrada que se caracteriza por su diseño compacto, liviano y práctico. Las scooters suelen tener motores pequeños, generalmente de entre 50cc y 300cc, lo que las hace ideales para desplazamientos urbanos y trayectos cortos.

                  <br><br>

                  La principal característica distintiva de una motocicleta scooter es su plataforma plana, donde el conductor puede colocar los pies cómodamente. Esta característica facilita el acceso y la salida de la moto, lo que la convierte en una opción popular para la movilidad en la ciudad. Además, las scooters suelen tener un asiento amplio y cómodo, lo que brinda comodidad adicional durante la conducción.</p>
                
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card"></div>
            <img src="https://www.mundodelmotor.net/wp-content/uploads/2020/03/4.-Motocicleta-de-Aventura-o-Dual-Sports.jpg" class="card-img-top"
              alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Motocicleta de Aventura o Dual Sports</h5>
              <p class="card-text text-center">Una motocicleta de aventura, también conocida como motocicleta dual-sport o motocicleta todo terreno, es un tipo de moto diseñada para el uso en carretera y fuera de ella. Están diseñadas para combinar las capacidades de una motocicleta de carretera con las capacidades off-road, lo que les permite enfrentar una amplia variedad de terrenos y condiciones.
                <br><br>

                Las motocicletas de aventura se caracterizan por su posición de conducción erguida, manillares altos, asientos cómodos y suspensión de largo recorrido. Están equipadas con neumáticos de doble propósito, que ofrecen un buen agarre tanto en carreteras pavimentadas como en caminos sin asfaltar. También suelen contar con sistemas de frenado de alto rendimiento y sistemas de suspensión ajustables para adaptarse a diferentes terrenos..</p>
              
            </div>
          </div>
        </div>
  
      </div>
      </div>
      </div>
    </section>
    <footer class="text-center py-3">
     
    </footer>
  
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>