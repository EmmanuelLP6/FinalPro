<?php
    include '../recursos-portal/librerias/constantes.php';
		//require '../adm/conexion.php';
    $id=$_GET['id'];
    $query='select * from pueblo where id_pueblo='.$id;
    //$result_query=mysqli_query($conexion,$query);
    //$row=mysqli_fetch_array($result_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../recursos-portal/imagenes/favicon.jpg">

        <title><?php echo $TITLE;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../recursos-portal/css/bootstrap.min.css" rel="stylesheet">
    <link href="../recursos-portal/css/animate.css" rel="stylesheet">
    <link href="../recursos-portal/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../recursos-portal/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../recursos-portal/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../recursos-portal/css/pe-icons.css" rel="stylesheet">
</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

											<a class="navbar-brand logo-light" href="."><img style="margin-top: -25px;" src="../recursos-portal/imagenes/mexico.png" alt="logo" height="70px"></a></a>
                      <a class="navbar-brand logo-dark" href="."><img style="margin-top: -30px;" src="../recursos-portal/imagenes/mexico-black.png" alt="logo" height="70px"></a></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
											<li>
                        <a href=".">Inicio</a>
                      </li>
                      <li>
                        <a href="./portal/login.php">Login</a>
											<li><a href="#search"><i class="pe-7s-search"></i></a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Introduce la palabra.." />
                    <button type="submit" class="btn btn-primary btn-white">Buscar</button>
                </form>
            </div>
        </div>
				<?php

				?>
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="../recursos-portal/imagenes/header-pueblo.jpg" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading"><?php echo $row[1]; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white-bg">
            <div class="section-inner">
                <div class="container">
                    <div>
                        <ul class="portfolio-items nopadding-lr isotope list-unstyled">
                            <li class="col-sm-6 col-xs-6 portfolio-item nopadding-lr apps isotope-item hover-item">
                                <img src="../recursos-portal/imagenes/p1.jpg" class="img-responsive smoothie" alt="">
                                <div class="overlay-item-caption smoothie"></div>
                                <div class="hover-item-caption smoothie">
                                    <div class="vertical-center smoothie">
                                        <h3 class="smoothie mb30"><a href="single-portfolio-fullscreen.html" title="view project"></a></h3>
                                        <a href="single-portfolio-fullscreen.html" class="smoothie btn btn-primary">Ver más</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <footer class="white-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-links wow">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="thin-hr" />

                    <div class="col-md-12 text-center wow">
                        <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                    </div>
                </div>
            </div>
        </footer>

    </div>


    <script src="../recursos-portal/js/jquery.js"></script>
    <script src="../recursos-portal/js/bootstrap.min.js"></script>
    <script src="../recursos-portal/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../recursos-portal/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</body>

</html>
