<?php
/**
 * Title: Carousel Category
 * Slug: shopverse/carousel-category
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"jost"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Top Collection', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:48px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Top Picks 2024', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Mi sem faucibus eleifend himenaeos pharetra eu aptent fermentum aenean pulvinar est in morbi mus si fusce arcu tempus luctus potenti taciti porta laoreet', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_pro_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster-pro/carousel-category {"block_id":"wc-booster-pro-carousel-category-block-28ba2acc-8d85-49fa-8419-a0aa1d714ad6","cat_id":"[{\u0022id\u0022:\u00220\u0022},{\u0022id\u0022:\u00220\u0022},{\u0022id\u0022:\u00220\u0022},{\u0022id\u0022:\u00220\u0022},{\u0022id\u0022:\u00220\u0022}]","titleTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":18,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","rem"],"values":{"desktop":[20,6,0,6],"tablet":[15,7,0,7],"mobile":[15,7,0,7]}},"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":300,"tablet":200,"mobile":300},"units":["px"]},"imageSize":"large","categoryBgColor":"","bgColor":"","arrowBgColor":"#ff4747","imageRadius":{"activeUnit":"px","range":{"min":1,"max":500},"values":{"desktop":1,"tablet":1,"mobile":1},"units":["px","%"]},"slidesToShow":{"activeUnit":"","range":{"min":1,"max":10},"values":{"desktop":4,"tablet":3,"mobile":1},"units":[""]}} /-->

<?php } else { ?> 

<!-- wp:group {"layout":{"type":"grid","minimumColumnWidth":"19rem"}} -->
<div class="wp-block-group"><!-- wp:image {"id":4840,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-1.jpg" alt="" class="wp-image-4840" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":4838,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-2.jpg" alt="" class="wp-image-4838" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":4803,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-3.jpg" alt="" class="wp-image-4803" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":4802,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" alt="" class="wp-image-4802" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<?php } ?>

</div>
<!-- /wp:group -->