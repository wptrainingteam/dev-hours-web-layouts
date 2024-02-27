<?php
/**
 * Title: Sidebar With Query
 * Slug: dev-hours-web-layouts/sidebar-with-query
 * Categories: themeslug-dev-hours
 * Viewport width: 1024
 */
?>

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"blockGap":{"top":"4rem","left":"2rem"}}}} -->
<div class="wp-block-columns alignfull" style="padding-right:2rem;padding-left:2rem">

	<!-- wp:column {"width":"100%","layout":{"type":"default"}} -->
	<div class="wp-block-column" style="flex-basis:100%">

		<!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full"} -->
		<div class="wp-block-query alignfull">
			
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"default"}} -->

				<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
				<div class="wp-block-group alignfull">
					
					<!-- wp:post-featured-image {"aspectRatio":"16/9","height":"","align":"wide","style":{"border":{"radius":"0px"}}} /-->

					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-title {"style":{"typography":{"fontSize":"2rem"}}} /-->

						<!-- wp:post-excerpt {"moreText":"Continue reading →","showMoreOnNewLine":false,"excerptLength":24} /-->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->
				
			<!-- /wp:post-template -->

			<!-- wp:spacer {"height":"48px"} -->
			<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->

		</div>
		<!-- /wp:query -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"380px","style":{"spacing":{"padding":{"right":"2rem","left":"2rem","top":"2rem","bottom":"2rem"},"blockGap":"3rem"},"typography":{"fontSize":"1rem"},"color":{"background":"#cfcabe42"}}} -->
	<div class="wp-block-column has-background" style="background-color:#cfcabe42;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;font-size:1rem;flex-basis:380px">

		<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
			<h3 class="wp-block-heading" style="font-size:1.5rem"><em>Topics</em></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"backgroundColor":"accent-3","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-accent-3-color has-alpha-channel-opacity has-accent-3-background-color has-background is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:categories /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
			<h3 class="wp-block-heading" style="font-size:1.5rem"><em>About Me</em></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"backgroundColor":"accent-3","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-accent-3-color has-alpha-channel-opacity has-accent-3-background-color has-background is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:avatar {"size":84,"style":{"border":{"width":"4px"}},"borderColor":"accent-3"} /-->

			<!-- wp:paragraph -->
			<p>Aliquam dictum ante a est mollis convallis. Vivamus id risus eu nisl vestibulum... <a href="#">Read more →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
			<h3 class="wp-block-heading" style="font-size:1.5rem"><em>Find Me On</em></h3>
			<!-- /wp:heading -->

			<!-- wp:separator {"backgroundColor":"accent-3","className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-accent-3-color has-alpha-channel-opacity has-accent-3-background-color has-background is-style-wide"/>
			<!-- /wp:separator -->

			<!-- wp:social-links {"size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-normal-icon-size is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"wordpress"} /-->
				<!-- wp:social-link {"url":"#","service":"github"} /-->
				<!-- wp:social-link {"url":"#","service":"twitch"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
