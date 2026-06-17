<?php
/**
 * Title: Featured Products
 * Slug: shopverse/featured-products
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"metadata":{"ignoredHookedBlocks":["wc-booster/wish-list-button","wc-booster/quick-view"]},"align":"wide","style":{"spacing":{"padding":{"top":"100px","bottom":"50px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"jost","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-jost-font-family" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:20px;padding-bottom:50px;padding-left:20px;font-size:14px;font-style:normal;font-weight:400"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"jost"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Products', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:48px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Featured Products', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Mi sem faucibus eleifend himenaeos pharetra eu aptent fermentum aenean pulvinar est in morbi mus si fusce arcu tempus luctus potenti taciti porta laoreet', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":2,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"16rem"}} -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/product-companion {"block_id":"wc-booster-product-companion-block-46256b19-8f8b-4942-a8f2-1ba20b7e25cc","positionTop":{"activeUnit":"px","range":{"min":-100,"max":500},"values":{"desktop":10,"tablet":10,"mobile":10},"units":["%","px","em"]},"layoutColumnPadding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[8,8,8,8],"tablet":[8,8,8,8],"mobile":[8,8,8,8]}}} -->
<!-- wp:wc-booster/wish-list-button /-->

<!-- wp:wc-booster/quick-view /-->
<!-- /wp:wc-booster/product-companion -->

<?php } ?>

<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"height":"300px","metadata":{"ignoredHookedBlocks":["wc-booster/wish-list-button","wc-booster/quick-view"]},"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"var:preset|spacing|40"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0px","fontSize":"18px"},"color":{"text":"#343532"}},"fontFamily":"jost","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:group {"className":"product-content","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontFamily":"jost","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->