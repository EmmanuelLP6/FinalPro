<?php
	include '../recursos-portal/librerias/constantes.php';
	require '../adm/conexion.php';
	$id=$_GET['id_pueblo'];
	//$id=$_GET['id'];
	$query='select pueblo.*, razon.*, platillo.*, artesania.* from pueblo inner join razon inner join platillo inner join artesania where pueblo.id_platillo=platillo.id_platillo and pueblo.id_artesania=artesania.id_artesania and razon.id_pueblo=pueblo.id_pueblo and pueblo.id_pueblo='.$id;
    $result_query=mysqli_query($conexion,$query);
    $row=mysqli_fetch_array($result_query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="../img/logo.jpeg">


    <title><?php echo $TITLE;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../recursos-portal/plantilla base/assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../recursos-portal/plantilla base/assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../recursos-portal/plantilla base/assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../recursos-portal/plantilla base/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../recursos-portal/plantilla base/assets/css/pe-icons.css" rel="stylesheet">

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
							<a href="../index.php">Inicio</a>
						</li>
						<li>
							<a href="../portal/login.php">Login</a>
						<li><a href="pueblo_magico.php?id=<?php echo $row['id_pueblo'];?>"><i class="pe-7s-search"></i></a></li>
						
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>



        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="<?php echo '../'.$row['img_artesania'];?>" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Artesania<br> <B><?php echo $row['nombre_artesania'];?></B></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 mb50">
                                    <div class="images">
                                        <span class="onsale"><?php echo $row['nombre_artesania'];?></span>
                                        <a class="lb-link" data-rel="product-gallery" href="assets/img/shop/product1.jpg">
                                            <img alt="Image Title" class="img-responsive" src="<?php echo '../'.$row['img_artesania'];?>" title="Image Title">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-7 mb50">
                                    <div class="summary entry-summary">

                                        <div>
                                            <p class="price">
                                                <ins><span class="amount"><?php echo $row['nombre_artesania'];?></span>
                                                </ins>
                                            </p>
                                        </div>

                                        <div class="lead">
                                            <p><?php echo $row['preparacion'];?></p>
                                        </div>
                                    </div>
                                </div>
								<div class="col-xs-12 col-sm-7 mb50">
                                    <div class="summary entry-summary">

                                        <div>
                                            <p class="price">
                                                <ins><span class="amount">Materiales</span>
                                                </ins>
                                            </p>
                                        </div>

                                        <div class="lead">
                                            <p><?php echo $row['materiales'];?></p>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                        
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
                                <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
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

    <script src="../recursos-portal/plantilla base/assets/js/jquery.js"></script>
    <script src="../recursos-portal/plantilla base/assets/js/bootstrap.min.js"></script>
    <script src="../recursos-portal/plantilla base/assets/js/plugins.js"></script>
    <script src="../recursos-portal/plantilla base/assets/js/init.js"></script>



</body>

</html>
