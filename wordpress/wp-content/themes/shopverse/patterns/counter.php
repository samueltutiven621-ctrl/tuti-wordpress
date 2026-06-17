<?php
/**
 * Title: Counter
 * Slug: shopverse/counter
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-1.jpg","id":5752,"alt":"fashionable-man-front-blue-wall","dimRatio":0,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.48,"y":0.14},"minHeight":600,"style":{"border":{"radius":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:0px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5752" alt="fashionable-man-front-blue-wall" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-1.jpg" style="object-position:48% 14%" data-object-fit="cover" data-object-position="48% 14%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"none","fontSize":"3rem","lineHeight":"1","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60);font-size:3rem;font-style:normal;font-weight:500;line-height:1;text-transform:none"><?php echo esc_html__( 'Get 20% Off From New Collection', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<?php if (function_exists('wc_booster_load') ) { ?>

<!-- wp:group {"className":"shopverse-countdown","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group shopverse-countdown" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:wc-booster/countdown {"block_id":"wc-booster-countdown-block-8b29ea90-bb2c-452f-98be-fe5988b61143","padding":{"activeUnit":"px","isLinkActive":false,"properties":["top","right","bottom","left"],"responsiveViews":["desktop","tablet","mobile"],"units":["px","em"],"values":{"desktop":["1","1","1",1],"tablet":["1","1","1","1"],"mobile":["1","1","1","1"]}},"boxWidth":{"activeUnit":"px","range":{"min":1,"max":1000},"values":{"desktop":75,"tablet":75,"mobile":75},"units":["px","em"]},"boxHeight":{"activeUnit":"px","range":{"min":1,"max":1000},"values":{"desktop":66,"tablet":66,"mobile":66},"units":["px","em"]},"gap":30,"alignment":"left","numberTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":20,"tablet":20,"mobile":20},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.6,"tablet":1.2,"mobile":1.2},"range":{"min":0,"max":100}}},"labelTypo":{"fontFamily":"","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":14,"tablet":14,"mobile":14},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"","units":[""],"values":{"desktop":1.2,"tablet":1.2,"mobile":1.2}}},"bgColor":"#ffffff","numColor":"#000000","labelColor":"#000000","targetDate":"2025-05-01T00:00:00"} /--></div>
<!-- /wp:group -->

<?php } ?>

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:button {"backgroundColor":"black","style":{"border":{"radius":"0px"}},"fontFamily":"jost"} -->
<div class="wp-block-button has-jost-font-family"><a class="wp-block-button__link has-black-background-color has-background wp-element-button" href="#" style="border-radius:0px"><?php echo esc_html__( 'Shop Now', 'shopverse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->