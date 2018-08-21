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
<div id="secondary" class="widget-area" role="complementary">
	<aside id="cup-of-jo-about-widget-2" class="widget widget_cup-of-jo-about-widget">		
			<div class="about-widget">
				<a href="<?php echo esc_url( home_url( '/যোগাযোগ/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/assets-blog/about_ashfaque.jpg'; ?>" alt="ASHFAQUE ABIR">
					<h4>About / Contact</h4>
					<h3>ASHFAQUE ABIR</h3>
				</a>
			</div>
		
		</aside><aside id="cup-of-jo-social-widget-2" class="widget widget_cup-of-jo-social-widget"><h4 class="widget-title">Let’s Hang Out</h4>		
			<div class="social-links">
									<a href="https://www.facebook.com/###" target="_blank" class="social-link facebook"><i class="icon-facebook"></i></a>
									<a href="https://twitter.com/###" target="_blank" class="social-link twitter"><i class="icon-twitter"></i></a>
									<a href="https://www.pinterest.com/###" target="_blank" class="social-link pinterest"><i class="icon-pinterest"></i></a>
									<a href="https://www.instagram.com/###" target="_blank" class="social-link instagram"><i class="icon-instagram"></i></a>
							</div>
							<a href="<?php echo esc_url( home_url( '/যোগাযোগ/' ) ); ?>" class="contact-page-link"><em>contact me</em></a>
					
		</aside>


			    		<!-- top level cat -->    				
    		    
		    

</div><!-- #secondary .widget-area -->		</div><!-- #main -->

</div><!-- #page -->





<footer id="colophon" role="contentinfo">
	<div class="inner">
		<div class="footer-about">
			<strong>About Ashfaque Abir</strong>
<p style="text-align: left;">লিখালিখি টা হয়তবা বালখিল্যতা বা অতি আবেগ,তবে লিখাটা আমি শুধু মনের তাগিদেই লিখি।</p>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><em>read more</em></a>
		</div>
		<div class="footer-navigation">
			<div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-56477" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-56477"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-6474" class="menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-6474"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-6458" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6458"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-56567" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-56567"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-6482" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6482"><a href="https://cupofjo.com/category/relationships/">###</a></li>
<li id="menu-item-6499" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6499"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-7002" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7002"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-7008" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7008"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
<li id="menu-item-7013" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7013"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">###</a></li>
</ul></div>			<div class="footer-social">
				<h3>Let's Hang Out</h3>
				<div class="social-links">
											<a href="https://www.facebook.com/###" target="_blank" class="social-link facebook"><i class="icon-facebook"></i></a>
											<a href="https://twitter.com/###" target="_blank" class="social-link twitter"><i class="icon-twitter"></i></a>
											<a href="https://www.pinterest.com/###" target="_blank" class="social-link pinterest"><i class="icon-pinterest"></i></a>
											<a href="https://www.instagram.com/###" target="_blank" class="social-link instagram"><i class="icon-instagram"></i></a>
									</div>
			</div>
		</div>
			</div>
</footer><!-- #colophon -->


	<!-- end container -->

	<div id="post_content"></div>

	<style>
		#loading{font-size:100px; text-align: center; z-index:999;}
	</style>

	<div class="hidden">
		<input type="hidden" id="scroll-position">
		<input type="hidden" id="back-enable" value="0">
		<input type="hidden" id="back-url">
		<input type="hidden" id="forward-url">
		<input type="hidden" id="home-title">
		<input type="hidden" id="article-title">

	</div>


<script>
	var $ = jQuery;
	$(function(){
		"use strict";

		var container = document.querySelector('.post-grid');

		//$(document).on('click','.post-grid .grid-item a', function(){
		/*container.addEventListener('click', function(e){
			//$('body').css('visibility', 'hidden');
			var target_url = $(this).attr('href');

			var scrollposition = $(document).scrollTop();
			var url      = window.location.href;
			$('#scroll-position').val(scrollposition);
			$('#back-url').val(url);

			history.pushState(target_url, null, target_url);


			$(document).scrollTop(0)

			//ajax load page...
			loadArticle(target_url);

			return false;
		}, false);*/

		container.addEventListener('click', function(e){
		    if(e.target != e.currentTarget){
		      e.preventDefault();

		    	var target_url = $(this).attr('href');
				var scrollposition = $(document).scrollTop();
				$('#scroll-position').val(scrollposition);


				var data = e.target.getAttribute('data-name'),
        		url = e.target.getAttribute('data-target');


        		//current title
        		$('#home-title').val(document.title);

        		console.log(document.title);

        		//article title
        		var articleTitle = e.target.getAttribute('data-title')+ ' | A Cup of Jo'
        		$('#article-title').val(articleTitle);



        		loadArticle(url);
        		document.title = articleTitle;

        		history.pushState(data, null, url);
        		//document.title = articleTitle;

		    }
		    e.stopPropagation();
		  }, false);


		window.addEventListener('popstate', function(e){

		  	var character = e.state;

		    if (character == null) {

		      document.title = 'Default title';
		      backCategory();

		      document.title = $('#home-title').val();

		    } else {

		      forwardArticle();
		      document.title = $('#article-title').val();

		    }
		});

		function backCategory(){
			$('#main #temp-container').fadeOut('slow', function() {

		      	$('#main #save-grid').fadeIn('fast', function() {
		      		$(document).scrollTop($('#scroll-position').val());
		      	});


		    });
		}

		function forwardArticle(){

			$('#main #save-grid').fadeOut('slow', function() {
		      	$('#main #temp-container').fadeIn('fast');
		    });
		    $(document).scrollTop(0);
		}

		function loadArticle(target_url){
			$.ajax({
			    url: target_url,
			    beforeSend: function(){
				    $('#main #save-grid').fadeOut('slow', function(){
				    	$('#main #secondary').hide();
				    	$('#main .ad-area').hide();
						$('#loading').fadeIn('slow');
					});
				},
			    success:function(data) {

			    	//$('#post_content').html(data);
			    	$('#main #temp-container').html($(data).find('#primary').html());
			    	//$('#main #secondary').html();

			    	$('#loading').fadeOut('slow', function(){
				    	$('#main #temp-container').show();
				    	$('#main #secondary').show();
				    	$('#main .ad-area').show();
				    	//$('#main #secondary').html();
				    	//$('#main #secondary', $.parseHTML(data))
			    	});

			    	var url      = window.location.href;
					$('#forward-url').val(url);

					$(document).scrollTop(0);

			    },
			});
		}
	});
</script>


<script>
<!--
searchDisplay();
utility();
mailChimp();
//-->
</script>

<script type="text/javascript">
/* <![CDATA[ */
var infinite_scroll = "{\"loading\":{\"msgText\":\"<img src=\\\"https:\\\/\\\/cupofjo.com\\\/wp-content\\\/uploads\\\/2015\\\/05\\\/loading.gif\\\" alt=\\\"\\\" width=\\\"220\\\" height=\\\"19\\\" class=\\\"alignleft size-full wp-image-46025\\\" \\\/><em>Loading...<\\\/em>\",\"finishedMsg\":\"\",\"img\":\"https:\\\/\\\/cupofjo.com\\\/wp-content\\\/uploads\\\/2015\\\/05\\\/loading.gif\"},\"nextSelector\":\"#nav-below a\",\"navSelector\":\"#nav-below\",\"itemSelector\":\"article.post,.grid-item\",\"contentSelector\":\".category #content\",\"debug\":false,\"behavior\":\"\",\"callback\":\"jQuery(document).ready(function($){\\r\\n$('#infscr-loading').remove();\\r\\n$('.grid-item-placeholder').insertAfter('.grid-item:last-of-type');\\r\\n$('.post-grid').css('text-align','justify');\\r\\n});\"}";
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jquery.infinitescroll.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/devicepx-jetpack.js.download'; ?>"></script>
<script type="text/javascript">
/* <![CDATA[ */
var jpibfi_options = {"hover":{"siteTitle":"A Cup of Jo","image_selector":".jpibfi_container img","disabled_classes":"nopin;wp-smiley","enabled_classes":"","min_image_height":0,"min_image_height_small":0,"min_image_width":0,"min_image_width_small":0,"show_on":"[front],[single],[category],[archive],[search],[home]","disable_on":",144241,144126,144245,144248,144250,144251,144254,144256,144270,144274,144283,144288,144294,144295,144297,144298,144299,144300,144307,144309,144320,157736,157658,157738,157747,157749,157751,157753,157756,157777,157778,157779,157780,157781,157783,157788,157789,157790,157791,157792,157795,157796,157798,157799,157801,157815,157816,157817,157822,157824,157827,157829,157831,157834,157836,157841,157844,157846,157847,157848,157851,157852,157863,157864,157873,157883,157893,157895,157905,157919,157923,157928,157929,157935,157938,157944,157946,157962,157965,157966","show_button":"hover","button_margin_bottom":25,"button_margin_top":25,"button_margin_left":25,"button_margin_right":25,"button_position":"3","description_option":["img_title","img_alt","post_title"],"pinLinkedImages":true,"transparency_value":0,"pin_image":"custom","pin_image_button":"square","pin_image_icon":"circle","pin_image_size":"normal","custom_image_url":"https:\/\/cupofjo.com\/wp-content\/uploads\/2015\/02\/pin-it-button.png","use_post_url":"1","retina_friendly":"0","pinImageWidth":75,"pinImageHeight":25,"scroll_selector":""}};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/jpibfi.client.js.download'; ?>"></script>
<script type="text/javascript">
/* <![CDATA[ */
var pollsL10n = {"ajax_url":"https:\/\/cupofjo.com\/wp-admin\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"1","show_fading":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/polls-js.js.download'; ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/wp-embed.min.js.download'; ?>"></script>
<script type="text/javascript">
// Because the `wp_localize_script` method makes everything a string
infinite_scroll = jQuery.parseJSON(infinite_scroll);

jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll, function(newElements, data, url) { eval(infinite_scroll.callback); });
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets-blog/e-201827.js.download'; ?>" async="async" defer="defer"></script>
<script type="text/javascript">
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:6.1',blog:'90732908',post:'0',tz:'-4',srv:'cupofjo.com'} ]);
	_stq.push([ 'clickTrackerInit', '90732908', '0' ]);
</script>

<img src="<?php echo get_template_directory_uri() . '/assets-blog/g.gif'; ?>" alt=":)" width="6" height="5" id="wpstats"></body></html>