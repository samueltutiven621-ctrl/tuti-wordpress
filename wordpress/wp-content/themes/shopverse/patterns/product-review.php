<?php
/**
 * Title: Product Review
 * Slug: shopverse/product-review
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"jost"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Reviews', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:48px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'What Our Customer Says', 'shopverse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>


<!-- wp:wc-booster/product-review {"block_id":"wc-booster-product-review-block-block-6d2a759e-b976-4ba0-ab06-ad8fd713c01e","layout":"two","product_id":"[{\u0022id\u0022:\u0022753\u0022,\u0022review_id\u0022:\u00221\u0022},{\u0022id\u0022:\u0022759\u0022,\u0022review_id\u0022:\u00221\u0022},{\u0022id\u0022:\u0022758\u0022,\u0022review_id\u0022:\u00221\u0022},{\u0022id\u0022:\u0022146\u0022,\u0022review_id\u0022:\u00221\u0022}]","titleTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":18,"tablet":18,"mobile":18}},"fontWeight":500,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"authorTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":400,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"dateTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":400,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"commentTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":16,"mobile":16}},"fontWeight":400,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28},"range":{"min":0,"max":100}}},"ratingTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":16,"mobile":16}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"titleColor":"#000","authorColor":"#000","dateColor":"#000","commentColor":"#000","ratingColor":"#ff9529","bgColor":"","arrowRightBgColor":"#ff4747","arrowLeftBgColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":2,"tablet":2,"mobile":1},"units":[""]},"ratingPosition":"bottom","itemBoxRadius":0,"arrowRadius":50,"arrowWidth":35,"imageRadius":0,"imageSize":{"activeUnit":"px","range":{"min":1,"max":300},"values":{"desktop":300,"tablet":160,"mobile":200},"units":["px"]},"autoplay":true,"pauseOnHover":true,"enableArrow":false,"enableDots":true,"dotColor":"#ff4747","titleMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,5,0],"tablet":[5,0,5,0],"mobile":[5,0,5,0]}},"itemMargin":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,0,0],"tablet":[5,5,5,5],"mobile":[5,5,5,5]}},"contentPadding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,30,60,30],"tablet":[25,25,25,25],"mobile":[25,25,25,25]}},"arrowPosition":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","right"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[-49,10,60],"tablet":[-35,10,60],"mobile":[-35,10,60]}},"excerptLength":11} /-->


<?php } ?>

</div>
<!-- /wp:group -->