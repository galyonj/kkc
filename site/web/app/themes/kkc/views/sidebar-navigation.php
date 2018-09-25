<?php
/**
 * Partial to output navigation sidebar content
 * Author     : John Galyon
 * Author URI : https://www.covenanthealth.com
 * Created    : February, 6, 2018
 * @version 2.0.0
 * @package WordPress
 * @subpackage covnet
 */ ?>

<aside class="col-xs-12 col-md-4 pull-right sidebar-nav" role="complementary">
	<?php if( get_field( 'contact' ) ) : ?>
		<div class="well">
			<?php the_field( 'contact' ); ?>
		</div>
	<?php endif; ?>

	<section class="sidebar-navigation">
		<h2>
			<?php

			// Fill in the headline/call to action for the navigation sidebar
			if ( get_field( 'headline') )  {
				// Custom headline data gets pushed into a h2 tag set
				the_field( 'headline' );
			}?>
		</h2>

		<ul class="nav sidenav-menu">

			<?php

			if( get_field( 'content_select' ) == 'children' ) {

				$args = array (
					'child_of'     => $post->ID,
					'hierarchical' => 0,
					'offset'       => 0,
					'parent'       => $post->ID,
					'post_type'    => 'page',
					'post_status'  => 'publish',
					'sort_column'  => 'post_title',
					'sort_order'   => 'asc'
				);

				$children = get_pages( $args );

				foreach ( $children as $child ) {
					$excerpt  = get_the_excerpt( $child->ID );
					$link     = get_the_permalink( $child->ID );
					$title    = get_the_title( $child->ID );

					echo '<li><a href="' . $link . '" title="Link to ' . $title . '">' . $title . '</a></li>';
				}

			} elseif( get_field( 'content_select' ) == 'siblings' ) {

				$args = array (
					'child_of'     => $post->ID,
					'hierarchical' => 0,
					'offset'       => 0,
					'parent'       => $post->ID,
					'post_type'    => 'page',
					'post_status'  => 'publish',
					'sort_column'  => 'post_title',
					'sort_order'   => 'asc'
				);

				$siblings = get_pages( $args );

				foreach ( $siblings as $sibling ) {
					$excerpt  = get_the_excerpt( $sibling->ID );
					$link     = get_the_permalink( $sibling->ID );
					$title    = get_the_title( $sibling->ID );

					echo '<li><a href="' . $link . '" title="Link to ' . $title . '">' . $title . '</a></li>';
				}

			} else {

				if( have_rows( 'custom_nav' ) ) {

					while( have_rows( 'custom_nav' ) ) {

						the_row();

						// variables to make for less typing
						$link = get_sub_field( 'link' );

						echo '<li><a href="' . $link['url'] . '" title="' . $link['title'] . '" rel="bookmark">' . $link['title'] . '</a></li>';

					}

				}

			}

			?>

		</ul>
	</section>
</aside>