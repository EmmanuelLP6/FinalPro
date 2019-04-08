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
                                <a href=".">Inicio</a>
                            </li>
                            <!-- <li>
                                <a href="../portal/producto.php">Producto</a>
                            </li>
                            <li>
                                <a href="../portal/contacto.php">Contacto</a>
                            </li>
                            <li>
                                <a href="../portal/preguntas_frecuentes.php">Preguntas frecuentes</a>
                            </li>

                            <li>
                                <a href="../portal/acerca_de.php">Acerca de</a>
                            </li> -->
                            <li>
                                <a href="./portal/login.php">Login</a>
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



























            <div id="footer-wrapper" class="footer-image-bg">
                <section class="transparent-wrapper">
                    <div class="section-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget about-us-widget">
                                        <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                                        <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                        <div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                                    <small class="muted">Posted 14 April 2015</small>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                                    <small class="muted">Posted 14 April 2015</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Popular Tags</h4>
                                        <div class="tagcloud">
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Local</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Business</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Media</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Photogtraphy</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Aid</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Fashion</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">News</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Cars</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Global Affairs</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Music</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">Downloads</a>
                                            <a href="#" class="tag-link btn btn-theme btn-white btn-xs smoothie" title="3 topics">MP3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="white-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-left">
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

                            <div class="col-md-6 text-right">
                                <span class="copyright">Copyright 2019. Designed by DISTINCTIVE THEMES</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

        <div class="flexpanel">
            <div class="viewport-wrap">
                <div class="viewport">
                    <div class="widget mb50">
                        <h4 class="widget-title">Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Panic In London</a></span>
                                    <small class="muted">Posted 14 April 2015</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">New iPhone News</a></span>
                                    <small class="muted">Posted 14 April 2015</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                    <small class="muted">Posted 14 April 2015</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                    <small class="muted">Posted 14 April 2015</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="./recursos-portal/imagenes/widget/widget5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                    <small class="muted">Posted 14 April 2015</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget mb50">
                        <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                        <div class="tagcloud">
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Local</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Business</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Media</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Photogtraphy</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Aid</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Fashion</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">News</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Cars</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Global Affairs</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Music</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Downloads</a>
                            <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">MP3</a>
                        </div>
                    </div>
                    <div class="widget about-us-widget mb50">
                        <h4 class="widget-title">About Kompleet</h4>
                        <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="./recursos-portal/js/jquery.js"></script>
        <script src="./recursos-portal/js/bootstrap.min.js"></script>
        <script src="./recursos-portal/js/plugins.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="./recursos-portal/js/init.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            jQuery('#headerwrap').backstretch([
                "./recursos-portal/imagenes/header1.jpg",
                "./recursos-portal/imagenes/header2.jpg",
                "./recursos-portal/imagenes/header3.jpg",
								"./recursos-portal/imagenes/header-pueblo.jpg"
            ], {
                duration: 4000,
                fade: 500
            });
        });
        </script>

    </body>

    </html>
