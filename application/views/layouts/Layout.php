<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servigas del Huila</title>

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>public/assets/img/logo.png" rel="icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet">


</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container  d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/ServigasdelHuila/">
                    <span>Servigas del Huila</span></a>
                </h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="/ServigasdelHuila/">Inicio</a></li>
                    <li><a href="nuestra_empresa">Nuestra empresa</a></li>
                    <li class="drop-down"><a>Categorias</a>
                        <ul>
                            <li><a class="nav-link" href="gas_natural">servicios</a></li>
                        </ul>
                    </li>
                    <li><a href="contactenos">Contactenos</a></li>
                    <li class="drop-down"><a>Usuario</a>
                        <ul>
                            <li><a class="nav-link" href="Login">Login</a></li>
                            <li><a class="nav-link" href="Register">Register</a></li>
                            <li><a class="nav-link" href="dashboard/">Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="get-started"><a href="https://wa.link/dxwqcp">Solicita un ténico</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <div>
        <?php
        echo $content_for_layout;
        ?>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>

</body>

</html>