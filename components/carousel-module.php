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
		<a href=""><!-- where do these link to? -->
			<?php the_post_thumbnail( 'full', array( 'class' => 'featured-image' ) ); ?>
		</a>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>