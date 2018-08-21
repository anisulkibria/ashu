<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ashfaqueabir
 */

?>



<div class="grid-item jpibfi_container">
	<a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark" title="This Salad Is a Flavor Explosion" data-target="<?php echo esc_url( get_permalink() );?>" data-name="grilled-radicchio-salad">
		<input class="jpibfi" type="hidden"><img width="363" height="245" src="<?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $thumb_url; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" data-target="<?php echo esc_url( get_permalink() );?>" data-name="grilled-radicchio-salad" data-title="This Salad Is a Flavor Explosion" data-jpibfi-post-excerpt="" data-jpibfi-post-url="<?php echo esc_url( get_permalink() );?>" data-jpibfi-post-title="This Salad Is a Flavor Explosion" data-jpibfi-src="<?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); echo $thumb_url; ?>" data-jpibfi-indexer="5">	</a>
	<div class="caption"">
		<a href="<?php echo esc_url( get_permalink() );?>" rel="bookmark" title="A Secret Ingredient for Killer Guacamole"><h4 data-title="<?php the_title(); ?>" data-target="<?php echo esc_url( get_permalink() );?>" data-name="easy-pea-guacamole"><?php the_title(); ?></h4></a>
		<div class="excerpt"><p><?php the_excerpt(); ?></p></div>
		<div class="secondary-caption">
			<span class="entry-date">May 2, 2018</span>
			<div class="mini-comments-link">
				<a href="<?php echo esc_url( get_permalink() );?>#comments"><img src="<?php echo get_template_directory_uri() . '/assets-blog/comment-small.png'; ?>"> </a>
			</div>
		</div>
	</div>
</div>



