<?php
/**
 * Title: Row Outline
 * Slug: dev-hours-web-layouts/row-outline
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"width":"8px"}},"borderColor":"contrast","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:8px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

	<?php foreach(range('A', 'D') as $group) : ?>

		<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"dimensions":{"minHeight":""},"border":{"width":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"1rem","right":"1rem"}}},"borderColor":"contrast","layout":{"type":"default"}} -->
		<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:8px;padding-top:var(--wp--preset--spacing--10);padding-right:1rem;padding-bottom:var(--wp--preset--spacing--10);padding-left:1rem">

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?= esc_html($group) ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

	<?php endforeach ?>

</div>
<!-- /wp:group -->