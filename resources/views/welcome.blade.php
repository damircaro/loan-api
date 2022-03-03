<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources\css\style.css">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>INTEGRAL TRANS</title>

  </head>

  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    <header class="container-fluid bg-light d-flex justify-content-center">

        <a class="navbar-brand" href="#">
            <img src="https://i.postimg.cc/cJxrmW6v/Logo.png" width="250" height="150">

        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg></span>

        </button>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light bg-light" id="menu" style="padding:0%;">
        <div class="container" style="background-color:#2f5665;">


          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-xl-n4">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#menu" style="color:white">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" style="color:white">Ingresar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contenedor-formulario" style="color:white">Contactos</a>
              </li>
            </ul>
            <form class="d-flex">

            </form>
          </div>

        </div>
      </nav>






            <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://4.bp.blogspot.com/-ULBPv9unWmQ/UbZ9iWrGcFI/AAAAAAAACTU/yqTbAbakInQ/s1600/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color:white">
              <h5 class="mb-0"><b>Vehiculos</b></h5>
              <p class="mb-0"><b></b></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://4.bp.blogspot.com/-rDdip6v7XIA/UbZ9jNiILYI/AAAAAAAACTg/XqwTJcSJGjo/s1600/slide4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color:white">
              <h5 class="mb-0"><b>Transporte</b></h5>
              <p class="mb-0"><b></b></p>
            </div>
          </div>
          <div class="carousel-item" >
            <img src="http://2.bp.blogspot.com/-2LMLUoKpCv8/UbZ9ifPjgDI/AAAAAAAACTM/1Xm2rFP9Y9A/s1600/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"style="color:white">
              <h5 class="mb-0"><b>Hoteleria</b></h5>
              <p class="mb-0"><b></b></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>








    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro" >
    <h1 class="p-3 fs-2 border-top border-3">Nuestros Servicios</h1>
     <p class="p-3  fs-4">
         <span class="text-success">INTEGRAL TRANS
     </span> Es una empresa especializada en el servicio de transporte para ejecutivos, huéspedes hoteleros, empresarios y turistas  en la ciudad de Medellín y el departamento de Antioquia.
     </p>
    </section>

   <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100" style="background-color:#2f5665;">
    <div class="row w-75 mx-auto" id="servicios-fila-1">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/85/Aeropuerto_Olaya_Herrera-Medellin.JPG" alt="desarrollo"   width="180" height="160">
            <div style="color:white">
                <h3 class="fs-5 mt-4 px-4 pb-1">TRASLADO AL AEROPUERTO</h3>
                <p class="px-4">Con previa reservación le realizamos su traslado al aeropuerto desde su oficina o residencia.
                    Aeropuerto José María Córdoba (Rionegro) – Medellín
                    Medellín – Aeropuerto José María Córdoba (Rionegro)
                    Aeropuerto Olaya Herrera (Medellín) – Hotel
                    Hotel – Aeropuerto Olaya Herrera (Medellín)</p>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2019/10/16/15712372825622.jpg" alt="concepto" width="180" height="160">

            <div style="color:white">
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">TRANSLADO EN LA CIUDAD</h3>
                <p class="px-4">Disposición  por horas dentro del área metropolitana  le asignamos conductor que le trasladara a diferentes sitios que usted requiera ,cenas, reuniones, etc. permaneciendo el vehículo  a su disposición  en el tiempo que sea necesario.</p>
            </div>
        </div>
    </div>

    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/s0e21cf0eb3b7f458/image/i20015c41e5b47a3f/version/1555358127/image.jpg" alt="comunicaciones" width="180" height="160">

            <div style="color:white">
                <h3 class="fs-5 mt-4 px-4 pb-1">PUERTA A PUERTA</h3>
                <p class="px-4">Trasladamos a nuestros clientes  desde la puerta de su casa  hasta la puerta de su oficina.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap" style="color:white">
            <img src="http://4.bp.blogspot.com/-UF0W54czqmw/UcCDli15QdI/AAAAAAAACWE/tUwZg35bDiY/s320/8682_453033588099096_592127237_n.jpg" alt="seo" width="180" height="160" >

            <div style="color:white">
                <h3 class="fs-5 mt-4 px-4 pb-1">VIAJES</h3>
                <p class="px-4">Trasládese en nuestras confortables  unidades a cualquier parte del interior  de Medellín o del departamento de Antioquia, bien sea por viajes de negocio o turismo. Si usted desea nuestros conductores lo esperan  el tiempo necesario para el traslado de nuevo a su destino.</p>
            </div>
        </div>
    </div>
</section>

<!--========================================================== -->
                        <!-- SECCION ACERCA DE NOSOTROS-->
<!--========================================================== -->

<section>

    <div class="container w-50 m-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2">Aliados</h1>

    </div>

    <div class="mt-5 text-center">
        <img id="img-equipo" src="https://1.bp.blogspot.com/-g-P2uiiWJFE/Wlvr2P-__II/AAAAAAAAVFU/QtE0MtCBI3Y7W8z5gRW_YraUfmq7Px4rgCLcBGAs/s1600/lleras.jpg" alt="equipo">
        <img id="img-equipo" src="https://1.bp.blogspot.com/-7lFDad1_O3A/WlvrRx_2TnI/AAAAAAAAVFM/TwyVWaOvl8A0lk4M_VG5PQM2gfzyld9nwCLcBGAs/s1600/madeiro.jpg" alt="equipo">
        <img id="img-equipo" src="https://1.bp.blogspot.com/-kvZZVmKPORQ/UcC6-bTjq_I/AAAAAAAACYU/Qi5kSoqN5zg/s1600/hoteljardin.jpg" alt="equipo">
    </div>

    <div id="local" class="border-top border-2">
        <div class="mapa"> </div>
        <div>
            <div class="wrapper-local">
                <h2>Nos Ubicamos en Medellín</h2>
                <h2 class="text-primary mb-4" id="typewriter"></h2>
                <section class="d-flex justify-content-start" id="numeros-local">
                    <div>

                    </div>
                    <div>

                    </div>
                    <div>

                    </div>
              </section>
            </div>
        </div>
    </div>

</section>

<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Carrera%2043%2031%20148+(Integral%20trans)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/car-satnav-gps/">GPS devices</a></iframe></div>


<!--========================================================== -->
                        <!-- SECCION CONTACTOS-->
<!--========================================================== -->




<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de tus Viajes</p>
      </div>







      <form   method="POST" data-netlify="true" action="#">
            <div class= "mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>


            <div class="mb-3">
              <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>


            <div class="mb-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

          <div class="mb-3">
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
          </div>

          <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
          </div>
      </form>

  </div>
</section>

<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">UST. &copy; Todos Los Derechos Reservados 2022</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="../js/app.js"></script>

  </body>
</html>
