<?php
/*
Template Name:Single Page
*/
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title><?php the_title(); ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons
         ================================================== -->
        <link rel="icon" href="img/favicon/favicon-32x32.html"
              type="<?php echo get_template_directory_uri(); ?>/image/x-icon"/>
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-144x144.html">
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
              href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-72x72.html">
        <link rel="apple-touch-icon-precomposed"
              href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-54x54.html">

        <!-- CSS
        ================================================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <!-- Template styles-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <!-- Prettyphoto -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
        <!-- Bxslider -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri();?>/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/respond.min.js"></script>
        <![endif]-->

    </head>

<body>
<div class="body-inner">
    <!-- Header start -->
    <header id="header" class="navbar-fixed-top main-nav" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--/ Top info start -->
                    <div class="top-info">
                        <ul class="pull-right">
                            <li><i class="fa fa-phone"></i> Call Us: (20) 3893-837</li>
                            <li><i class="fa fa-envelope"></i> Info@sample.com</li>
                            <!-- Social links -->
                            <li class="social-icon">
                                <a id="tooltip1" data-toggle="tooltip" data-placement="top" title="Twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a id="tooltip2" data-toggle="tooltip" data-placement="top" title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a id="tooltip3" href="#" data-toggle="tooltip" data-placement="top" title="Google+">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a id="tooltip4" href="#" data-toggle="tooltip" data-placement="top" title="Dribble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li><!-- Social links end-->
                        </ul>
                    </div><!--/ Top info end -->

                    <!-- Logo start -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo bloginfo("url");?>">
                            <img class="img-responsive"
                                 src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
                        </a>
                    </div><!--/ Logo end -->

                    <nav class="collapse navbar-collapse clearfix" role="navigation">
                        <?php


                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            foreach(get_pages() as $pages => $page){
                                echo "<li><a href='$page->guid'>$page->post_title</a></li>";
                            }

                            ?>


                            <li class="search">
                                <button class="fa fa-search"></button>
                            </li>
                        </ul>
                    </nav><!--/ Navigation end -->
                    <div class="site-search">
                        <div class="container">
                            <input type="text" placeholder="type what you want and enter">
                            <span class="close">&times;</span>
                        </div>
                    </div>
                </div><!--/ Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header><!--/ Header end -->

    <div id="inner-header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner/banner2.jpg" alt=""/>
    </div>

    <!-- Subpage title start -->
    <section id="inner-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title-content">
                        <h2><?php the_title(); ?></h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subpage title end -->

    <div class="gap-40"></div>

    <!-- Service page start -->
    <section id="service-page">
        <div class="container">
            <div class="row">
                <?php while (have_posts()) : the_post() ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

        </div><!--/ container end -->

    </section>
    <!-- Service page end -->




<?php get_footer(); ?>