<?php
/**
 * Filename: single.php
 * Author: jgalyon
 * Created: 2018/09/19
 * Description:
 **/
get_header();

// LOOOOOOOOP
if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<main class="container">
		<?php get_template_part( 'views/content', 'header' ); ?>

		<div class="row">
			<article id="<?php the_ID(); ?>" <?php body_class( 'col-md-8' ); ?>>
				<?php the_content(); ?>

				<?php if( has_tag() ) : ?>
					<div class="tags">
						<?php the_tags( '<h2>Tags for this post</h2> ', ', ', '<br />' ); ?>
					</div>
				<?php endif; ?>

			</article>
			<?php get_sidebar(); ?>
		</div>
	</main>

<?php endwhile; else : ?>

<?php endif; get_footer(); ?>
