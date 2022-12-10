<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">

</head>

<body <?php body_class(); ?>>
    <div id="wallpaper">
        <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <p>Phụ kiện 247 - Giá rẻ nhất Việt Nam</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="top-menu">
                                <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'header-top',
                                        'container' => 'false',
                                        'menu_id' => 'header-top',
                                        'menu_class' => 'header-top'
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
                            <div class="logo">
                                <a href="<?php bloginfo('url'); ?>"><img
                                        src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"
                                        alt="<?php bloginfo('name'); ?>"></a>
                                <h1>
                                    <?php bloginfo('name'); ?>
                                </h1>
                            </div>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
                            <div class="form-seach-product">
                                <?php get_template_part('search');?>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1"
                            style="text-align: right">
                            
                            <a href="<?php bloginfo('name'); ?>/gio-hang" class="icon-cart">
                                <?php global $woocommerce; ?>
	                            <?php $items = $woocommerce->cart->get_cart();?>
                                <div class="icon">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <!-- <span>3</span> -->
                                </div>
                                <div class="info-cart">
                                
                                    <p>Giỏ hàng</p>
                                    <span><?php echo WC()->cart->get_cart_total(); ?></span>
                                </div>
                                <span class="clear"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="main-menu-header">
                <div class="container">
                    <div id="nav-menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'header-main',
                                'container' => 'false',
                                'menu_id' => 'header-main',
                                'menu_class' => 'header-main'
                            )
                        ); ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </header>