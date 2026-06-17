<?php
/**
 * Title: Template Archive Product
 * Slug: shopverse/template-archive-product
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg","id":162,"dimRatio":50,"customOverlayColor":"#2c2c2c","isUserOverlayColor":true,"focalPoint":{"x":0.57,"y":0.29},"minHeight":400,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"100px","right":"0","bottom":"100px","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:100px;padding-left:0;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#2c2c2c"></span><img class="wp-block-cover__image-background wp-image-162" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" style="object-position:57% 29%" data-object-fit="cover" data-object-position="57% 29%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide","style":{"typography":{"letterSpacing":"1px","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-secondary-bg-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)">
  
<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta.jpg","id":4840,"dimRatio":70,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":100,"className":"shop-countdown","style":{"spacing":{"padding":{"right":"60px","left":"60px","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover shop-countdown" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:60px;padding-bottom:40px;padding-left:60px;min-height:100px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4840" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"},"layout":{"selfStretch":"fill","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"raleway"} -->
<p class="has-base-color has-text-color has-link-color has-raleway-font-family" style="font-size:24px;font-style:normal;font-weight:400;line-height:1.2"><?php echo esc_html__( 'Get it before it\'s gone', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:wc-booster/countdown {"block_id":"wc-booster-countdown-block-54881af5-6db3-44dc-9a87-2a61fe24ee2c","padding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[0,0,0,0],"tablet":[0,0,0,0],"mobile":[0,0,0,0]}},"margin":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[0,0,0,0],"tablet":[0,0,0,0],"mobile":[0,0,0,0]}},"boxWidth":{"activeUnit":"px","range":{"min":1,"max":1000},"values":{"desktop":60,"tablet":50,"mobile":23},"units":["px","em"]},"boxHeight":{"activeUnit":"px","range":{"min":1,"max":1000},"values":{"desktop":66,"tablet":60,"mobile":66},"units":["px","em"]},"gap":30,"alignment":"left","numberTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.6,"tablet":1.2,"mobile":1.2},"range":{"min":0,"max":100}}},"labelTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":14,"mobile":14},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"numColor":"#ffffff","labelColor":"#ffffff","targetDate":"2025-05-01T00:00:00"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"},"layout":{"selfStretch":"fill","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"raleway"} -->
<p class="has-base-color has-text-color has-link-color has-raleway-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.2"><?php echo esc_html__( 'Use this timer to create urgency and boost sales.', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"eleganceshop-btn is-style-fill","style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"0px"}},"fontFamily":"raleway"} -->
<div class="wp-block-button eleganceshop-btn is-style-fill has-raleway-font-family" style="text-transform:capitalize"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px"><?php echo esc_html__( 'Shop Sale', 'shopverse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"80px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php } ?>

<!-- wp:group {"align":"wide","className":"shop-breadcrumbs","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide shop-breadcrumbs" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:woocommerce/breadcrumbs {"style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"2px","left":"2px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:2px;padding-left:2px"><!-- wp:woocommerce/store-notices /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|70"},"margin":{"top":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0"><!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"#dddddd","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:#dddddd;border-bottom-width:1px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"},"spacing":{"margin":{"top":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;margin-top:0;letter-spacing:1px"><?php echo esc_html__( 'Filter by price', 'shopverse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"showInputFields":false,"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#dddddd","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#dddddd;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter","heading":"Filter by stock status"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php echo esc_html__( 'Filter by stock status', 'shopverse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true},"style":{"elements":{"link":{"color":{"text":"#343532"}}},"color":{"text":"#343532"}}} -->
<div class="wp-block-woocommerce-stock-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#dddddd","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:#dddddd;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php echo esc_html__( 'Filter by colors', 'shopverse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true},"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"letterSpacing":"1px"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-color has-link-color has-medium-font-size" style="color:#343532;letter-spacing:1px"><?php echo esc_html__( 'Filter by sizes', 'shopverse' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"showCounts":true,"heading":"","lock":{"remove":true},"style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading has-text-color has-link-color" style="color:#343532"></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count {"fontSize":"small","style":{"color":{"text":"#343532"},"elements":{"link":{"color":{"text":"#343532"}}}}} /-->

<!-- wp:woocommerce/catalog-sorting {"fontSize":"medium-small"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query","align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/product-companion {"block_id":"wc-booster-product-companion-block-d9b04118-4406-4fc1-a459-d3d830c2fb92","position":{"activeUnit":"px","range":{"min":0,"max":500},"values":{"desktop":10,"tablet":10,"mobile":10},"units":["%","px","em"]},"positionTop":{"activeUnit":"px","range":{"min":-100,"max":500},"values":{"desktop":10,"tablet":40,"mobile":40},"units":["%","px","em"]},"layoutColumnPadding":{"activeUnit":"px","isLinkActive":true,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[8,8,8,8],"tablet":[8,8,8,8],"mobile":[8,8,8,8]}}} -->
<!-- wp:wc-booster/wish-list-button /-->

<!-- wp:wc-booster/quick-view /-->
<!-- /wp:wc-booster/product-companion -->

<?php } ?>

<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true,"height":"300px","metadata":{"ignoredHookedBlocks":["wc-booster/wish-list-button","wc-booster/quick-view"]},"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"var:preset|spacing|40"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"#343532"}}},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"0px"},"color":{"text":"#343532"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:group {"className":"product-content","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontFamily":"jost","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}}} /-->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster-pro/product-variation {"block_id":"wc-booster-pro-product-variation-block-d61e9309-8d80-4712-8cac-95f85d4e3207","alignment":"left","noOfSwatches":5} /-->

<?php } ?>

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php echo esc_html__( 'No Products Found', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group"><!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-2a5f6c69-1af1-46b8-9ce7-56c09847ca35","postsToShow":4,"heading":"Upto 80% discount on office furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#ff4747","arrowLeftBgColor":"#ff4747","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"pauseOnHover":true,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[13,0,0],"tablet":[20,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":300,"mobile":300},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-46c3e6d3-6be5-4ee2-9b90-ac7a20b46013","postsToShow":4,"heading":"Upto 90% discount on living room furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#047e7e","arrowLeftBgColor":"#047e7e","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[30,30],"mobile":[30,30]}},"imageRadius":5,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[35,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-5d0248f2-7e60-42d4-a96f-051c2bd6060d","postsToShow":4,"heading":"Upto 70% discount on furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#047e7e","arrowLeftBgColor":"#047e7e","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"autoplay":true,"pauseOnHover":true,"enableArrow":false,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /-->

<!-- wp:wc-booster-pro/product-toggler {"block_id":"wc-booster-pro-product-toggler-block-4e4a4730-cbc5-4f53-81a9-0ef513d7477a","heading":"Upto 80% discount on bedroom furniture..","headingTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":25,"mobile":25},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"priceTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":17,"mobile":17},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"descriptionTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":16,"tablet":13,"mobile":13},"range":{"min":0,"max":100}},"fontWeight":400,"lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,10,0,10],"tablet":[0,10,0,10],"mobile":[0,10,0,10]}},"productMargin":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[0,5,0,5],"tablet":[0,15,0,15],"mobile":[0,15,0,15]}},"priceColor":"#000","descriptionColor":"#000","productBgColor":"","bgColor":"","arrowRightBgColor":"#daa04d","arrowLeftBgColor":"#daa04d","borderColor":"#000","hoverColor":"#ff4747","slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":3,"tablet":3,"mobile":2},"units":[""]},"arrowRadius":50,"arrowSize":{"activeUnit":"px","isLinkActive":true,"properties":["height","width"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":[25,25],"tablet":[25,25],"mobile":[30,30]}},"imageRadius":5,"pauseOnHover":true,"arrowPosition":{"activeUnit":"%","isLinkActive":false,"properties":["top","right","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["%","px","em"],"values":{"desktop":[15,0,-4],"tablet":[35,1,1],"mobile":[23,3,3]}},"borderWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":1,"mobile":1},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"activeWidth":{"activeUnit":"px","range":{"min":1,"max":50},"values":{"desktop":2,"tablet":3,"mobile":3},"responsiveViews":["desktop","tablet","mobile"],"units":["px"]},"excerptLength":15,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":50,"tablet":80,"mobile":80},"units":["px"]},"toggledImageHeight":{"activeUnit":"px","range":{"min":50,"max":1000},"values":{"desktop":350,"tablet":298,"mobile":298},"units":["px"]}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":""} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-3.jpg","id":6048,"dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"7rem","bottom":"7rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:0px;padding-top:7rem;padding-right:20px;padding-bottom:7rem;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6048" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"58px","lineHeight":"1","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"raleway"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-raleway-font-family" style="font-size:58px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html__( 'Unforgettable', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"raleway"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-raleway-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Make a mark on all with the \'24 Collection.', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"eleganceshop-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"0px"},"typography":{"fontSize":"16px","textTransform":"capitalize"}},"fontFamily":"raleway"} -->
<div class="wp-block-button has-custom-font-size eleganceshop-btn has-raleway-font-family" style="font-size:16px;text-transform:capitalize"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px"><?php echo esc_html__( 'Shop Now', 'shopverse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":""} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg","id":6049,"dimRatio":20,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":700,"contentPosition":"center center","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"7rem","bottom":"7rem"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:0px;padding-top:7rem;padding-right:20px;padding-bottom:7rem;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6049" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"58px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"base","fontFamily":"raleway"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-raleway-font-family" style="margin-top:0;margin-bottom:0;font-size:58px;font-style:normal;font-weight:500;line-height:1"><?php echo esc_html__( 'Elegance after dark', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"raleway"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-raleway-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Perfect for any date, event, or night out.', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"primary","className":"eleganceshop-btn","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"0px"},"typography":{"fontSize":"16px","textTransform":"capitalize"}},"fontFamily":"raleway"} -->
<div class="wp-block-button has-custom-font-size eleganceshop-btn has-raleway-font-family" style="font-size:16px;text-transform:capitalize"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:0px"><?php echo esc_html__( 'Shop Now', 'shopverse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"shopverse/product-review"} /-->

<?php } ?>