<?php
$kopa_setting = garajez_get_template_setting();
$sidebar = array();
if ( $kopa_setting ) {
    $sidebar = $kopa_setting['sidebars'];
}

get_header(); ?>

<section class="kopa-area">

    <div class="wrapper">

        <div class="row">
            <?php if( isset($sidebar['position_1']) && is_active_sidebar( $sidebar['position_1'] ) ){
            echo '<div class="kopa-main-col col-md-8 col-sm-8 col-xs-8">';
        } else {
            echo '<div class="kopa-main-col col-md-12 col-sm-12 col-xs-12">';
        } ?>
            <div class="kopa-entry-list">
                <h1 class="archive-title">
                    <?php
                    printf( esc_attr__( 'All posts by %s', 'garajez-lite' ), get_the_author() );
                    ?>
                </h1>
                <?php get_template_part('library/templates/loop','author' ); ?>
            </div>

        </div><!-- col-md-8 -->

        <?php if( isset($sidebar['position_1']) && is_active_sidebar( $sidebar['position_1'] )){
        add_filter('dynamic_sidebar_params', 'mitta_right_sidebar_params');
        ?>
        <div class="sidebar col-md-4 col-sm-4 col-xs-4">

            <?php dynamic_sidebar($sidebar['position_1'] ); ?>

        </div><!-- col-md-4 -->
        <?php
        remove_filter('dynamic_sidebar_params', 'mitta_right_sidebar_params');
    } ?>
    </div>
    <!-- row -->

    </div>

</section>
<!-- kopa-area -->

<?php get_footer();