<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php echo esc_attr(get_bloginfo( 'charset', 'display' ));?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url'), 'display'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$header_class[] = 'kopa-header kopa-parallax';
?>
<header id="kopa-parallax" class="<?php echo implode(' ',$header_class); ?>">
    <div class="kopa-bg"></div>
    <div class="wrapper">

        <div class="kopa-header-left">
            <span></span>
            <?php
                $garajez_logo_url = get_theme_mod('logo_url', '');
                if( $garajez_logo_url ){ ?>
            <div class="kopa-logo">
                <a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo esc_attr(get_bloginfo('name'), 'display'); ?>"><img id="logo-image-desktop" class="logo-image" src="<?php echo esc_attr($garajez_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name'), 'display'); ?>"></a>
            </div>
            <?php }else { ?>
            <div class="kopa-logo">
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name'));?>"><?php echo esc_attr(get_bloginfo('name'), 'display');?></a></h1>
                <p><?php echo esc_attr(get_bloginfo('description', 'display')); ?></p>
            </div>
            <?php } ?>
            <!-- logo -->

        </div>
        <!-- kopa-header-left -->

        <div class="kopa-header-right ">

            <div class="kopa-header-top ">
                <?php
                if(has_nav_menu('top-nav')){
                    $args_topmenu = array(
                        'theme_location' => 'top-nav',
                        'container' => false,
                        'menu_class' => 'top-menu-mobile clearfix',
                        'items_wrap' => '<ul class = "%2$s">%3$s</ul>',

                    );
                    echo '<nav class="top-nav-mobile">';
                    echo '<a class="pull">'.__('menu','garajez-lite').'<span class="fa fa-caret-down"></span></a>';
                    wp_nav_menu( $args_topmenu );
                    echo '</nav>';
                }
                ?>
                <!-- top-nav-mobile -->

                <div class="search-box">
                    <?php get_search_form(); ?>
                </div>
                <!--search-box-->
                <?php
                if(has_nav_menu('top-nav')){
                    $args_topmenu = array(
                        'theme_location' => 'top-nav',
                        'container' => false,
                        'menu_class' => 'top-menu clearfix',
                        'items_wrap' => '<ul class = "%2$s">%3$s</ul>',

                    );
                    echo '<nav class="kopa-top-nav">';
                    wp_nav_menu( $args_topmenu );
                    echo '</nav>';
                }
                ?>
                <!-- top-nav -->

            </div>
            <!-- kopa-header-top -->

            <div class="kopa-header-middle ">

                <?php
                $header_add = get_theme_mod( 'header_info_address', '' );
                $header_phone = get_theme_mod( 'header_info_phone', '' );
                if ( !empty($header_add) && !empty($header_phone) ) {
                    echo '<div class="kopa-address-box">';
                    echo '<ul class="clearfix">';
                    if ( !empty($header_add) ) {
                        echo '<li><p><i class="fa fa-map-marker"></i>'.esc_html($header_add).'</p></li>';
                    }
                    if ( ! empty($header_phone) ) {
                        echo '<li><p><i class="fa fa-phone"></i>'.esc_html($header_phone).'</p></li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }
                ?><!--kopa-address-box-->

            </div>
            <!-- kopa-header-middle -->

            <?php
            if ( has_nav_menu('main-nav') ) {
                /*
                * Main nav for desktop
                */
                echo '<div class="kopa-header-bottom ">';
                $args = array(
                    'theme_location' => 'main-nav',
                    'container' => '',
                    'menu_class' => 'main-menu sf-menu clearfix',
                    'items_wrap' => '<ul class = "%2$s">%3$s</ul>',
                    'link_before'          => '<span></span>',
                    'link_after'           => '',
                );
                echo '<nav class="kopa-main-nav">';
                wp_nav_menu( $args );
                echo '</nav>';
                echo ' <!--/end main-nav-->
                    </div>';
            }
            ?>
            <!-- kopa-header-bottom -->

            <div class="kopa-header-mobile">

                <div class="kopa-header-mobile-left">
                    <span></span>
                    <?php
                    $garajez_mobile_logo = get_theme_mod('mobile_logo_url', '');
                    if( $garajez_mobile_logo ){ ?>
                    <div class="kopa-logo">
                        <a href="<?php echo esc_url(home_url('/'));?>" title="<?php echo esc_attr(get_bloginfo('name'), 'display');?>"><img id="logo-image-mobile" class="logo-image" src="<?php echo esc_url($garajez_mobile_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name'), 'display');?>"></a>
                    </div>
                    <?php } else { ?>
                    <div class="kopa-logo">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_attr(get_bloginfo('name'), 'display');?></a></h1>
                        <p><?php echo esc_html(get_bloginfo('description', 'display')); ?></p>
                    </div>
                    <?php } ?>
                    <!-- logo -->
                </div>
                <!-- kopa-header-mobile-left -->

                <?php
                if ( has_nav_menu('main-nav') ) {
                    /*
                    * Main nav for desktop
                    */
                    $args = array(
                        'theme_location' => 'main-nav',
                        'container' => '',
                        'menu_class' => 'main-menu-mobile clearfix',
                        'items_wrap' => '<ul class = "%2$s">%3$s</ul>',

                    );
                    echo '<nav class="main-nav-mobile clearfix">';
                    echo '<a class="pull fa fa-bars"></a>';
                    wp_nav_menu( $args );
                    echo '</nav>';
                }
                ?>
                <!--/main-menu-mobile-->

            </div>
            <!-- kopa-header-mobile -->

        </div>
        <!-- kopa-header-right -->
        <div class="clearfix"></div>
        <?php
        $header_title_status = get_theme_mod('header_title_status', 1);
        $main_class = 'main-content';
        if( 1 == $header_title_status ){ ?>
            <div class="kopa-page-heading">
                <p><?php get_template_part('library/templates/template','title' ); ?></p>
            </div>
            <?php } ?>
    </div>
    <!-- wrapper -->

</header>
<!-- kopa-page-header -->
<?php get_template_part('library/templates/breadcrumb'); ?>
<div id="main-content">