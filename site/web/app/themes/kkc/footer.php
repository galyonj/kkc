<?php
/**
 * Filename: footer.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

?>

</div>
</div>
<footer role="contentinfo">
	<div class="container">
		<div class="row info-row">
			<div class="col-xs-12 brand-col">
				<p>
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo trailingslashit( get_stylesheet_directory_uri() ) . 'img/logo.svg'; ?>"
						     alt="<?php echo get_bloginfo('name'); ?>"
						     title="<?php echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); ?>">
					</a>
				</p>
				<p>
					320 N. Park 40 Blvd., Knoxville TN 37923<br>
					Phone: (865) 692-3462&nbsp;|&nbsp;Fax: (865) 692-3463
				</p>
			</div>
			<div class="col-xs-12 nav-col">
				<ul>
					<?php
					$args = array(
						'container'       => false,
						'depth'           => 1,
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'menu'            => 'footer-nav',
						'menu_class'      => 'footer-nav',
						'items_wrap'      => '%3$s',
						'theme_location'  => 'footer-nav'
					);

					wp_nav_menu( $args );
					?>
				</ul>
			</div>
		</div>
	</div>
	<div class="container copyright-container">
		<div class="row copyright-row">
			<div class="col-xs-12 copyright-col">
				<p><a href="<?php echo site_url( '/wp-admin/' ); ?>">&copy;</a>&nbsp;<?php copyright('2010'); ?> <?php echo get_bloginfo('name'); ?>, PLLC. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

