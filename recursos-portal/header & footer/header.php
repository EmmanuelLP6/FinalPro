<?php
    include './recursos-portal/librerias/constantes.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="./recursos-portal/imagenes/favicon.jpg">

        <title><?php echo $TITLE;?></title>

        <!-- Bootstrap Core CSS -->
        <link href="./recursos-portal/css/bootstrap.min.css" rel="stylesheet">
        <link href="./recursos-portal/css/animate.css" rel="stylesheet">
        <link href="./recursos-portal/css/plugins.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./recursos-portal/css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="./recursos-portal/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="./recursos-portal/css/pe-icons.css" rel="stylesheet">

    </head>

    <body id="page-top" class="index">
        <div class="master-wrapper">
            <!-- ANIMACIÓN CARGA *-->
            <!-- <div class="preloader">
                <div class="preloader-img">
                    <span class="loading-animation animate-flicker"><img src="./recursos-portal/imagenes/loading.GIF" alt="loading"/></span>
                </div>
            </div> -->

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
                <!--<div class="top-bar smoothie hidden-xs">
                    <div class="container">

                        <div class="clearfix">
                            <ul class="list-inline social-links wow pull-left">
                                <li>
                                    <a href="https://www.youtube.com/channel/UClQ7H3KijHPshi4FlJxR6yA" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/bytevolution/" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/BytEvolution-1632624076840156/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                            <div class="pull-right text-right">
                                <ul class="list-inline">
                                    <li>
                                        <div><i class="fa fa-envelope-o"></i> bytevolution40@gmail.com</div>
                                    </li>
                                    <li>
                                        <div class="meta-item"><i class="fa fa-mobile"></i> +44 8780 648 605</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>-->
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand smoothie logo logo-light" href="."><font color="white"><?php echo $TITLE;?></font></a>
                        <a class="navbar-brand smoothie logo logo-dark" href="."><font color="black"><?php echo $TITLE;?></font></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="../portal/">Inicio</a>
                            </li>
                            <li>
                                <a href="../portal/">Producto</a>
                            </li>
                            <li>
                                <a href="../portal/">Contacto</a>
                            </li>
                            <li>
                                <a href="../portal/">Preguntas frecuentes</a>
                            </li>

                            <li>
                                <a href="../portal/">Acerca de</a>
                            </li>
                            <li>
                                <a href="../portal/">Login</a>
                            </li>
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
                        <input type="search" value="" placeholder="Enter Search Term" />
                        <button type="submit" class="btn btn-primary btn-white">Search</button>
                    </form>
                </div>
            </div>

            <!-- Header -->
            <header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
                <div class="container vertical-center">
                    <div class="intro-text vertical-center text-left smoothie">
                        <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Bienvenido a <?php echo $TITLE;?></div>
                        <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Conoce más sobre <span class="rotate">Aguascalientes, Tlaxcala, Tamaulipas, Tijuana</span></div>
                    </div>
                </div>
            </header>
            <!-- End header -->
