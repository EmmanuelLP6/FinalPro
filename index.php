<?php
    include './adm/conexion.php';
    include './recursos-portal/librerias/constantes.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="./recursos-portal/imagenes/mexico.png">

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
		<link rel="shortcut icon" href="./img/logo.jpeg">

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
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo-light" href="."><img style="margin-top: -25px;" src="./img/logo.jpeg" alt="logo" height="70px"></a>
                        <!--<a class="navbar-brand logo-light" href="."><img style="margin-top: -25px;" src="./recursos-portal/imagenes/mexico.png" alt="logo" height="70px"></a>-->
                        <!--<a class="navbar-brand logo-dark" href="."><img style="margin-top: -25px;" src="./recursos-portal/imagenes/mexico-black.png" alt="logo" height="70px"></a>-->
                        <a class="navbar-brand logo-dark" href="."><img style="margin-top: -25px;" src="./img/logo.jpeg" alt="logo" height="70px"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href=".">Inicio</a>
                            </li>
                            <li>
                                <a href="./portal/login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

            

            <!-- Header -->
            <header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
                <div class="container vertical-center">
                    <div class="intro-text vertical-center text-left smoothie">
                        <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Bienvenido a <?php echo $TITLE;?></div>
                        <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Conoce más sobre <span class="rotate">
                            <?php
                            $sql = 'SELECT * FROM estado ORDER BY nombre_estado';
                            $r_sql = mysqli_query($conexion,$sql);
                            $num = mysqli_num_rows($r_sql);
                            $cont = 0;
                            while (($row = mysqli_fetch_array($r_sql))!=null) {
                                if($cont++ == $num-1){
                                    echo $row['nombre_estado'];
                                }
                                else{
                                    echo $row['nombre_estado'].', ';
                                }
                            }
                            ?>
                        </span></div>
                    </div>
                </div>
            </header>
            <!-- End header -->

            <!-- Encabezado de la seccion del principal -->
            <div class="col-lg-12 mt30 wow text-center animated">
                <h2 class="section-subheading">Principales pueblos mágicos</h2>
                <br>
            </div>

            <section class="dark-wrapper opaqued no-overlay parallax" data-parallax="scroll" data-image-src="./recursos-portal/imagenes/fondo.jpg" data-speed="0.001">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 match-height">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="4" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                            <!-- Elemento Carrousel -->
                                            <?php
                                            $sql = 'SELECT pueblo.id_pueblo, pueblo.nombre_prueblo as nombre, pueblo.img1 as imagen, razon.descripicion as descripcion FROM pueblo, razon WHERE razon.id_pueblo=pueblo.id_pueblo and  estatus = 1;';
                                            $r_result = mysqli_query($conexion,$sql);
                                            $num = mysqli_num_rows($r_result);
                                            while (($row = mysqli_fetch_array($r_result))!=null) {
                                                echo '
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="icon-box-1 match-height mb30">
                                                                <img src = "./'.$row['imagen'].'" class="img-responsive smoothie">
                                                                <div class="content-area text-center">
                                                                    <h3 class="title">'.$row['nombre'].'</h3>
                                                                    <div>'.$row['descripcion'].'</div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                                ';
                                            }
                                            ?>
                                            <!-- End Elemento Carrousel -->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="white-bg">
            <div class="section-inner">
                <div class="container">
                    <div>
						<?php
							$query="select * from pueblo;";
							$query_result= mysqli_query($conexion,$query);
						?>
                        <ul class="portfolio-items nopadding-lr isotope list-unstyled">
							<?php
								while($row = mysqli_fetch_array($query_result)){
									echo '
										<li class="col-sm-6 col-xs-6 portfolio-item nopadding-lr apps isotope-item hover-item">
											<img src="./'.$row[7].'" class="img-responsive smoothie" alt="">
											<div class="overlay-item-caption smoothie">
												<h3 class="nom" style="
												padding:8px 30px;
												border-radius: 6px;
												border:none;
												display:inline-block;
												color:#fff;
												text-decoration: none;
												background-color: #000;
												height:20px;
												margin: 30px auto;
												padding: 5px;
												">'.$row[1].'</h3>
											</div>
											<div class="hover-item-caption smoothie">
													<div class="vertical-center smoothie">
															<h3 class="desc"><a  href="./pueblo_magico.php?id='.$row[0].'" title="view project">'.$row[1].'</a></h3>
															<a href="./portal/pueblo_magico.php?id='.$row[0].'" class="smoothie btn btn-primary">Ver más</a>
													</div>
											</div>
										</li>
									';
								}
							?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>





















            <div id="footer-wrapper" class="footer-image-bg">
                <section class="transparent-wrapper">
                    <div class="section-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 text-center">
                                    <div class="widget about-us-widget">
                                        <h4 class="widget-title"><strong>Platillos</strong> típicos</h4>
                                        <p class="lead">Conoce el platillo principal de cada pueblo mágico, siendo un deleite único para el paladar.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="widget">
                                        <h4 class="widget-title"><strong>Recomendación</strong></h4>
                                        <p class="lead">Para mejores experiencias te invitamos a visitar cada uno de los pueblos para que descubras personalmente el por qué es considerado mágico.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="white-wrapper">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-md-6 text-left">
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
                            </div> -->

                            <div class="col-md-12 text-center">
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
                "./recursos-portal/imagenes/header_inicio1.jpg",
                "./recursos-portal/imagenes/header_inicio2.jpg",
                "./recursos-portal/imagenes/header_inicio3.jpg"
            ], {
                duration: 5000,
                fade: 500
            });
        });
        </script>

    </body>

    </html>
