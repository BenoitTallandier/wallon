
<?php get_header(); ?>

<div class="wrapper">
    <section class="error-404 clearfix">
        <div class="left-col">
            <p><?php echo esc_html__('404','garajez-lite'); ?></p>
        </div><!--left-col-->
        <div class="right-col">
            <h1><?php echo esc_html__('Page not found...','garajez-lite'); ?></h1>
            <p><?php echo esc_html__("We're sorry, but we can't find the page you were looking for. It's probably some thing we've done wrong but now we know about it we'll try to fix it. In the meantime, try one of this options:",'garajez-lite'); ?></p>
            <ul class="arrow-list">
                <li><a href="javascript: history.go(-1);"><?php echo esc_html__( 'Go back to previous page', 'garajez-lite' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo esc_html__( 'Go to homepage', 'garajez-lite' ); ?></a></li>
            </ul>
        </div><!--right-col-->
    </section>
</div>

<?php
    get_footer();
