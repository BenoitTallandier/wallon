<?php

$kopa_setting = garajez_get_template_setting();
$sidebar = array();
if ( $kopa_setting ) {
    $sidebar = $kopa_setting['sidebars'];
}

?>
</div><!-- main-content -->

<?php
    if( ( isset($sidebar['position_2']) && is_active_sidebar( $sidebar['position_2'] ) )
        || ( isset($sidebar['position_3']) && is_active_sidebar( $sidebar['position_3'] ) )
        || ( isset($sidebar['position_4']) && is_active_sidebar( $sidebar['position_4'] ) )
        || ( isset($sidebar['position_5']) && is_active_sidebar( $sidebar['position_5'] ) )
        || ( isset($sidebar['position_6']) && is_active_sidebar( $sidebar['position_6'] ) )

      ) :
?>
    <div id="bottom-sidebar">

    <div class="wrapper">

        <!-- FOOTER 1 -->
        <?php
            if( isset($sidebar['position_2']) && is_active_sidebar( $sidebar['position_2'] )){
                echo '<div class="bottom-area-1">';
                dynamic_sidebar($sidebar['position_2'] );
                echo '</div>';
        }
        ?>
        <!-- bottom-area-1 -->

        <div class="bottom-area-2">
            <div class="row">

                <!-- FOOTER 2-->
                <?php
                    echo '<div class="col-md-3 col-sm-3 col-xs-3">';
                    if( isset($sidebar['position_3']) && is_active_sidebar( $sidebar['position_3'] )){
                        dynamic_sidebar($sidebar['position_3'] );
                    }
                    echo '</div>';
                ?>

                <!-- FOOTER 3-->
                <?php
                    echo '<div class="col-md-3 col-sm-3 col-xs-3">';
                    if( isset($sidebar['position_3']) && is_active_sidebar( $sidebar['position_4'] ) ){
                        dynamic_sidebar($sidebar['position_4'] );
                    }
                    echo '</div>';
                ?>

                <!-- FOOTER 4-->
                <?php
                    echo '<div class="col-md-3 col-sm-3 col-xs-3">';
                    if( isset($sidebar['position_5']) && is_active_sidebar( $sidebar['position_5'] )){
                        dynamic_sidebar($sidebar['position_5'] );
                    }
                    echo '</div>';
                ?>

                <!-- FOOTER 5-->
                <?php
                    echo '<div class="col-md-3 col-sm-3 col-xs-3">';
                    if( isset($sidebar['position_6']) && is_active_sidebar( $sidebar['position_6'] )){
                        dynamic_sidebar($sidebar['position_6'] );
                    }
                    echo '</div>';
                ?>
            </div>
            <!-- row -->

        </div>
        <!-- bottom-area-2 -->
    </div>

</div>
<?php endif; ?>

<?php
// get options
$kopa_theme_options_copyright = get_theme_mod('copyright', '');
$kopa_theme_options_copyright = htmlspecialchars_decode(stripslashes($kopa_theme_options_copyright));




if(!empty($kopa_theme_options_copyright)){ ?>
<footer id="kopa-footer">

    <div class="wrapper clearfix">

        <p id="copyright"><?php
            echo wp_kses( $kopa_theme_options_copyright, array(
                'strong' => array(),
                'b' => array(),
                'i' => array(),
                'small' => array(),
                'a' => array()
            ) );
            ?>
        </p>
    </div>
    <!-- wrapper -->

</footer>
<!-- kopa-footer -->
<?php } ?>
<a href="#" class="scrollup" rel="nofollow"><span class="fa fa-chevron-up"></span></a>
    <?php wp_footer(); ?>
</body>

</html>
