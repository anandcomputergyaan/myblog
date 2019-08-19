<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Service-Company-Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Montserrat:100,100i,200,200i,300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css '?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>">

    <style type="text/css">
        .navbar-dark .navbar-nav .nav-link{
                padding: 8px;
        }
    </style>

</head>
<body>
    <!-- Nav-bar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="gradient"></div>
        <!-- Container -->
        <div class="container">
            <a class="navbar-brand" href="index.html">
               ANAND<!--  <img src="<?php echo base_url()?>assets/images/logo.png" alt=""> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa fa-align-right" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
              <!--       <li class="hidden">/</li> -->
        <!--             <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
        </li> -->
              <!--       <li class="hidden">/</li >-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Home/services'); ?>">Services</a>
                    </li>
          <!--       <li class="hidden">/</li> -->
                     <li class="nav-item">
                         <a class="nav-link" href="<?php echo base_url('home/technologies')?>">Technologies</a>
                     </li>
              <!--       <li class="hidden">/</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Home/blog'); ?>">blog</a>
                    </li>
              <!--       <li class="hidden">/</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Home/Support'); ?>">Support</a>
                    </li>
                  <!--   <li class="hidden">/</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Home/contact'); ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /. Container -->
    </nav>

