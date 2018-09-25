<?php
/**
 * Filename: content-article.php
 * Author: jgalyon
 * Created: 2018/09/21
 * Description:
 **/

?>

<article class="row">
	<?php if(!is_front_page()) : ?>
		<div class="col-sm-12 col-md-9">
			<?php the_content(); ?>
		</div>
	<?php else: ?>
		<div class="col-xs-12">
			<?php the_content(); ?>
		</div>
	<?php endif; ?>
</article>
