<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ashfaqueabir
 */

?>
<footer id="colophon" role="contentinfo">
	<div class="inner">
		<div class="footer-about">
			<strong>About Ashfaque Abir</strong>
<p style="text-align: left;">লিখালিখি টা হয়তবা বালখিল্যতা বা অতি আবেগ,তবে লিখাটা আমি শুধু মনের তাগিদেই লিখি।</p>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><em>read more</em></a>
		</div>
		<div class="footer-navigation">
			<div class="menu-footer-container">
			
<?php 
wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'container' => 'ul',
	'menu_id'=> 'menu-footer',
    'menu_class'=> 'menu'
 ) );
 ?>	
			


			</div>			
<div class="footer-social">
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
var pollsL10n = {"ajax_url":"http:\/\/ashfaqueabir.com\/wp-admin\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"1","show_fading":"1"};
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
	_stq.push([ 'view', {v:'ext',j:'1:6.1',blog:'90732908',post:'0',tz:'-4',srv:'ashfaqueabir.com'} ]);
	_stq.push([ 'clickTrackerInit', '90732908', '0' ]);
</script>

<img src="<?php echo get_template_directory_uri() . '/assets-blog/g.gif'; ?>" alt=":)" width="6" height="5" id="wpstats"></body></html>