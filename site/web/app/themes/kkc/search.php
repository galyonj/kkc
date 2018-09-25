<?php
/**
 * Filename: search.php
 * Author: jgalyon
 * Created: 2018/09/19
 * Description:
 **/
get_header(); ?>

	<main class="container">
		<?php get_template_part( 'views/content', 'header' ); ?>
		<div class="row">
			<article id="<?php the_ID(); ?>" <?php body_class( 'col-md-8' ); ?>>

				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<h2><a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p class="small">Posted on <time datetime="<?php echo get_the_date( 'c'); ?>"><?php echo
							get_the_date(); ?></time></p>
					<?php the_excerpt(); ?>

				<?php endwhile; ?>

					<?php
					the_posts_pagination( array(
						'mid_size'  => 2,
						'prev_text' => __( '<i class="fa fa-caret-left" aria-hidden="true"></i>' , 'kkc' ),
						'next_text' => __( '<i class="fa fa-caret-right" aria-hidden="true"></i>', 'kkc' )
					) );
				endif; ?>

			</article>
		</div>
	</main>

<?php get_footer(); ?>