<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza Tres Culturas</title>
    <link rel="icon" href="img/logo/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabecera -->
    <div class="container-fluid sticky-top bg-white pt-1">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-3 my-md-0">
                <!--Icono-->
                <a href="index.html">
                    <img src="img/logo/logo proyecto.png" alt="Icono Culturas Baza">
                </a>
            </div>
            <div class="col-4 col-md-12">
                <!-- Menu -->
                <nav class="navbar navbar-expand-md navbar-light pt-0"> 
                    <div class="container-fluid justify-content-center px-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav justify-content-between text-center menu">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html"><b>Inicio</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="quienesSomos.html"><b>Quiénes somos</b></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href=""><b>Nuestras rutas</b></a>
                                    <!-- Crear página con Google Maps insertado o enlace directo a Google Maps creando una pestaña nueva -->
                                    <ul class="dropdown-menu py-3 px-2 text-center" aria-labelledby="navbarDropdown">
                                        <li><hr></li>
                                        <li><a class="dropdown-item" target="_blank" href="https://www.google.com/maps/d/edit?hl=es&mid=1ibYE7XB7y9IPVy5sxNFkJhlXw1Zndbw&ll=37.48892169513837%2C-2.7751389999999843&z=16"><b>Ruta Cristiana</b></a></li>
                                        <li><a class="dropdown-item" target="_blank" href="https://www.google.com/maps/d/edit?hl=es&mid=1peCmpVHl4lMp7ZUWQ-OUdpk-aZ08PJI&ll=37.49058865046556%2C-2.773070850000008&z=17"><b>Ruta Andalusí</b> </a></li>
                                        <li><a class="dropdown-item" target="_blank" href="https://www.google.com/maps/d/edit?hl=es&mid=1mJae-DUrfggFtQLF1v7AkojthqYBkiQ&ll=37.490141386913095%2C-2.777085099999994&z=18"><b>Ruta Judía</b> </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" target="_blank" href="docs/Libro de Recetas Bastetanas y de la comarca.pdf"><b>Gastronomía</b></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href=""><b>3 Culturas</b></a>
                                    <ul class="dropdown-menu py-3 px-2 text-center" aria-labelledby="navbarDropdown">
                                        <li><hr></li>
                                        <li><a class="dropdown-item " href="patrimonioCristiano.html"><b>Patrimonio Cristiano</b></a></li>
                                        <li><a class="dropdown-item" href="patrimonioAndalusi.html"><b>Patrimonio Andalusí</b> </a></li>      
                                        <li><a class="dropdown-item" href="patrimonioJudio.html"><b>Patrimonio Judío</b> </a></li>                                                                                              
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="museoVirtual.html"><b>Museo Virtual</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="contacto.php"><b>Contacto</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
        </div>
    </div>

    <!-- Banner -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img src="img/contacto/banner_contacto.jpg" class="w-100" alt="Imagen con titulo contacto">
            </div>
        </div>
    </div>

    <!-- Formulario de contacto y Google Maps del instituto -->
    <div class="container my-5">
        <div class="row mb-4 justify-content-center">
            <div class="col-10 text-center">
                <h2>Formulario de contacto y ubicación del Centro</h2>
            </div>
        </div>
        <div class="row justify-content-evenly formularioMapa">
            <div class="col-10 col-lg-5 border border-1 border-dark p-3 mb-5 mb-lg-0">
                <!-- Formulario -->
                <form class="form" action="contacto.php">
                    <div class="row justify-content-end">
                        <div class="mb-3 col-6">
                            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
                        </div>
                        <div class="mb-3 col-6">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electrónico">
                        </div>
                        <div class="mb-3 col-12">
                            <input type="email" name="asunto" class="form-control" id="exampleFormControlInput1" placeholder="Asunto">
                        </div>
                        <div class="mb-3 col-12">
                            <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="mb-4 col-4">
                            <input class="form-control" name="sumbit" type="submit" id="exampleFormControlTextarea1">
                        </div>     
                    </div>                   

                    <?php 
                        /* Enviar correcto cuando se ejecute formulario y mostrar mensajito */
                    ?>
                </form>
            </div>

            <div class="col-10 col-lg-5 border border-1 border-dark p-0">
                <!-- Mapa -->
                <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.968477824354!2d-2.769484825011217!3d37.4850702287968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6fe9ce3d0f9075%3A0x30faad66bcf34f33!2sIES%20Pedro%20Jim%C3%A9nez%20Montoya!5e0!3m2!1ses!2ses!4v1704959590416!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    <!-- Mini footer -->
    <div class="container-fluid bg-secondary mt-5">
        <div class="row">
            <div class="col-12 p-1">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white hoverIluminarFondo" href="https://www.facebook.com/people/Ies-Pedro-Jim%C3%A9nez-Montoya-Baza/100013782257914/"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hoverIluminarFondo" href="https://www.instagram.com/iespedrojimenezmontoyabaza/?hl=es"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hoverIluminarFondo" href="https://twitter.com/ies_pedro"><i class="bi bi-twitter-x"></i></a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid pt-4 bg-black">
        <div class="container-fluid">
            <div class="row text-center justify-content-center">
                <div class="col-5 col-md-6 col-lg-4 col-xl-3">
                    <p class="dorado tituloFoot tituloFoot">Contáctanos:</p>
                    <p class="text-white textFoot">671 530 270</p> <!-- Teléfono del centro -->
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link hoverIluminar text-white" href="museoVirtual.html">Contacta con el centro</a>
                        </li>
                    </ul>
                </div>
                <div class="col-5 col-md-6 col-lg-4 col-xl-3">
                    <p class="dorado tituloFoot">Otros enlaces</p>
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link hoverIluminar text-white" href="">Política de Privacidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hoverIluminar text-white" href="">Política de cookies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hoverIluminar text-white" href="">Aviso Legal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hoverIluminar text-white" href="">Encuesta de Satisfacción</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <p class="dorado tituloFoot tituloFoot">IES Pedro Jimenez Montoya</p>
                    <div class="row justify-content-center">
                        <div class="col-7 col-md-10">
                            <a href="https://www.iespedrojimenezmontoya.es/">
                                <img class="w-100" src="img/logo/logo_ies_ue.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
    
            <div class="row footDiseñado mt-3">
                <div class="col-12 text-center">
                    <p class="diseñado"><b>Diseñado por Laura Rodriguez y Alejandro Ríos | Desarrollo de Aplicaciones Web | IES Pedro Jimenez Montoya | 2023 / 2024</b></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


