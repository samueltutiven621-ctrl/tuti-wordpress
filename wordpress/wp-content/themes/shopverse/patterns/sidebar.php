<?php
/**
 * Title: Siderbar
 * Slug: shopverse/sidebar
 * Categories: shopverse
 *
 * @package ShopVerse
 * @since 1.0.0
 */

?>
<!-- wp:group {"className":"site-sidebar","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-sidebar has-base-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"className":"sidebar-search","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"2px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group sidebar-search" style="border-radius:2px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Enter Your Keywords","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium-small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"border":{"radius":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:2px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"spacing":{"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="padding-bottom:20px;font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Categories', 'shopverse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#bcbcbc"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#bcbcbc;color:#bcbcbc"/>
<!-- /wp:separator -->

<!-- wp:categories {"showPostCounts":true,"style":{"spacing":{"padding":{"top":"35px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}},"border":{"radius":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:2px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"spacing":{"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="padding-bottom:20px;font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Recent post', 'shopverse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#bcbcbc"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#bcbcbc;color:#bcbcbc"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:40px"><!-- wp:query {"queryId":15,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"blockGap":"3rem"}},"textColor":"base"} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"80px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"fontSize":"medium-small"} /-->

<!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}},"border":{"radius":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:2px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"spacing":{"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="padding-bottom:20px;font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Gallery', 'shopverse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#bcbcbc"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#bcbcbc;color:#bcbcbc"/>
<!-- /wp:separator -->

<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"padding":{"top":"40px"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped" style="padding-top:40px"><!-- wp:image {"lightbox":{"enabled":true},"id":129,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta.jpg" alt="kitchen-with-small-space-modern-design" class="wp-image-129"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":127,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" alt="3d-rendering-white-minimal-kitchen-with-wood-decoration" class="wp-image-127"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":126,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta.jpg" alt="beautiful-shot-modern-house-kitchen-dining-room" class="wp-image-126"/></figure>
<!-- /wp:image -->

<!-- wp:image {"lightbox":{"enabled":true},"id":125,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" alt="3d-rendering-white-minimal-kitchen-with-wood-decoration" class="wp-image-125"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":124,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cta.jpg" alt="empty-modern-room-with-furniture-2-scaled" class="wp-image-124"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":123,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/archive-banner.jpg" alt="minimalist-kitchen-interior-design" class="wp-image-123"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"0","right":"0"}},"border":{"radius":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:2px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"},"spacing":{"padding":{"bottom":"20px"}}}} -->
<h4 class="wp-block-heading" style="padding-bottom:20px;font-size:24px;font-style:normal;font-weight:500"><?php echo esc_html__( 'Tags', 'shopverse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#bcbcbc"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#bcbcbc;color:#bcbcbc"/>
<!-- /wp:separator -->

<!-- wp:post-terms {"term":"post_tag","separator":"","style":{"spacing":{"padding":{"top":"40px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->