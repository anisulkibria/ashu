<!DOCTYPE html>

<html lang="en-US" prefix="og: http://ogp.me/ns#"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php 	$category = get_the_category();
			$catname = $category[0]->cat_name; echo $catname;?></title>

    <!-- favicon & links -->
    <link rel="shortcut icon" href="https://cupofjo.com/wp-content/themes/cupofjo/coj-favicon.ico?v=2" type="image/x-icon">
    <link rel="pingback" href="https://cupofjo.com/xmlrpc.php">
    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="https://cupofjo.com/wp-content/themes/cupofjo/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    

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
<link rel="stylesheet" id="yarppWidgetCss-css" href="<?php echo get_template_directory_uri() . '/assets-blog/widget.css'; ?>" type="text/css" media="all">
<link rel="stylesheet" id="jpibfi-style-css" href="<?php echo get_template_directory_uri() . '/assets-blog/client.css'; ?>" type="text/css" media="all">
<link rel="stylesheet" id="wp-polls-css" href="<?php echo get_template_directory_uri() . '/assets-blog/polls-css.css'; ?>" type="text/css" media="all">
<style id="wp-polls-inline-css" type="text/css">
.wp-polls .pollbar {
	margin: 1px;
	font-size: 8px;
	line-height: 10px;
	height: 10px;
	background: #E13D3D;
	border: 1px solid #E13D3D;
}

</style>
<link rel="stylesheet" id="cup-of-jo-style-css" href="<?php echo get_template_directory_uri() . '/assets-blog/style.css'; ?>" type="text/css" media="all">
<link rel="stylesheet" id="jetpack_css-css" href="<?php echo get_template_directory_uri() . '/assets-blog/jetpack.css'; ?>" type="text/css" media="all">
<link rel="stylesheet" id="googleFonts-css" href="<?php echo get_template_directory_uri() . '/assets-blog/css'; ?>" type="text/css" media="all">
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jquery.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jquery-migrate.min.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jquery.fitvids.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jquery.bxslider.min.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/validation.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/theme.js.download'; ?>"></script>
<link rel="https://api.w.org/" href="https://cupofjo.com/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cupofjo.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cupofjo.com/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.9.6">
<link rel="shortlink" href="http://bit.ly/2MqipTc">
        <style type="text/css">
            a.pinit-button.custom {
            width: 75px !important;height: 25px !important;            }

            a.pinit-button.custom span {
            width: 75px !important;height: 25px !important;background-image: url("https://cupofjo.com/wp-content/uploads/2015/02/pin-it-button.png");background-size: 75px 25px;            }

            .pinit-hover {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }
        </style>

		<style type="text/css">img#wpstats{display:none}</style>	<!-- Connexity Header Snippet -->
	<script type="text/javascript">var _CXT_T = _CXT_T || {}; _CXT_T["3"] = _CXT_T["3"] || {q: []};
	(function(){var s=document.createElement('script');s.type='text/javascript';
	s.async=true;s.src=((document.location.protocol=='https:')?'https://t.cxt.ms/':'http://s.cxt.ms/') + "init.3.0.js";
	var e=document.getElementsByTagName('script')[0];e.parentNode.insertBefore(s,e);})();
	</script>
			<!-- Easy Columns 2.1.1 by Pat Friedl http://www.patrickfriedl.com -->
			<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets-blog/easy-columns.css'; ?>" type="text/css" media="screen, projection">
			    <script src="<?php echo get_template_directory_uri() . '/assets-blog/test.js.download'; ?>"></script>

    <script type="text/javascript">
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') +
                    '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>


</head>

<body class="archive category category-food category-13 published_2018">

	<div id="page">
		<header id="site-header" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
				
                    <img src="<?php echo get_template_directory_uri() . '/assets/saved_resource'; ?>" onerror="this.onerror=null; this.src=&#39;<?php echo get_template_directory_uri() . '/assets/saved_resource'; ?>&#39;" alt="A Cup of Jo">

                			</a>

			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                <ul class="mobile-nav">
                	<li class="nav-trigger"><i class="icon-menu"></i> MENU</li>
                	<li class="search-trigger"><i class="icon-search"></i></li>
                </ul>
			</nav><!-- #access -->

		</header><!-- #branding -->
        <div class="search-dropdown">
            <form method="get" id="searchform" action="https://cupofjo.com/">
	<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?">
	<button type="submit" class="submit" name="submit" id="searchsubmit"><i class="icon-search"></i></button>
</form>        </div>
        <div class="overlay-nav" role="navigation">
        	<nav class="menu-main-menu-container">
<?php 
wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'container' => 'ul',
	'menu_id'=> 'menu-main-menu-1',
    'menu_class'=> 'menu'
 ) );
 ?>			
			
			</nav>		</div><!-- #access -->
        <div id="loading" style="display:none;">
            <p class="text-center"><img src="<?php echo get_template_directory_uri() . '/assets/loading.gif'; ?>"></p>
        </div>
		<div id="main">
<section id="primary" role="main">
	<div id="temp-container" style="display:none;"></div>
	<div id="save-grid">
		
			<header class="entry-header">
				<?php
					the_archive_title( '<h1 class="archive-title category-title">', '</h1>' );
					//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				
			</header><!-- .page-header -->

			<div id="content" class="post-grid" style="text-align: justify;">

						
				<?php 
					if ( have_posts() ) : 
					while ( have_posts() ) :
						the_post();
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>	


				<div class="grid-item-placeholder"></div><div class="grid-item-placeholder"></div>
			</div>
		<nav id="nav-below" style="display: none;">
	<div class="nav-previous"><a href="https://cupofjo.com/category/food/page/2/">load more</a></div>
	</nav><!-- #nav-above -->
			</div>
</section><!-- #primary -->
<script>
<!--
gridCaption();
//-->
</script>

<?php get_sidebar(); ?>	

</div><!-- #main -->

</div><!-- #page -->





<?php get_footer(); ?>
