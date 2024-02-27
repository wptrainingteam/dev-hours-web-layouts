<?php
/**
 * Title: Scrolling Reel Outline
 * Slug: dev-hours-web-layouts/scrolling-reel-outline
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>
<!-- wp:group {"lock":{"move":false,"remove":false},"align":"wide","style":{"dimensions":{"minHeight":""},"border":{"width":"8px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"borderColor":"contrast","className":"is-style-reel","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"left"}} -->
<div class="wp-block-group alignwide is-style-reel has-border-color has-contrast-border-color" style="border-width:8px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

	<?php foreach(range('A', 'F') as $group) : ?>

		<!-- wp:group {"style":{"border":{"width":"8px"},"dimensions":{"minHeight":"50vh"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"layout":{"selfStretch":"fixed","flexSize":"320px"}},"borderColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
		<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:8px;min-height:50vh;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?= esc_html(sprintf(__('Item %s', 'themeslug'), $group)) ?></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

	<?php endforeach ?>

</div>
<!-- /wp:group -->