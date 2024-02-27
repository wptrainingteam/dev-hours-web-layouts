<?php
/**
 * Title: Hover Reveal Image
 * Slug: dev-hours-web-layouts/hover-reveal-image
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}},"heading":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"},"blockGap":"4rem"},"color":{"background":"#cfcabe7d"}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-contrast-color has-text-color has-background has-link-color" style="background-color:#cfcabe7d;padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:group {"tagName":"header","layout":{"type":"constrained"}} -->
	<header class="wp-block-group">
		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center">Placeholder Text</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pharetra non diam sed maximus. Vivamus scelerisque nibh eget risus semper.</p>
		<!-- /wp:paragraph -->
	</header>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns alignwide">

		<?php foreach(range(1,3) as $column) : ?>
	
			<!-- wp:column -->
			<div class="wp-block-column">
	
				<!-- wp:cover {"url":"<?= esc_url(get_theme_file_uri('assets/images/mountain-road.jpg')) ?>","id":5098,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":50,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","className":"is-style-reveal-image","layout":{"type":"constrained"}} -->
				<div class="wp-block-cover is-style-reveal-image has-base-2-color has-text-color has-link-color" style="min-height:50px">
					<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span>
					<img class="wp-block-cover__image-background wp-image-5098" alt="" src="<?= esc_url(get_theme_file_uri('assets/images/mountain-road.jpg')) ?>" data-object-fit="cover"/>
					
					<div class="wp-block-cover__inner-container">
						
						<!-- wp:group {"style":{"dimensions":{"minHeight":"70vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
						<div class="wp-block-group" style="min-height:70vh">

							<!-- wp:buttons -->
							<div class="wp-block-buttons">
								<!-- wp:button {"backgroundColor":"accent-3","textColor":"base-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} -->
								<div class="wp-block-button"><a class="wp-block-button__link has-base-2-color has-accent-3-background-color has-text-color has-background has-link-color wp-element-button">Button</a></div>
								<!-- /wp:button -->
								</div>
							<!-- /wp:buttons -->

							<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
							<h3 class="wp-block-heading has-base-2-color has-text-color has-link-color"><a href="#">Some placeholder text</a></h3>
							<!-- /wp:heading -->

						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->

			</div>
			<!-- /wp:column -->

		<?php endforeach ?>

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
