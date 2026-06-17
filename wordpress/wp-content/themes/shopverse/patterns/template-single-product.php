<?php
/**
 * Title: Template Single Product
 * Slug: shopverse/template-single-product
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"24px","top":"20px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f5f5f5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#f5f5f5;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","className":"shop-breadcrumbs","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide shop-breadcrumbs"><!-- wp:woocommerce/breadcrumbs {"fontSize":"medium-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"60px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2px","left":"2px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:2px;padding-bottom:40px;padding-left:2px"><!-- wp:woocommerce/store-notices /-->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-gallery {"thumbnailsNumberOfThumbnails":5,"pagerDisplayMode":"off","productGalleryClientId":"5fa7bfb8-5e22-488c-880b-a147188d887c"} -->
<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery wc-block-product-gallery--has-next-previous-buttons-inside-image"><!-- wp:group {"metadata":{"name":"Gallery Area"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/product-gallery-thumbnails {"lock":{"move":true,"remove":true}} /-->

<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Large Image and Navigation"},"style":{"layout":{"selfStretch":"fixed","flexSize":"99.9%"},"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:woocommerce/product-gallery-large-image {"lock":{"move":true,"remove":true}} -->
<div class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks"><!-- wp:woocommerce/product-sale-badge {"isDescendentOfSingleProductTemplate":true,"lock":{"move":true},"align":"right","style":{"spacing":{"margin":{"top":"4px","right":"4px","bottom":"4px","left":"4px"}}}} /-->

<!-- wp:woocommerce/product-gallery-large-image-next-previous {"lock":{"move":true,"remove":true},"layout":{"type":"flex","verticalAlignment":"bottom"}} -->
<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/wish-list-button {"selectedIconColor":"transparent","position":{"activeUnit":"px","isLinkActive":false,"properties":["top","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[15,20],"tablet":[8,22],"mobile":[8,22]}}} /-->

<?php } ?>

</div>
<!-- /wp:woocommerce/product-gallery-large-image -->

<!-- wp:woocommerce/product-gallery-pager {"lock":{"move":true,"remove":true}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"16px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:16px"><!-- wp:post-title {"level":1,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1","fontSize":"40px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-meta -->
<div class="wp-block-woocommerce-product-meta"><!-- wp:woocommerce/product-sku {"isDescendentOfSingleProductTemplate":true} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:woocommerce/product-meta --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"style":{"spacing":{"margin":{"top":"0","bottom":"16px"}}}} /-->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/product-price {"block_id":"wc-booster-product-price-block-602f28d2-7933-4005-813e-c63d7a1b684b","textTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":30,"mobile":30},"range":{"min":0,"max":100}},"fontWeight":700,"lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":48.3,"tablet":28,"mobile":28},"range":{"min":0,"max":100}}},"margin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,16,0],"tablet":[0,0,0,0],"mobile":[0,0,0,0]}}} /-->

<?php } else { ?> 

<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}}} /-->

<?php } ?>

<!-- wp:post-excerpt {"style":{"typography":{"lineHeight":"1.5","fontSize":"15px"},"spacing":{"margin":{"bottom":"30px"}}},"__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/usp {"block_id":"wc-booster-usp-block-e52a7e3a-ba22-4efe-8276-2cc2cf574af8","textColor":"#000","iconColor":"#1d8516","textTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":15,"tablet":15,"mobile":15},"range":{"min":0,"max":100}},"fontWeight":"400","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.5,"tablet":1,"mobile":1},"range":{"min":0,"max":100}}},"textMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,0,2],"tablet":[0,0,0,5],"mobile":[0,0,0,5]}}} /-->

<?php } ?>

<!-- wp:woocommerce/add-to-cart-form /-->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:button {"width":100,"style":{"border":{"radius":"50px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="border-radius:50px">Buy with Gpay</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster-pro/product-categories {"block_id":"wc-booster-pro-product-categories-block-c0bc0e67-269b-4573-8699-29dc1fbd02f9","categoryPadding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[5,12,5,12],"tablet":[0,12,0,12],"mobile":[0,12,0,12]}},"iconMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":["",5,"",""],"tablet":["",10,"",""],"mobile":["",10,"",""]}},"iconColor":"#646464","textColor":"#646464"} /-->

<?php } ?>

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-classic","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} /--></div>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>


<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"50px","bottom":"50px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:var(--wp--preset--spacing--40);padding-bottom:50px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-01722a5a-1c12-4a84-b470-5179b0f6de1d","postsToShow":4,"categories":"56","heading":"Upto 80% discount on office furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#ff4747","arrowLeftBgColor":"#ff4747","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"pauseOnHover":true,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[13,0,0],"tablet":[20,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":300,"mobile":300},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-8d65062a-ec7b-49b1-b730-448f39fcee9d","postsToShow":4,"categories":"31","heading":"Upto 90% discount on living room furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#047e7e","arrowLeftBgColor":"#047e7e","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[30,30],"mobile":[30,30]}},"imageRadius":5,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[35,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-78cd8766-5b89-43c7-bb1f-f149f6a7fa9e","postsToShow":4,"categories":"41","heading":"Upto 70% discount on furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#047e7e","arrowLeftBgColor":"#047e7e","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-699445ca-4d84-4ec0-a35a-9636f53edca0","categories":"32","heading":"Upto 80% discount on bedroom furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#daa04d","arrowLeftBgColor":"#daa04d","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"pauseOnHover":true,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php } ?>

<!-- wp:woocommerce/related-products {"align":"wide"} -->
<div class="wp-block-woocommerce-related-products alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"woocommerce/related-products","lock":{"remove":true,"move":true}} -->
<div class="wp-block-query"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
<?php echo esc_html__( 'Related products', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>


<!-- wp:wc-booster/linked-product {"block_id":"wc-booster-linked-product-block-01840bc7-957b-47da-9785-12f22cc651ad","alignment":"left","postsToShow":8,"titleTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":20,"tablet":20,"mobile":20}},"fontWeight":"400","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"ratingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"buttonTextColor":"#000","buttonBackground":"#ffffff","padding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,0,0,0],"tablet":[0,0,0,0],"mobile":[0,0,0,0]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,20,0,0],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"enableQuickView":true,"enableWishList":true,"enableDescription":false,"enableButton":false,"ratingColor":"#ff9400","metaColor":"#ff4747","titleColor":"#000","priceColor":"#000","descriptionColor":"#ffffff","productBgColor":"","bgColor":"","imageRadius":2,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"enableDots":true,"dotColor":"#ff4747"} -->
<!-- wp:wc-booster/quick-view {"top":{"activeUnit":"px","range":{"min":1,"max":500},"values":{"desktop":40,"tablet":40,"mobile":40},"units":["px","em"]},"left":{"activeUnit":"px","range":{"min":1,"max":500},"values":{"desktop":6,"tablet":6,"mobile":6},"units":["px","em"]},"padding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[8,8,8,8],"tablet":[8,8,8,8],"mobile":[8,8,8,8]}}} /-->

<!-- wp:wc-booster/wish-list-button {"position":{"activeUnit":"px","isLinkActive":false,"properties":["top","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[8,10],"tablet":[8,10],"mobile":[8,10]}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[3,3,0,3],"tablet":[3,3,0,3],"mobile":[3,3,3,3]}}} /-->
<!-- /wp:wc-booster/linked-product -->

<?php } ?>

</div>
<!-- /wp:query --></div>
<!-- /wp:woocommerce/related-products --></main>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"shopverse/gallery"} /-->