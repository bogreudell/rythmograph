<?php

if( have_rows('content_block') ):

	while( have_rows('content_block') ) : the_row();

		if( get_row_layout() == 'project_selector' ):

			if( is_front_page() ):

				get_template_part( 'components/carousel', 'module' );

			else:

				get_template_part( 'components/post', 'module' );

			endif;

		elseif( get_row_layout() == 'media_embed' ):

			get_template_part( 'components/media', 'embed' );

		elseif( get_row_layout() == 'team_member_selector' ):

			get_template_part( 'components/post', 'module' );

		else:

			echo 'An error occured';

		endif;

	endwhile;

endif;