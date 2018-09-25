<?php
/**
 * Partial to output generic sidebar content
 * Author     : John Galyon
 * Author URI : https://www.covenanthealth.com
 * Created    : February, 6, 2018
 * @version 2.0.0
 * @package WordPress
 * @subpackage covnet
 */ ?>

<aside class="col-xs-12 col-md-4 sidebar-content" role="complementary">
	<?php if( get_field( 'contact' ) ) : ?>
		<div class="well hidden-xs hidden-sm">
			<?php the_field( 'contact' ); ?>
		</div>
	<?php endif; ?>

	<div class="well">
		<?php the_field( 'content' ); ?>
	</div>
</aside>
