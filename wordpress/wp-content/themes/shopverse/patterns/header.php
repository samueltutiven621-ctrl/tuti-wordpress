<?php
/**
 * Title: Header
 * Slug: shopverse/header
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"position":{"type":"sticky","top":"0px"},"color":{"background":"#f5f5f5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f5f5f5;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"16px","bottom":"16px","left":"0","right":"0"}}},"backgroundColor":"button-hover-color","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-button-hover-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-right:0;padding-bottom:16px;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":4819,"width":"22px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone.png" alt="" class="wp-image-4819" style="width:22px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"medium-small"} -->
<p class="has-medium-small-font-size"><?php echo esc_html__( '+1 (555) 67 8524', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":4820,"width":"22px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mail.png" alt="" class="wp-image-4820" style="width:22px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"medium-small"} -->
<p class="has-medium-small-font-size"><?php echo esc_html__( 'example@example.com', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"medium-small"} -->
<p class="has-medium-small-font-size"><?php echo esc_html__( 'Track Order  |  Help', 'shopverse' ); ?> &amp; <?php echo esc_html__( 'FAQs', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:navigation {"ref":10,"metadata":{"ignoredHookedBlocks":["woocommerce/mini-cart"]},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"48px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"18px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"style":{"border":{"width":"0px","style":"none"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}}},"namespace":"woocommerce/product-search"} /-->


<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0px">
  
<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/wish-list-item {"block_id":"wc-booster-wishlist-item-block-instance-0-a5d1ed12-dee9-45cb-9a62-05484928c480","color":"#000","iconSize":{"activeUnit":"px","range":{"min":1,"max":2000},"values":{"desktop":27,"tablet":15,"mobile":15},"units":["px","em"]}} /-->

<?php } ?>

</div>
<!-- /wp:group -->

<?php if (class_exists('WooCommerce')) { ?>

<!-- wp:woocommerce/mini-cart {"priceColor":{"slug":"contrast","color":"#111","name":"Contrast","class":"has-contrast-price-color"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<?php } ?>

</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->