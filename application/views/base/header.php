<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Departemen Teknologi Informasi, FTIK - ITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/asset/css/bootstrap.min.css');?>" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.transitions.css');?>" >

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">
    
    <!-- ChatBox CSS -->
    <link href="<?php echo base_url('assets/css/chatbox.css');?>" rel="stylesheet" >
    <?php
        $clr = array("blue", "yellow", "light-red", "light-green");
        $w = array_rand($clr, 1);
    ?>
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/color/$clr[$w].css");?>">
    
    
    <!-- Colors CSS 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/');?>color/light-green.css" title="light-green">
    -->
    <!-- Custom Fonts >
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'-->
    
    
    <!-- Modernizer js -->
    <script src="<?php echo base_url('assets/js/modernizr.custom.js');?>"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Teknologi Informasi</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Fasilitas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about-us">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimonial">Testimonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Peluang Kerja</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>