<?php
    include '../recursos-portal/librerias/constantes.php';
	require '../adm/conexion.php';
    $id=$_GET['id'];
	//$id=21;
    $query='select pueblo.*, razon.*, platillo.*, artesania.* from pueblo inner join razon inner join platillo inner join artesania where pueblo.id_platillo=platillo.id_platillo and pueblo.id_artesania=artesania.id_artesania and razon.id_pueblo=pueblo.id_pueblo and pueblo.id_pueblo='.$id;
    $result_query=mysqli_query($conexion,$query);
    $row=mysqli_fetch_array($result_query);
	//$imagen = $row['img2'];
	$random= rand(1,3);
	if($random==1){
		$imagen = $row['img1'];
	}
	else if($random==2){
		$imagen = $row['img2'];
	}
	else{
		$imagen = $row['img3'];
	}
	//echo $select;
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
	<link rel="shortcut icon" href="../img/logo.jpeg">
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
											
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

		<?php

		?>
        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="<?php echo '../'.$imagen;?>" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading"><?php echo $row['nombre_prueblo']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section id="welcome">
            <div class="section-inner nopaddingbottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<h2 class="post-title"><?php echo $row['nombre_prueblo']; ?></h2>
                            <p class="lead">
								<?php echo $row['descripicion'];?>
							</p>
                        </div>

                        <div class="col-md-6">
                            <img src="<?php echo '../'.$imagen;?>" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
		
		<section>
            <div class="section-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 blog-item mb100 wow match-height">
                            <div class="row">
                                <div class="col-xs-12">
									<center><h2 class="post-title">Platillo </h2></center>
                                    <div class="hover-item mb30">
                                        <img src="<?php echo '../'.$row['imagen_platillo'];?>" class="img-responsive smoothie" alt="title">
                                        <div class="overlay-item-caption smoothie"></div>
                                        <div class="hover-item-caption smoothie">
                                            <h3 class="vertical-center smoothie"><a href="./comida.php?id_pueblo=<?php echo$row['id_pueblo'];?>" class="smoothie btn btn-primary page-scroll" title="view article">Ver</a></h3>
                                        </div>
                                    </div>
                                    <center><h2 class="post-title"><?php echo $row['nombre_platillo'];?></h2></center>
                                    <p><?php echo $row['preparacion'];?></p>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-4 blog-item mb100 wow match-height"></div>
						<div class="col-sm-4 blog-item mb100 wow match-height">
                            <div class="row">
                                <div class="col-xs-12">
									<center><h2 class="post-title">ARTESANIAS </h2></center>
                                    <div class="hover-item mb30">
                                        <img src="<?php echo '../'.$row['img_artesania'];?>" class="img-responsive smoothie" alt="title">
                                        <div class="overlay-item-caption smoothie"></div>
                                        <div class="hover-item-caption smoothie">
                                            <h3 class="vertical-center smoothie"><a href="./artesania.php?id_pueblo=<?php echo$row['id_pueblo'];?>" class="smoothie btn btn-primary page-scroll" title="view article">View</a></h3>
                                        </div>
                                    </div>
                                    <center><h2 class="post-title"><?php echo $row['nombre_artesania'];?></h2></center>
                                    <p><?php echo $row['significado'];?></p>
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
