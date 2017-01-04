<!DOCTYPE html>
<?php
include "variables.php";
include "DBconnection.php";
include("fonction.php");
?>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php">
    <title>Mister Wallon</title>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='garajez_font-google-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C600%2C700%2C800%7CRoboto+Condensed%3A300italic%2C400italic%2C700italic%2C400%2C300%2C700%7CRoboto+Slab%3A400%2C700%2C300%2C100%7COswald%3A400%2C300%2C700&#038;ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_bootstrap-css'  href='css/bootstrap.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='kopa_font_awesome-css'  href='font-awesome.css?ver=4.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_superfish-css'  href='css/superfish.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_megafish-css'  href='css/megafish.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_navgoco-css'  href='css/jquery.navgoco.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_owl-carousel-css'  href='css/owl.carousel.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_owl-theme-css'  href='css/owl.theme.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_magnific-popup-css'  href='css/magnific-popup.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_animate-css'  href='css/animate.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='garajez_style-css'  href='style.css?ver=4.4.2' type='text/css' media='all' />
<style id='garajez_style-inline-css' type='text/css'>
</style>
<link rel='stylesheet' id='garajez_extra-css'  href='css/extra.css?ver=4.4.2' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//misterwallon.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//misterwallon.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</head>
<body class="home page page-id-5 page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php">
<header id="kopa-parallax" class="kopa-header kopa-parallax">
		<div class="kopa-bg"></div>
		<div class="wrapper">

			<div class="kopa-header-left">
				<span></span>
							<div class="kopa-logo">
					<h1 class="site-title"><a href="index.php" title="Mister Wallon">Mister Wallon</a></h1>
					<p></p>
				</div>
							<!-- logo -->

			</div>
			<!-- kopa-header-left -->

			<div class="kopa-header-right ">

				<div class="kopa-header-top ">
					<nav class="top-nav-mobile"><a class="pull">menu<span class="fa fa-caret-down"></span></a>
					<ul class = "top-menu-mobile clearfix"><li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="<?php echo $facebook; ?>">facebook</a></li>
					<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="<?php echo $twiter; ?>">twitter</a></li>
					<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="<?php echo $youtube; ?>">youtube</a></li>
					</ul></nav>                <!-- top-nav-mobile -->

					<div class="search-box">
										</div>
					<!--search-box-->
					<nav class="kopa-top-nav"><ul class = "top-menu clearfix"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61"><a href="<?php echo $facebook; ?>">facebook</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62"><a href="<?php echo $twiter; ?>">twitter</a></li>
					<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63"><a href="<?php echo $youtube; ?>">youtube</a></li>
					</ul></nav>                <!-- top-nav -->

				</div>
				<!-- kopa-header-top -->

				<div class="kopa-header-middle ">

					<div class="kopa-address-box"><ul class="clearfix"><li><p><i></i></p></li></ul></div><!--kopa-address-box-->

				</div>
				<!-- kopa-header-middle -->

				<div class="kopa-header-bottom "><nav class="kopa-main-nav"><ul class = "main-menu sf-menu clearfix"><li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-56"><a href="index.php"><span></span>accueil</a></li>
				<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="team.php"><span></span>team</a></li>
				<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="videos.php"><span></span>videos</a></li>
				<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="mods.php"><span></span>mods</a></li>
				<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="materiel.php"><span></span>materiel</a></li>
	</ul></nav> <!--/end main-nav-->
						</div>            <!-- kopa-header-bottom -->

				<div class="kopa-header-mobile">

					<div class="kopa-header-mobile-left">
						<span></span>
											<div class="kopa-logo">
							<h1 class="site-title"><a href="index.php">Mister Wallon</a></h1>
							<p></p>
						</div>
											<!-- logo -->
					</div>
					<!-- kopa-header-mobile-left -->

					<nav class="main-nav-mobile clearfix"><a class="pull fa fa-bars"></a><ul class = "main-menu-mobile clearfix"><li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-56"><a href="index.php">acceuil</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="team.php">team</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="videos.php">videos</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="mods.php">mods</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="materiel.php">materiel</a></li>
					</ul></nav>                <!--/main-menu-mobile-->

				</div>
				<!-- kopa-header-mobile -->

			</div>
			<!-- kopa-header-right -->
			<div class="clearfix"></div>
				</div>
		<!-- wrapper -->
</header>

<!-- kopa-page-header -->
<div id="main-content">
<section class="kopa-area">

    <div class="wrapper">

        <div class="row">
            <div class="kopa-main-col col-md-12 col-sm-12 col-xs-12">
				<div class="kopa-entry-list">
				<h1 class="page-title">Accueil</h1> 
				<ul class="clearfix">
					<li>
						<div id="slideshow">
							<ul id="sContent"><!--
								  --><li><img class='img_slider' width=960px src="images/slider/image1.png" /></li><!--
								  --><li><img class='img_slider' width=960px src="images/slider/image2.png" /></li><!--
								  --><li><img class='img_slider' width=960px src="images/slider/image3.png" /></li><!--
								  <li><img class='img_slider'width=960px src="images/slider/image4.png" /></li>-->
							</ul>
						</div>					
						<article class="entry-item post-5 page type-page status-publish hentry">                     
							<h3 class="entry-title" itemscope="" itemtype="http://schema.org/Event"><a itemprop="name" href="#" title="acceuil" class="kopa-search"></a></h3>
								<p class="kopa-search"><div class='text_accueil'>Bijour tout le monde, Bienvenu sur le site de Mister Wallon. J&rsquo;espère que t&rsquo;y trouveras ce que tu cherches et que tu passeras un bon moment dans ma galaxie.</br></br></br></br></div></p>
						</article>
						<h1 class="page-title">News</h1> 
						<article class="entry-item post-5 page type-page status-publish hentry">                     
							
								<?php
								$query = "SELECT * FROM news ORDER BY date DESC";
								$Result = mysqli_query($db,$query);
								while($Line = mysqli_fetch_array($Result)){
									extract($Line);
									echo "<div class='titre_accueil'><h3 class='entry-title' itemscope='' itemtype='http://schema.org/Event'><a itemprop='name' href='#' title='acceuil' class='kopa-search'>".$title."</a></h3></div><span class='date_news'>il y a ".diff_date($today,$date)."</span></br>";
									echo "<p class='kopa-search'><div class='content_news'>".$content."</div></p></br></br></br></br></br>";
								}
								?>
						</article>
					</li>

				</ul>
	                </div>

            </div><!-- col-md-8 -->
        </div>
        <!-- row -->

    </div>

</section>
<!-- kopa-area -->

</div><!-- main-content -->

<?php 
	include "footer.php";
?>
<!-- kopa-footer -->
<a href="#" class="scrollup" rel="nofollow"><span class="fa fa-chevron-up"></span></a>
    <script type='text/javascript' src='js/modernizr.custom.js'></script>
<script type='text/javascript' src='js/masonry.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='js/bootstrap.js'></script>
<script type='text/javascript' src='js/jquery/jquery.form.min.js?ver=3.37.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
//var kopa_custom_front_localization = {"url":{"template_directory_uri":"http:\/\/wallon.olympe.in\/wp-content\/themes\/garajez-lite\/","ajax":"http:\/\/wallon.olympe.in\/wp-admin\/admin-ajax.php","post_id":5}};
/* ]]> */
</script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/comment-reply.min.js?ver=4.4.2'></script>
<script type='text/javascript' src='js/wp-embed.min.js?ver=4.4.2'></script>
</body>

</html>