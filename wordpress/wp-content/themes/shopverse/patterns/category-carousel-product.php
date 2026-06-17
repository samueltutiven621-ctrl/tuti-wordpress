<?php
/**
 * Title: Category Carousel Product
 * Slug: shopverse/category-carousel-product
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"category-carousel-product","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group category-carousel-product" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-x-small-font-size" style="font-style:normal;font-weight:400"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:48px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Top Months Sales', 'shopverse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

  <!-- wp:group {"className":"trendy-wear-carousel-category","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group trendy-wear-carousel-category" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:wc-booster-pro/carousel-category-product {"block_id":"wc-booster-pro-carousel-product-category-block-f23447e6-6b15-4d68-8b4c-b30c9943db96","cat_id":"[{\u0022id\u0022:\u0022\u0022,\u0022name\u0022:\u0022All\u0022},{\u0022id\u0022:\u0022\u0022},{\u0022id\u0022:\u0022\u0022}]","alignment":"left","titleTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":18,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"categoryTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":18,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"priceTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[30,0,0,0],"tablet":[10,0,10,0],"mobile":[10,0,10,0]}},"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":350,"tablet":300,"mobile":300},"units":["px"]},"enableQuickView":true,"enableWishList":true,"categoryTextColor":"#000","categoryTextHoverColor":"#ff4747","categoryBgColor":"transparent","categoryHoverColor":"#ffffff","arrowRightBgColor":"#ff4747","arrowRightColor":"#ffffff","arrowLeftBgColor":"#ff4747","arrowLeftColor":"#ffffff","arrowRadius":50,"slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":4,"tablet":3,"mobile":1},"units":[""]},"categoryPadding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,15,60,15],"tablet":[8,30,8,0],"mobile":[8,30,8,0]}},"ratingTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":12,"tablet":12,"mobile":12}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"arrowPosition":{"activeUnit":"%","range":{"min":-100,"max":2000},"values":{"desktop":40,"tablet":40,"mobile":40},"units":["%","px","em"]},"prevArrowPosition":"left","arrowPrevPosition":{"activeUnit":"px","range":{"min":0,"max":2000},"values":{"desktop":0,"tablet":0,"mobile":0},"units":["%","px","em"]},"arrowNextPosition":{"activeUnit":"px","range":{"min":0,"max":2000},"values":{"desktop":0,"tablet":0,"mobile":0},"units":["%","px","em"]}} -->
<!-- wp:wc-booster/quick-view {"top":{"activeUnit":"px","range":{"min":1,"max":500},"values":{"desktop":8,"tablet":8,"mobile":8},"units":["px","em"]}} /-->

<!-- wp:wc-booster/wish-list-button {"iconSize":{"activeUnit":"px","range":{"min":1,"max":2000},"values":{"desktop":22,"tablet":20,"mobile":20},"units":["px","em"]},"selectedIconColor":"#ff4500"} /-->
<!-- /wp:wc-booster-pro/carousel-category-product --></div>
<!-- /wp:group -->

<?php } elseif (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:group {"className":"trendy-wear-carousel-category","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small","layout":{"type":"default"}} -->
<div class="wp-block-group trendy-wear-carousel-category has-x-small-font-size" style="font-style:normal;font-weight:400"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"style":{"color":{"text":"#ff4747"},"elements":{"link":{"color":{"text":"#ff4747"}}}}} -->
<p class="has-text-color has-link-color" style="color:#ff4747"><a href="#"><?php echo esc_html__( 'Best Sales', 'shopverse' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Top Sales', 'shopverse' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo esc_html__( 'Trendy Wear', 'shopverse' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":12,"query":{"perPage":4,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"19rem"}} -->
<!-- wp:post-featured-image {"height":"380px"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"x-small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"5px"}}},"fontSize":"medium"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php echo esc_html__( 'No Product Found', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<?php } ?>

</div>
<!-- /wp:group -->