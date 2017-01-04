/**
 * http://kopatheme.com
 * Copyright (c) 2014 Kopatheme
 *
 * Licensed under the GPL license:
 *  http://www.gnu.org/licenses/gpl.html
 **/
/**
 *   1- Main menu
 *   2- Mobile menu
 *   3- Owl Carousel
 *   4- Flick
 *   5- Scroll to top
 *   6- Select box
 *   7- Mansonry
 *   9 Fix css ie8
 *-----------------------------------------------------------------
 **/

"use strict";

jQuery(document).ready(function(){

    var kopa_variable = {
        "url": {
            "template_directory_uri": kopa_custom_front_localization.url.template_directory_uri
        }
    };

    /* =========================================================
     1. top Menu
     ============================================================ */

    Modernizr.load([
        {
            load: kopa_variable.url.template_directory_uri + 'js/superfish.js',
            complete: function () {

                //Main menu
                jQuery('.top-menu').superfish({
                });

            }
        }
    ]);

    /* =========================================================
     2. Main Menu
     ============================================================ */

    Modernizr.load([
        {
            load: kopa_variable.url.template_directory_uri + 'js/superfish.js',
            complete: function () {

                //Main menu
                jQuery('.sf-menu').superfish({});

            }
        }
    ]);

    /* =========================================================
     3. Owl Carousel
     ============================================================ */

    Modernizr.load([{
        load: [ kopa_variable.url.template_directory_uri + 'js/owl.carousel.js',   kopa_variable.url.template_directory_uri + 'js/imagesloaded.js'],
        complete: function () {

            var owl1 = jQuery(".owl-carousel-1");
            owl1.owlCarousel({
                singleItem: true,
                pagination: true,
                slideSpeed: 600,
                autoPlay: true,
                transitionStyle : "fade",
                navigationText: false,
                navigation: false,
                afterInit: function(){
                    jQuery(".loading").hide();
                }
            });

            var owl2 = jQuery(".owl-carousel-2");
            owl2.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    itemsDesktop : [1120,item],
                    itemsDesktopSmall : [979,2],
                    itemsMobile : [639,1],
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                var featured_post_product = $this.parent().parent().parent();
                featured_post_product.find(".kopa-owl-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                featured_post_product.find(".kopa-owl-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl3 = jQuery(".owl-carousel-3");
            owl3.owlCarousel({
                singleItem: true,
                pagination: false,
                navigation: true,
                slideSpeed: 600,
                autoPlay: true,
                navigationText: false,
                afterInit: function(){
                    jQuery(".loading").hide();
                }
            });

            var owl4 = jQuery(".owl-carousel-4");
            owl4.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    pagination: true,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                $this.find(".owl-controls").addClass("style2");
            });


            var owl5 = jQuery(".owl-carousel-5");
            owl5.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                var team_widget = $this.parent().parent().parent().parent();
                team_widget.find(".kopa-owl-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                team_widget.find(".kopa-owl-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl6 = jQuery(".owl-carousel-6");
            owl6.each(function(){
                var $this = jQuery(this);
                $this.owlCarousel({
                    singleItem: true,
                    pagination: false,
                    navigationText: false,
                    navigation: true,
                    slideSpeed: 500,
                    autoPlay:false,
                    stopOnHover: true
                });
            });


            var owl7 = jQuery(".owl-carousel-7");
            owl7.owlCarousel({
                singleItem: true,
                pagination: true,
                navigation: false,
                transitionStyle : "backSlide",
                slideSpeed: 600
            });
            owl7.find(".owl-controls").addClass("style2");

            var owl8 = jQuery(".owl-carousel-8");
            owl8.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    itemsDesktop : [1160,item],
                    itemsDesktopSmall : [979,item],
                    itemsMobile : [639,1],
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true,
                });
                var article_list = $this.parent().parent();
                article_list.find(".kopa-owl-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                article_list.find(".kopa-owl-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl9 = jQuery(".owl-carousel-9");
            owl9.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');

                    $this.owlCarousel({
                        singleItem: true,
                        pagination: false,
                        slideSpeed: slidespeed,
                        autoPlay:autoplay,
                        stopOnHover: true,
                        transitionStyle : "fade",
                        navigationText: false,
                        navigation: true,
                        afterInit: function(){
                            jQuery(".loading").hide();
                        }
                    });
            });


            var owl10 = jQuery(".owl-carousel-10");
            owl10.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');

                $this.owlCarousel({
                    items : item,
                    itemsDesktop : [1120,item],
                    itemsDesktopSmall : [979,2],
                    itemsMobile : [639,1],
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                var featured_post = $this.parent().parent().parent();
                featured_post.find(".kopa-owl-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                featured_post.find(".kopa-owl-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl11 = jQuery(".owl-carousel-11");
            owl11.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                var partner_widget = $this.parent().parent();
                partner_widget.find(".kopa-owl-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                partner_widget.find(".kopa-owl-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl12 = jQuery(".owl-carousel-12");
            owl12.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    items : item,
                    itemsDesktop : [1160,item],
                    itemsMobile : [639,1],
                    pagination: false,
                    navigationText: false,
                    navigation: false,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true
                });
                var portfolio_3 = $this.parent().parent().parent().parent();
                portfolio_3.find(".por-prev").click(function(){
                    $this.trigger('owl.prev');
                });
                portfolio_3.find(".por-next").click(function(){
                    $this.trigger('owl.next');
                });
            });


            var owl13 = jQuery(".owl-carousel-13");
            owl13.owlCarousel({
                items : 3,
                itemsDesktop : [1160,3],
                pagination: false,
                navigationText: false,
                navigation: false,
                slideSpeed: 600
            });
            jQuery(".related-post-widget .kopa-owl-prev").click(function(){
                owl13.trigger('owl.prev');
            });
            jQuery(".related-post-widget .kopa-owl-next").click(function(){
                owl13.trigger('owl.next');
            });

            var owl14 = jQuery(".owl-carousel-14");
            owl14.each(function(){
                var $this = jQuery(this),
                    autoplay = ($this.data('autoplay')) ? true : false,
                    slidespeed = $this.data('slidespeed'),
                    item = $this.data('item');
                $this.owlCarousel({
                    singleItem: true,
                    pagination: true,
                    slideSpeed: slidespeed,
                    autoPlay:autoplay,
                    stopOnHover: true,
                    transitionStyle : "fade",
                    navigationText: false,
                    navigation: false
                });
                $this.find(".owl-controls").addClass("style2");

            });


        }
    }]);

    /* =========================================================
     5. Scroll to top
     ============================================================ */

    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 200) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }
    });

    jQuery('.scrollup').click(function(){
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* =========================================================
     7. Masonry
     ============================================================ */

    Modernizr.load([{
        load: [ kopa_variable.url.template_directory_uri + 'js/imagesloaded.js'],
        complete: function () {
            var jQuerymasonry1 = jQuery('.kopa-masonry-widget > ul');
            if(jQuerymasonry1.length > 0){
                imagesLoaded(jQuerymasonry1, function () {
                    jQuerymasonry1.masonry({
                        columnWidth: 1,
                        itemSelector: '.ms-item1'
                    });
                    jQuerymasonry1.masonry('bindResize')
                });
            }
        }
    }]);

    Modernizr.load([{
        load: [ kopa_variable.url.template_directory_uri + 'js/imagesloaded.js'],
        complete: function () {
            var jQuerymasonry3 = jQuery('.article-list-5 > ul');
            if(jQuerymasonry3.length > 0){
                imagesLoaded(jQuerymasonry3, function () {
                    jQuerymasonry3.masonry({
                        columnWidth: 1,
                        itemSelector: '.ms-item2'
                    });
                    jQuerymasonry3.masonry('bindResize')
                });
            }

            var jQuerymasonry4 = jQuery('.kopa-service-4-widget > .row');
            if(jQuerymasonry4.length > 0){
                imagesLoaded(jQuerymasonry4, function () {
                    jQuerymasonry4.masonry({
                        columnWidth: 1,
                        itemSelector: '.ms-item3'
                    });
                    jQuerymasonry4.masonry('bindResize')
                });
            }

            var jQuerymasonry5 = jQuery('.article-list-2 > ul');
            if(jQuerymasonry5.length > 0){
                imagesLoaded(jQuerymasonry5, function () {
                    jQuerymasonry5.masonry({
                        columnWidth: 1,
                        itemSelector: '.ms-item5'
                    });
                    jQuerymasonry5.masonry('bindResize')
                });
            }
        }
    }]);

    /* ============================================
     8. Mobile-menu
     =============================================== */

    Modernizr.load([{
        load: [kopa_variable.url.template_directory_uri + 'js/jquery.navgoco.js'],
        complete: function () {

            jQuery(".top-menu-mobile").navgoco({
                accordion: true
            });
            jQuery(".top-nav-mobile > .pull").click(function () {
                jQuery(".top-menu-mobile").slideToggle("slow");
            });
            jQuery(".caret").removeClass("caret");


            jQuery(".main-menu-mobile").navgoco({
                accordion: true
            });
            jQuery(".main-menu-mobile").find(".sf-mega").removeClass("sf-mega").addClass("sf-mega-mobile");
            jQuery(".main-menu-mobile").find(".sf-mega-section").removeClass("sf-mega-section").addClass("sf-mega-section-mobile");

            jQuery(".main-nav-mobile > .pull").click(function () {
                jQuery(".main-menu-mobile").slideToggle("slow");
            });
            jQuery(".caret").removeClass("caret");
        }
    }]);

    /* =========================================================
     9. Fix css ie8
     ============================================================ */
    jQuery(".main-nav-mobile .main-menu-mobile > li .sf-mega-mobile .sf-mega-section-mobile .sub-menu li:last-child a").css("padding-bottom", "0");
    jQuery(".e-heading p:last-child").css("margin-bottom", "0");
    jQuery(".owl-carousel-7 .item > ul > li:nth-child(2n)").css({
        "background": "#3d3d3d",
        "border-top": "1px solid #646464"
    });
});
