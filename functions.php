<?php
define('KOPA_THEME_TYPE', 'free');
define('KOPA_THEME_URL', 'http://kopatheme.net/demo/garajez');
define('KOPA_PREFIX', 'garajez_');

/* BASIC */
require_once( get_template_directory() . '/library/api/tgm-plugin-activation.class.php' );
require_once( get_template_directory() . '/library/plugin.php');
require_once( get_template_directory() . '/library/front.php' );
require_once( get_template_directory() . '/library/customize.php' );
require_once( get_template_directory() . '/library/backend.php' );

/*WIDGET*/
if ( class_exists('Kopa_Framework') ) {
    require_once( get_template_directory() . '/widgets/class-kopa-blog-slider.php' );
}

