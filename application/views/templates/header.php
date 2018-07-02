<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yona Narulita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="gettemplates.co" />

    <!--
        Oxygen by gettemplates.co
        Twitter: http://twitter.com/gettemplateco
        URL: http://gettemplates.co
    -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizr JS -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="gtco-loader"></div>
    
    <div id="page">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="gtco-logo"><a href="home.php">Yona Narulita</a></div>
                </div>
                <!-- <div class="col-xs-8 text-center menu-1"> -->
                    
                <div class="col-xs-8 text-center menu-1">
                <ul>
                    <li class="active"><a class="nav-link" href="<?php echo site_url() ?>home">Home
                    </a></li>

                    <li class="active"><a class="nav-link" href="<?php echo site_url() ?>about">About
                    </a></li>

                    <li class="active"><a class="nav-link" href="<?php echo site_url() ?>blog">Blog
                    </a></li>

                    <li class="active"><a class="nav-link" href="<?php echo site_url() ?>category">Kategori
                    </a></li>

                    <li class="active"><a class="nav-link" href="<?php echo site_url() ?>contact">Contact
                    </a></li>

                    <li class="has-dropdown">
                            <a href="#">Datatables</a>
                            <ul class="dropdown">
                                <li><a class="dropdown-item" href="<?php echo site_url() ?>datatables">Datatables</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url() ?>datatables/view_json">Tables</a></li>
                            </ul>


                <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="btn-group" role="group" aria-label="Data baru">
                        <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

                    </div>

                <?php endif; ?>


                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">

                        <?php echo anchor('blog/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
                    </div>
                <?php endif; ?>

            </div>
        </nav>


                    <li class="has-dropdown">
                            <a href="#">Data Baru</a>
                            <ul class="dropdown">
                                <li><?php echo anchor('blog/create', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?></li>
                                <li><?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?></li>
                            </ul>


                </ul>


</div>

 <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>

                <div class="col-xs-1 text-right hidden-xs menu-1">
                    <ul>
                        <li class="btn-cta"><a href="<?php echo site_url() ?>home"><span>Logout</span></a></li>
                    </ul>
                </div>

            </div>
            
        </div>
    </nav>




                    

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(assets/images/img_bg_1.jpg);">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Yona Narulita</h1>
                            <h2>Made by <a href="http://google.com/" target="_blank">yonanarulita.com</a></h2>
                            <p><a href="#" class="btn btn-default">Get Started</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>