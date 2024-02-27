<?php
/**
 * Title: Scrolling Reel Images
 * Slug: dev-hours-web-layouts/scrolling-reel-images
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>
<!-- wp:group {"lock":{"move":false,"remove":false},"align":"wide","style":{"dimensions":{"minHeight":""},"border":{"width":"8px"},"spacing":{"blockGap":"0px"}},"borderColor":"contrast","className":"is-style-reel","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"left"}} -->
<div class="wp-block-group alignwide is-style-reel has-border-color has-contrast-border-color" style="border-width:8px">

	<?php foreach (range(1, 7) as $image) : ?>

		<!-- wp:image {"id":428,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"33.33%"}}} -->
		<figure class="wp-block-image size-large"><img src="<?= esc_url(get_theme_file_uri('assets/images/mountain-road.jpg')) ?>" alt="" class="wp-image-428" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->

	<?php endforeach ?>

</div>
<!-- /wp:group -->