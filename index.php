<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers for Chuu</title>

    <!-- Icono de la pestaña -->
    <link rel="icon" type="image/png" href="images/chuu_window.jpg">

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="css/style.css">

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/381d681eb9.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Menu navbar arriba -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" class="img-fluid" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plantilla">Plantilla</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ventas">Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <!-- <li class="nav-item mt-3 mt-lg-0">
                            <a class="main-btn" href="#">Reservar</a>
                        </li> -->
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Carrito (0)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="alert alert-success">
            Pantalla de mensaje...
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>
    </header>
    <!-- fin del navbar -->

    <!-- Ventas -->
    <section id="ventas" class="ventas_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-title text-center mb-5">
                    <h6>Nuestras ofertas establecidas</h6>
                    <h3>Servicios Económicos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Ramo</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Rosas(4)</p>
                            </li>
                            <li>
                                <p>Lirios (7)</p>
                            </li>
                            <li>
                                <p>Nardos (10)</p>
                            </li>
                            <li>
                                <p>Jazmín(3)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>90€<sub class="fs-6 fw-normal"></sub></h3>
                        <!-- <a href="#" class="main-btn2">Agregar al carrito</a> -->
                        <button class="main-btn2" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Mesa</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Metros(2)</p>
                            </li>
                            <li>
                                <p>Claveles (50)</p>
                            </li>
                            <li>
                                <p>Crisantemos (18)</p>
                            </li>
                            <li>
                                <p>Greenery (Si)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>110€<sub class="fs-6 fw-normal"></sub></h3>
                        <!-- <a href="#" class="main-btn2">Agregar al carrito</a> -->
                        <button class="main-btn2" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Arco</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Rosas(20)</p>
                            </li>
                            <li>
                                <p>Vezas (70)</p>
                            </li>
                            <li>
                                <p>Passiflora (90)</p>
                            </li>
                            <li>
                                <p>Lantana(40)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>200€<sub class="fs-6 fw-normal"></sub></h3>
                        <!-- <a href="#" class="main-btn2">Agregar al carrito</a> -->
                        <button class="main-btn2" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card p-4 text-center rounded-3">
                        <h5 class="text-decoration-underline mb-4">Cesta</h5>
                        <ul class="list-unstyled">
                            <li>
                                <p>Acacia(4)</p>
                            </li>
                            <li>
                                <p>Caléndula (7)</p>
                            </li>
                            <li>
                                <p>Jaramago (2)</p>
                            </li>
                            <li>
                                <p>Greenery(Si)</p>
                            </li>
                        </ul>
                        <hr />
                        <h3>90€<sub class="fs-6 fw-normal"></sub></h3>
                        <!-- <a href="#" class="main-btn2">Agregar al carrito</a> -->
                        <button class="main-btn2" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ventas fin  -->
</body>
</html>