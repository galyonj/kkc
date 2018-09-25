<?php
/**
 * Filename: page.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

get_header();
if ( have_posts() ) : while( have_posts() ) : the_post();

$select = get_field( 'content_select' ); ?>

	<main class="container">
		<?php get_template_part( 'views/content', 'header' ); ?>
		<div class="row content-row">
			<?php if( $select !== 'none' && $select !== 'content' ) get_template_part( 'views/sidebar', 'navigation' ); ?>

			<article id="<?php the_ID(); ?>" <?php body_class( 'col-xs-12 col-md-8' ); ?>>
				<?php the_content(); ?>
			</article>

			<?php if( $select === 'content' ) get_template_part( 'views/sidebar', 'content' ); ?>
		</div>
	</main>

<?php endwhile; endif;
get_footer(); ?>
