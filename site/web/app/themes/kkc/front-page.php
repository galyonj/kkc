<?php
/**
 * Filename: front-page.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

get_header();
if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<div class="container">
		<?php get_template_part( 'views/content', 'masthead' ); ?>
		<?php get_template_part( 'views/content', 'notification' ); ?>

		<main id="<?php the_ID(); ?>" <?php body_class(); ?>>
			<?php get_template_part( 'views/content', 'article' ); ?>
		</main>
	</div>

<?php endwhile; endif;
get_footer(); ?>
