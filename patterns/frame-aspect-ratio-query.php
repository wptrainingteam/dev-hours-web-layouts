<?php
/**
 * Title: Frame (Aspect Ratio) Query
 * Slug: dev-hours-web-layouts/frame-aspect-ratio-query
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignfull">

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->

			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"4/3"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover">
				<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"1.5rem"}}} /-->
				</div>
			</div>
			<!-- /wp:cover -->

		<!-- /wp:post-template -->

	</div>
	<!-- /wp:group -->

	<!-- wp:query-pagination {"align":"center"} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
