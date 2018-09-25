<?php
/**
 * Filename: content-masthead.php
 * Author: jgalyon
 * Created: 2018/09/20
 * Description:
 * Display the masthead for pages that require one
 **/

$image = get_field('landing_page_image');

if(!empty($image)) {
	$url = $image['url'];
}
?>

<div class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 50%), url(<?php echo $url; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if( is_front_page() ) : ?>
					<h1>Helping you keep<br>the life you love</h1>
				<?php else : ?>
					<?php the_title(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
