<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Empresa ProspecWeb">
    <meta name="author" content="Lucas Tiago">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>  
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" media="all" href="css/bootstrap-image-gallery.min.css">-->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#page-top">teste</a>-->
            </div>

            <!-- Navegação Toogle -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="page-scroll">
                        <a href="#page-top">Início</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#sobre">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#fotos">Fotos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--/ Navigation -->
    
    <!--seção logo-->
    <div class="section-cor">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logomarca Treino Funcional Carlinhos"class="img-responsive logo-center">
                </div>
            </div>
        </div>
    </div>
    <!--/Seção Logo-->

<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item"> 
        <img src="<?php bloginfo('template_url'); ?>/img/01cm.png" style="width:100%" alt="First slide">
    </div>
    <div class="item active"> 
        <img src="<?php bloginfo('template_url'); ?>/img/02cm.png" style="width:100%" data-src="" alt="Second slide">
    </div>
  </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>  
       </a> 
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a> 
   </div>