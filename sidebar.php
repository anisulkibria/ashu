<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ashfaqueabir
 */
?>

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
									<a href="#" target="_blank" class="social-link facebook"><i class="icon-facebook"></i></a>
									<a href="#" target="_blank" class="social-link twitter"><i class="icon-twitter"></i></a>
									<a href="#" target="_blank" class="social-link pinterest"><i class="icon-pinterest"></i></a>
									<a href="#" target="_blank" class="social-link instagram"><i class="icon-instagram"></i></a>
							</div>
							<a href="<?php echo esc_url( home_url( '/যোগাযোগ/' ) ); ?>" class="contact-page-link"><em>যোগাযোগ</em></a>
							
							
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</ul>
<?php endif; ?>
					
		</aside>


			    		<!-- top level cat -->    				
    		    
		    

</div><!-- #secondary .widget-area -->		
