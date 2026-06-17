<?php
/**
 * Title: Category Collage
 * Slug: shopverse/category-collage
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"50px","bottom":"50px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"jost"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-jost-font-family" style="font-size:15px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'New Collection', 'shopverse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family" style="margin-top:var(--wp--preset--spacing--30);font-size:48px;font-style:normal;font-weight:500;line-height:1.2"><?php echo esc_html__( 'Best Picks 2024', 'shopverse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontFamily":"jost"} -->
<p class="has-text-align-center has-jost-font-family" style="font-size:16px;font-style:normal;font-weight:400;line-height:1.5"><?php echo esc_html__( 'Mi sem faucibus eleifend himenaeos pharetra eu aptent fermentum aenean pulvinar est in morbi mus si fusce arcu tempus luctus potenti taciti porta laoreet', 'shopverse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if (function_exists('wc_booster_load') && class_exists('WooCommerce')) { ?>

<!-- wp:wc-booster/category-collage {"block_id":"wc-booster-category-collage-block-5d587328-de79-406e-822a-7cd43b94d9ee","cat_id":"[{\u0022id\u0022:\u002231\u0022},{\u0022id\u0022:\u00220\u0022},{\u0022id\u0022:\u002256\u0022},{\u0022id\u0022:\u002248\u0022},{\u0022id\u0022:\u00220\u0022}]","titleTypo":{"fontFamily":"Jost, sans-serif","fontSize":{"units":["px","em","rem"],"activeUnit":"px","values":{"desktop":24,"tablet":18,"mobile":18},"range":{"min":0,"max":100}},"fontWeight":"500","lineHeight":{"activeUnit":"px","units":["px"],"values":{"desktop":28,"tablet":28,"mobile":28}}},"enableDescription":false,"imageHeight":{"activeUnit":"px","range":{"min":50,"max":500},"values":{"desktop":300,"tablet":500,"mobile":500},"units":["px"]},"imageRadius":0,"catTextColor":"#ffffff","layout":"two","opacity":2} /-->

<?php } ?>

</div>
<!-- /wp:group -->