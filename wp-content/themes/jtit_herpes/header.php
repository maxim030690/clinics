<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.12.2016
 * Time: 16:42
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'> -->
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/main.css'>
	<script type='text/javascript' src='http://herpes.jointoit.com/wp-content/plugins/jtit_herpes_plugin/assets/js/map.js'></script>
    <link rel="shortlink" href="//www.stdaware.com/">
    <link rel="canonical" href="//www.stdaware.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/header-default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/footer-v1.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/pricing.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">

    <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/rewrite.css" rel="stylesheet">
    <meta name="mcafeesecure-site-verification" content="1a324497f4782cd218f41c2b9bb5ba2f">
    <style type="text/css">
        .header-fixed-space-default {
            padding-top: 107px !important;
        }

        @media (max-width: 991px) {
            body.header-fixed-space-default {
                padding-top: 0 !important;
            }
        }

    </style>

    <style type="text/css">
        #geo-mashup{
            width: 100%;
            height: 100%;
        }
        .caption-list-f{
            font-size: 22px; width: 100%; max-width: 800px; margin-left: auto; margin-right: auto; text-align: center;
        }
        .caption-list-a{
            display: block;
            list-style-type: none;
            line-height: 100%;
            text-align: left;
            margin-top: 15px;
            margin-bottom: 0px;
            padding-bottom: 10px;
            text-align: left; float: left;
        }
        .caption-list-b{
            text-align: left; float: right;
            margin-top: 15px;
            display: block;
            list-style-type: none;
            line-height: 100%;
            text-align: left;
            margin-bottom: 0px;
            padding-bottom: 10px;
        }
        .caption-list-b li{
            list-style-type: none;
            display: list-item;
        }
        .caption-list-a li{
            list-style-type: none;
            display: list-item;
        }
        .caption-list-a li+li{
            padding-top: 10px;
        }
        .caption-list-b li+li{
            padding-top: 10px;
        }
        .caption-list-a i, .caption-list-b i{
            color: #42b3e5;
        }
        @media (max-width: 800px){
            .caption-list-b{
                text-align: left;
                padding-top: 0px;
                margin-left: auto;
                margin-right: auto;
                float: none !important;
            }
            .list-wrapper-a{
                padding-bottom: 140px;
                margin-top: -50px;
            }
            .caption-list-f{
                max-width: 650px;
                margin: 0 auto;
            }
        }
        @media (max-width: 500px){
            .list-wrapper-a{
                padding-bottom: 155px;
                margin-top: -50px;
            }
            #trust-marks img{
                padding-left: 0px;
            }
            #trust-marks{
                margin-left: auto;
                margin-right: auto;
            }
        }
        @media (max-width: 380px){
            .list-wrapper-a{
                padding-bottom: 205px;
                margin-top: -50px;
            }
            .steps h3 {
                font-size: 24px !important;
            }
        }
    </style>
    <?php wp_head();?>
</head>
    <body class="city-site " <?php body_class()?>>
    <div class="top-bar">

        <div class="large-12 columns">
            <div class="top-bar-left">
                <?php echo get_theme_mod('left_top_info')?>
            </div>

            <div class="top-bar-right">
                <?php echo get_theme_mod( 'right_top_phone' ); ?>

            </div>
        </div>

    </div>

    <header class="page-header">


        <!-- logo & navigation -->
        <div class="row home-baner">

            <div class="small-2 columns hide-for-medium">
                <div class="title-bar" data-responsive-toggle="navbar" data-hide-for="medium">
                    <button class="menu-icon" type="button"  data-toggle="collapse" data-target=".collapse"></button>
                </div>
            </div>

            <div class="navbar-logo small-10 medium-4 large-4 columns">
                <a class="brand" href="<?php echo site_url();?>"><?php echo the_custom_logo();?></a>

                <h5><strong><?php echo get_theme_mod('city')?></strong></h5>
            </div>

<div class="columns align-middle small-12">
    <style>
        ul.nav li.dropdown:hover > ul.dropdown-menu {
            display: block;
        }
    </style>
<?php

require_once('lib/wp_bootstrap_navwalker.php');

wp_nav_menu( array(
        'menu'              => 'header-menu',
        'theme_location'    => 'header-menu',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'navbar-collapse',
        'menu_class'        => 'nav  navbar navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
);
?>
</div>
<script>
    $( ".menu-icon" ).click(function() {
        $('.collapse').toggle("slow");
    });
</script>
        </header>
