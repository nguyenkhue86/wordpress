<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="containers">
        <div class="logo">
            <div class="top-menu">
                    <ul class="ul-top-menu">
                        <li>
                            <a rel="nofollow" href="http://facebook.com/o0nguyen0o" target="blank"><i class="fab fa-facebook icon"></i></a>
                        </li>
                        <li>
                            <a rel="nofollow" href="http://youtube.com" target="blank"><i class="fab fa-youtube-square icon"></i></a>
                        </li>
                        <?php if(is_user_logged_in()) : ?>
                            <li>
                                <a rel="nofollow" href="<?php bloginfo("url"); ?>/wp-admin/"><i class="fas fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="<?php echo wp_logout_url() ?>"><i class="fas fa-sign-out-alt"></i> Log out</a>
                            </li>
                        <?php  else :?>
                            <li>
                                <a rel="nofollow" href="<?php bloginfo("url"); ?>/wp-login.php"><i class="fas fa-sign-in-alt"></i> Log in</a>
                            </li>
                            <li>
                                <a rel="nofollow" href="<?php bloginfo("url"); ?>/wp-login.php?action=register"><i class="fas fa-user-plus"></i> Register</a>
                            </li>
                            <?php endif;?>
                    </ul>
            </div>
            <div class="container" >
                
                <?php happy_hour_header(); ?>
            </div>
            
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="container">
                    <?php happy_hour_menu('primary-menu') ?>
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo("url"); ?>">
                        <div class="search-box">
                            <input type="text" placeholder="Search" value="" name="s" id="s">
                            <button type="submit"id="searchsubmit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <div class="container">
            <div>
                <?php
                    if ( function_exists('yoast_breadcrumb') && !is_home() ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                ?>
            </div>
        </div>

