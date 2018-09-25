<?php
/**
 * Filename: page-services.php
 * Author: jgalyon
 * Created: 2018/09/24
 * Description:
 * Template for display of the services page at knoxvillekidneycenter.com, which requires some special handling
 **/

get_header();
if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<main class="container">
		<?php get_template_part( 'views/content', 'header' ); ?>
		<div class="row content-row">
			<article id="<?php the_ID(); ?>" <?php body_class( 'col-xs-12' ); ?>>
				<?php the_content(); ?>
				<hr>
				<?php
				$page    = get_page_by_path( 'services' );
				$page_id = $page -> ID;
				$args    = array(
					'child_of' => $page_id,
					'parent'   => $page_id
				);

				$children = get_pages( $args ); ?>

				<ul class="full-width three-column services-children">
					<?php foreach ( $children as $child ) : ?>
						<li class="inset">
							<h2><a href="<?php echo esc_url( get_page_link( $child -> ID ) ); ?>" title="<?php echo $child -> post_title; ?>"><?php
									echo $child -> post_title; ?></a></h2>
							<p><?php echo $child -> post_excerpt; ?></p>
							<p>
								<a class="btn btn-primary btn-block" href="<?php echo esc_url( get_page_link( $child -> ID ) ); ?>" title="<?php echo $child -> post_title; ?>">Read More</a>
							</p>
						</li>
					<?php endforeach; ?>
				</ul>
			</article>
		</div>
	</main>

<?php endwhile; endif;
get_footer(); ?>
