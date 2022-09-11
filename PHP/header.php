<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/foundation.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/motion-ui.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,800,900&amp;subset=latin-ext" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300&amp;subset=latin-ext" rel="stylesheet" type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="reveal register-form" id="exampleModal1" data-reveal>
            <div class="small-12 columns text-center nopad cont-title">
                Registracija į stovyklą
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="48" title="Popup form"]' ); ?>
            <div class="small-12 columns nopad important-info">
                <span>* Privalomi laukai.</span>
                Vietą rezervuosime kai pervesite 50 eurų avansą.
            </div>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true"></span>
            </button>
        </div>

        <div class="bg-grey hold">
            <div class="row">
                <div class="small-12 columns nopad top-contacts text-right">
                    <ul>
                        <li><?php the_field('top_phone', 'options'); ?></li>
                        <li><a href="#"><?php the_field('top_e-mail', 'options'); ?></a></li>
                    </ul>
                    <a class="btn sm blue" data-open="exampleModal1" href="#">Registruotis į stovyklą</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns nopadleft logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>
            </div>
            <div class="small-10 columns nopadright text-right nav">
                <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>
            </div>
            <div class="small-12 columns mob-header">
                <div class="small-6 medium-2 columns nopadleft mob-logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png"></a>
                </div>
                <div class="small-8 medium 8 columns nopadleft mob-top-contacts">
                    <ul>
                        <li>+370 615 16860</li>
                        <li><a href="#">laukzemesslenis@gmail.com</a></li>
                    </ul>
                </div>
                <div class="small-6 medium-2 columns text-right trigger">
                    <div class="hamburger hamburger--collapse">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="mob-nav">
                    <?php wp_nav_menu( array('menu' => 'nav', 'menu_class' => 'top_nav' )); ?>
                    <div class="small-12 columns nopad mob-nav-contacts">
                        <ul>
                            <li><a href="#">laukzemesslenis@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="small-12 columns nopad text-center mob-nav-phone">
                        <a href="#">+370 615 16860</a>
                    </div>
                </div>
            </div>
        </div>
