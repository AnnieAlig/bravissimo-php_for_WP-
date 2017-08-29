<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo1.png" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

 
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    
    


    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>


<!-- header -->


<header class="header">
    <div class="header_wrapper-1">
        <div class="header_contacts">
            <a class="header_contacts-num1"
               href="tel:'<?php echo get_post_meta(69, 'tel1', true); ?>'"><?php echo get_post_meta(69, 'tel1', true); ?></a>
            <a class="header_contacts-num2"
               href="mailto:'<?php echo get_post_meta(69, 'e-mail', true); ?>'"><?php echo get_post_meta(69, 'e-mail', true); ?></a>
        </div>
        <div class="header_menu-wrapper wrapper">
            <nav class="header_menu-mobile" style="display: none">
                <ul class="header_menumobile-wrpapper">
                    <?php
                    if (!is_front_page()) {
                        echo '<li><a href="' . get_home_url() . '">Главная</a></li>';
                    }
                    ?>

                    <li><a href="/programs-and-schedules">Программы</a></li>
                    <li><a href="/about-us">о нас</a></li>
                    <li><a href="/contacts">контакты</a></li>
                    <li><a href="/our-library">библиотека</a></li>
                    <li>
                        <div class="phantom"></div>
                    </li>
                </ul>
            </nav>
            <nav class="header_menu-desktop">
                <ul class="header_menu">
                    <li class="header_menu-element"><a href="/programs-and-schedules">
                            <span class="header_menu-link">Программы</span>
                        </a></li>
                    <li class="header_menu-element"><a href="/about-us">
                            <span class="header_menu-link">О нас</span>
                        </a></li>
                    <li class="header_logo-allways">
                        <a class="header_logo-wrapper" href="<?php echo home_url(); ?>"><img class="header_logo"
                                                                                             src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png"></a>
                    </li>
                    <li class="header_menu-element"><a href="/contacts">
                            <span class="header_menu-link">контакты</span>
                        </a></li>
                    <li class="header_menu-element"><a href="/our-library">
                            <span class="header_menu-link">Библиотека</span>
                        </a></li>
                    <li class="header_menumobile-only">
                        <div class="hamburger-icon" id="button_menu">
                            <button class="hamburger-icon-btn">
                                <span class="span_hamburger"></span>
                            </button>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="cont">
<!-- /header -->