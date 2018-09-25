<?php
/**
 * Filename: header-navbar.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

?>

<nav class="navbar navbar-default" role="navigation">
	<div class="nav-stripe"></div>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="sr-only">toggle navigation menu</span>
			</button>
			<a href="<?php echo home_url(); ?>" class="navbar-brand">
				<img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>img/logo.svg"
				     alt="<?php echo bloginfo( 'name' ); ?>" title="<?php echo bloginfo( 'name' ); ?>">
				<?php
				if ( get_bloginfo( 'description' ) !== '' ) {
					echo '<small class="sr-only">' . get_bloginfo( 'description' ) . '</small>';
				}
				?>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<?php
				$args = array(
					'theme_location'  => 'main-nav',
					'menu'            => 'main-nav',
					'container'       => false,
					'menu_class'      => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'depth'           => 0,
					'items_wrap'      => '%3$s'
				);

				wp_nav_menu( $args );
				?>
				<li class="visible-xs">
					<form action="<?php echo home_url( '/' ); ?>" class="navbar-form" role="search" method="get" id="searchform">
						<div class="form-group">
							<input name="s" id="s" type="text" class="search-query form-control" autocomplete="on" placeholder="<?php _e('Search',''); ?>">
						</div>
					</form>
				</li>
				<li class="hidden-xs">
					<a href="#" title="Search" class="dropdown-toggle" data-toggle="dropdown"
					   role="button" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<form class="navbar-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="on" placeholder="<?php _e('Search',''); ?>">
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
