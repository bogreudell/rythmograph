<?php

$post_object = get_sub_field('post_object');

if( $post_object ):

	$post = $post_object;
	setup_postdata( $post );
	$title = $post->post_title;
	$subtitle = get_field( 'subtitle' );
	$excerpt = $post->post_excerpt;

	?>
	<div class="post-module" id="<?php echo get_post_type() . "-" . $post->ID; ?>">
		<aside>
			<?php the_post_thumbnail( 'full', array( 'class' => 'featured-image' ) ); ?>
		</aside>
		<aside class="text">
			<h1><?php echo $title; ?></h1>
			<?php if ( $subtitle ): ?><h2><?php echo $subtitle; ?></h2><?php endif; ?>
			<p><?php echo $excerpt; ?></p>
			<!-- how does "inquire about work? -->
		</aside>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>