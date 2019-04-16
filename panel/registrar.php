<?php
  session_start();
  if (!isset($_SESSION['sesvar'])) {
    echo '
      <script>
        window.location="../portal/login.php";
      </script>
    ';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
  <link rel="shortcut icon" href="../img/logo.jpeg">

    <title>México Mágico</title>

    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">

	<!-- bootstrap-wysiwyg -->
    <link href="./vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="./vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="./vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="./vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="./vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <a href="index.html" class="site_title"><img src="../img/logo.jpeg" width="35px" > <span>México Mágico</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../img/administrador.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['nombre_usuario']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="./dashboard.php"><i class="fa fa-home"></i> Inicio </a>
                  </li>
                  <li>
                    <a href="./pueblo_magico.php"><i class="fa fa-home"></i> Pueblo mágicos </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../adm/logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../img/administrador.png" alt=""><?php echo $_SESSION['nombre_usuario']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="../adm/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
      <div class="right_col" role="main">
		    <div class="">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="x_panel">
              <div class="x_title">
                <h2>Registrar nuevo pueblo mágico</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br />
                  <form class="form-horizontal form-label-left input_mask" enctype="multipart/form-data" action="../adm/registrar_nuevo_pueblo.php" method="post">
                  <h2>Ubicación</h2>
                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Estado" name="nombre_estado" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Municipio" name="nombre_municipio" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Localidad" name="nombre_localidad" required>
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <hr>
                  <h2>Artesania</h2>
                  <!-- <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback" >
                    <img src="../img/logo.jpeg" alt="" width="250px">
                  </div> -->
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="file" value="" class="form-control has-feedback-left" placeholder="Artesania" name="img_artesania" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Artesania" name="nombre_artesania" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <textarea name="significado" rows="1" cols="80" class="form-control has-feedback-left" placeholder="Significado" required></textarea>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <textarea name="materiales" rows="1" cols="80" class="form-control has-feedback-left" placeholder="Materiales" required></textarea>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <!-- <br> -->
                  <h2>Platillo</h2>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="file" name="imagen_platillo" value="" class="form-control has-feedback-left" placeholder="Artesania" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombre del platillo" name="nombre_platillo">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <textarea name="preparacion" rows="1" cols="80" class="form-control has-feedback-left" placeholder="Preparación"></textarea>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <h2>Pueblo</h2>
                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="file" name="img1" value="" class="form-control has-feedback-left" placeholder="Artesania">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="file" name="img2" value="" class="form-control has-feedback-left" placeholder="Artesania">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="file" name="img3" value="" class="form-control has-feedback-left" placeholder="Artesania">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombre del pueblo mágico" name="nombre_prueblo">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <textarea name="descripicion" rows="1" cols="80" class="form-control has-feedback-left" placeholder="Descripción del pueblo"></textarea>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <!-- <div class="ln_solid"></div> -->
                  <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                      <input type="submit" name="" value="REGISTRAR" class="btn btn-primary">
                      <!-- <button type="button" class="btn btn-primary">Cancel</button>
						          <button class="btn btn-primary" type="reset">Reset</button>
                      <button type="submit" class="btn btn-success">Submit</button> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./vendors/iCheck/icheck.min.js"></script>
    <!-- bootstra-daterangepicker -->
    <script src="./vendors/moment/min/moment.min.js"></script>
    <script src="./vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="./vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="./vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="./vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="./vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="./vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="./vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="./vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="./vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="./vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="./vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="./build/js/custom.min.js"></script>

  </body>
</html>
