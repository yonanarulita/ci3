<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title> [ Yona Narulita - Blog ] </title>
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/normalize.css">
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/style-portfolio.css">
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/picto-foundry-food.css" />
        <link rel="stylesheet" href="http://localhost/ci3/assets/css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/ci3/assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">

        <style>
</style>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Yona Narulita - Blog</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                         <li><a class="navactive color_animation" href="home.php">HOME</a></li>
                            <li><a class="color_animation" href="about.php">ABOUT</a></li>
                            <li><a class="color_animation" href="blog.php">BLOG</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>



<div class="container">
<?php 
	echo validation_errors();
	echo form_open('Blog/create')
?>
<h3 align="center">Tambah Artikel</h3><br>
Judul : <input type="text" class="form-control" name="judul"><br>
Tanggal : <input type="date" class="form-control" name="tanggal"><br>
Author : <input type="text" class="form-control" name="author"><br>
Konten : <textarea name="konten" class="form-control" style="height:100px;"></textarea><br>
Image : <input type="file" class="form-control" name="image"><br>
<input type="submit" class="btn btn-default" value="Tambah">
</div>