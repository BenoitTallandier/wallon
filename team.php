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
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/wallon.olympe.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.2"}};
			!function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d"),f=String.fromCharCode;return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(f(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(f(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(f(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(f(55357,56835),0,0):e.fillText(f(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
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
.kopa-header{background: url('images/wally.jpg');}
</style>
<link rel='stylesheet' id='garajez_extra-css'  href='css/extra.css?ver=4.4.2' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
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

				<div class="kopa-header-bottom ">
					<nav class="kopa-main-nav">
						<ul class = "main-menu sf-menu clearfix">
							<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="index.php"><span></span>acceuil</a></li>
							<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 current-menu-item page_item page-item-5 current_page_item"><a href="team.php"><span></span>team</a></li>
							<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="videos.php"><span></span>videos</a></li>
							<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="mods.php"><span></span>mods</a></li>
							<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="materiel.php"><span></span>materiel</a></li>
						</ul>
					</nav> <!--/end main-nav-->
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

					<nav class="main-nav-mobile clearfix"><a class="pull fa fa-bars"></a><ul class = "main-menu-mobile clearfix">
					<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item menu-item-56"><a href="index.php">acceuil</a></li>
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
					<h1 class="page-title">Team</h1> 
					<ul class="clearfix">
						<li>                
							<article class="entry-item post-5 page type-page status-publish hentry">                     
								<h3 class="entry-title" itemscope="" itemtype="http://schema.org/Event"><a itemprop="name" href="#" title="acceuil" class="kopa-search"></a></h3>
								<TABLE>								
									<!--<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Salut tous le monde, je m'appelle <span style='color:red;'>Nicolas</span>, j'ai 16 ans, j'habite en Belgique ! J'aime beaucoup l'agriculture ! Je suis fan de jeu de simulation ! J'ai également une chaine YT, je suis très heureux de faire partie de la team Sup3r !</TD></div></p></TR>
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Salut ! Moi c'est <span style='color:red;'>Benjamin</span> ou Benji comme vous voulez. J'ai 15 ans, je suis aussi YouTuber ! Je suis passionné par l'agriculture et les jeux vidéos ! J'habite dans le 85 en Vendée. Je suis content de faire partie de la Team Super ! :D</TD></div></p></TR>
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Salut, moi c'est <span style='color:red;'>Sébastien</span> connu sous le nom YouTube de TheSeB's, spécialiste en vidéo-montage et vidéo commentés, à la recherche de l'innovation. J'aime bien évidemment Farming Simulator. J'habite en Basse-Normandie, plus précisemment dans la Manche à coté du Gamer Manchot. Je connais Wallon depuis peu mais c'est comme si on se connaissait depuis toujours. Je fais également partit de la Team Sup3r, là où je passe de supers moments !</TD></div></p></TR>
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Bonjours, je m'appelle <span style='color:red;'>Baptiste</span>, j'ai 14 ans ! Je suis fan de l'agriculture d'ailleurs mes parents sont agriculteurs. J'aime jouer à  Farming Simulator en compagnie de le Team super . J'habite en Basse-Normandie dans la Manche. J'ai une chaine YouTube moi aussi! J'ai rencontré Wally  sur une vidéo de Benji et depuis environ 1 ans, je l'aide pour ses vidéos. Je fais parti de sa team depuis qu'il l'a crée et jouer avec eut est un  grand plaisir !</TD></div></p></TR>-->
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Salut l'ami! Je me pésente je m'appelle <span style='color:red;'>Jonathan</span>. Je suis un jeune homme pationné par l'agriculture, la contruction et ... MON PC! J'ai aussi une chaine youtube. J'habite en campagne, en suisse... (vive le fromage et le chocolat xD). J'ai rencontré l'équipe il y a de ça 1 ans. Je suis très heureux de faire partie de la TeamSuper car nous passons toujours d'excellents moment sur pleins de jeux différents. Enfin bref fini de discuter je vous souhaite une bonne fin de journéé ou bonne nuit ou je ne sais et je te dis à la prochaine dans une vidéo ou eun live en compagnie de l'équipe!! BYE!</TD></div></p></TR>
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Coucou, je m'appelle <span style='color:red;'>Benoît</span>. J'ai 20 ans, j'habite dans l'est de la France et j'adore la programmation et l'agriculture (ça va super bien ensemble). Je fais partie de la team super, je passe beaucoup de temps avec  eux, on rigole énormement.</TD></div></p></TR>
									<TR id='tr_team'><p class="kopa-search"><div class='text_accueil'><TD id='td_team'><img width=200px src='images/logo.png'></TD><TD id='td_team'>Wesh wesh kanapeche tous le monde on se retrouve pour une nouvelle présentation je m'appelle <span style='color:red;'>steven</span> #stiki67 je vie en Alsace a Strasbourg comme tellis j'ai 22 ans je travaille dans les câblage électrique de tous genres j'aime l'agriculture heu c'est quoi ça ? J'ai une chaîne c'est stiki67 aller vous abonné quand même hein je dit ça je dit rien ;) je suis le PDG de la team super avec wallon on a une super équipe abonné vous a tous l'équipe et surtout a nico-super <3 sinon j'espère ma presentation va vous palire sinon ba tempis abonné vous quand même allée bisous tous le monde</TD></div></p></TR>
								</TABLE>
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
var kopa_custom_front_localization = {"url":{"template_directory_uri":"http:\/\/wallon.olympe.in\/wp-content\/themes\/garajez-lite\/","ajax":"http:\/\/wallon.olympe.in\/wp-admin\/admin-ajax.php","post_id":5}};
/* ]]> */
</script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/comment-reply.min.js?ver=4.4.2'></script>
<script type='text/javascript' src='js/wp-embed.min.js?ver=4.4.2'></script>
</body>

</html>