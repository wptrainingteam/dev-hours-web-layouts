<?php
/**
 * Title: Grid Cards (Gutenberg Plugin)
 * Slug: dev-hours-web-layouts/grid-cards
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"20rem"}} -->
<div class="wp-block-group alignwide">

	<?php foreach(range(1,6) as $card) : ?>
	
		<!-- wp:group {"style":{"border":{"width":"1px"},"dimensions":{"minHeight":""},"spacing":{"blockGap":"0px"}},"borderColor":"accent","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group has-border-color has-accent-border-color" style="border-width:1px">
		
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">

				<!-- wp:image {"id":3576,"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large">
					<img src="<?= esc_url(get_theme_file_uri('assets/images/mountain-road.jpg')) ?>" alt="" class="wp-image-3576" style="aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

					<!-- wp:paragraph -->
					<p><strong>Lorem ipsum dolor sit amet</strong></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>Consectetur adipiscing elit. Praesent pharetra non diam sed maximus. Vivamus scelerisque nibh eget risus semper, ac laoreet lorem lacinia.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"color":{"background":"#b5bdbc3d"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-background" style="background-color:#b5bdbc3d;padding-top:var(--wp--preset--spacing--10);padding-right:2rem;padding-bottom:var(--wp--preset--spacing--10);padding-left:2rem">
				<!-- wp:paragraph -->
				<p>Card footer content</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	<?php endforeach ?>

</div>
<!-- /wp:group -->