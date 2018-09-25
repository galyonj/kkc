<?php
/**
 * Filename: content-notification.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

if( get_field('notification_title') ) : ?>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="alert alert-warning notification-wrapper">
				<button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2><?php the_field('notification_title'); ?></h2>
				<?php the_field('notification_content'); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
