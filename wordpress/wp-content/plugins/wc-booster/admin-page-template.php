<div class="wc-booster-welcome-page">
    <div class="wc-booster-welcome-page-header">
        <div class="wc-booster-welcome-page-header-left">
            <h1>WC Booster - V <?php echo WC_Booster_Version; ?></h1>
            <p>Advance your business by giving customers a distinctive shopping experience with WC Booster</p>
        </div>

        <div class="wc-booster-welcome-page-header-right">
            <a href="https://wcbooster.com/#themes" target="_blank">
                <span class="dashicons dashicons-admin-customizer"></span>
                Browse Compatible Themes
            </a>          
            <a href="https://wordpress.org/support/plugin/wc-booster/reviews/" target="_blank" class="rate-us-btn">
                <span class="dashicons dashicons-star-filled"></span> 
                Rate Us 
            </a>
            <a href="https://wcbooster.com/contact-us" target="_blank" class="get-support-btn">
                <span class="dashicons dashicons-admin-links"></span>
                Get Support 
            </a>
            <?php
                if ( !function_exists( 'wc_booster_pro_load' ) ) {
                    ?>
                    <a href="https://wcbooster.com/#pricing" target="_blank">
                        <span class="dashicons dashicons-cart"></span>
                        Buy Pro
                    </a> 
                    <?php
                }
            ?>
        </div>
    </div>

    <div class="wc-booster-welcome-page-body">
        <div class="wc-booster-welcome-page-body-left">
            <h1>WC Booster Features</h1>
            <div class="wc-booster-blocks-wrapper">

                <?php
                $pro_blocks = [
                    [
                        'title'       => 'Advance search',
                        'description' => 'The Advanced Search Block provides instant search based on categories, enhancing the search experience for users on your website.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512">
                        <path
                        fill="#ffffff"
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Carousel Category Product',
                        'description' => 'The Carousel Category Product block empowers users to select product categories, enabling dynamic displays of filtered products.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">>
                        <path
                        fill="#ffffff"
                        d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Carousel Category',
                        'description' => 'The Carousel Category block allows you to effortlessly create visually appealing Gutenberg WooCommerce product category sliders.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">>
                        <path
                        fill="#ffffff"
                        d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Category List',
                        'description' => 'The Categories List block allows you to effortlessly create visually appealing Gutenberg WooCommerce product category list.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">
                        <path 
                        d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Categories',
                        'description' => 'Display a list of assigned terms from the taxonomy: Product categories.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">
                        <path 
                        d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Collage',
                        'description' => 'The Product Collage block enables users to highlight their store\'s products in a visually engaging colalge with different layouts.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 448 512">
                        <path
                        d="M128 136c0-22.1-17.9-40-40-40L40 96C17.9 96 0 113.9 0 136l0 48c0 22.1 17.9 40 40 40H88c22.1 0 40-17.9 40-40l0-48zm0 192c0-22.1-17.9-40-40-40H40c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40H88c22.1 0 40-17.9 40-40V328zm32-192v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V136c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM288 328c0-22.1-17.9-40-40-40H200c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V328zm32-192v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V136c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM448 328c0-22.1-17.9-40-40-40H360c-22.1 0-40 17.9-40 40v48c0 22.1 17.9 40 40 40h48c22.1 0 40-17.9 40-40V328z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Navigation',
                        'description' => 'Effortlessly browse between products on the single product page with this block, showcasing the previous and next products for easy navigation.',
                        'icon'        => '</svg>
                        <svg xmlns="http://www.w3.org/2000/svg"  height="32" width="40" viewBox="0 0 512 512">
                        <path d="M504.3 273.6c4.9-4.5 7.7-10.9 7.7-17.6s-2.8-13-7.7-17.6l-112-104c-7-6.5-17.2-8.2-25.9-4.4s-14.4 12.5-14.4 22l0 56-192 0 0-56c0-9.5-5.7-18.2-14.4-22s-18.9-2.1-25.9 4.4l-112 104C2.8 243 0 249.3 0 256s2.8 13 7.7 17.6l112 104c7 6.5 17.2 8.2 25.9 4.4s14.4-12.5 14.4-22l0-56 192 0 0 56c0 9.5 5.7 18.2 14.4 22s18.9 2.1 25.9-4.4l112-104z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Review Single',
                        'description' => 'This block allows users to select a preferred review for highlighting, adding a personal touch to showcase the most compelling feedback.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 640 512">
                        <path
                        d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.7 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Toggler',
                        'description' => 'This Block enables you to create stunning Gutenberg WooCommerce product grid, slider, and carousel blocks with ease and speed.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">
                        <path
                        fill="#ffffff"
                        d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Toggler',
                        'description' => 'This Block enables you to create stunning Gutenberg WooCommerce product grid, slider, and carousel blocks with ease and speed.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512">
                        <path
                        fill="#ffffff"
                        d="M160 80H512c8.8 0 16 7.2 16 16V320c0 8.8-7.2 16-16 16H490.8L388.1 178.9c-4.4-6.8-12-10.9-20.1-10.9s-15.7 4.1-20.1 10.9l-52.2 79.8-12.4-16.9c-4.5-6.2-11.7-9.8-19.4-9.8s-14.8 3.6-19.4 9.8L175.6 336H160c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM96 96V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160c-35.3 0-64 28.7-64 64zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120zm208 24a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                        />
                        </svg>',
                    ],
                    [
                        'title'       => 'Product Variation',
                        'description' => 'This block empowers users to customize the presentation of product variations in diverse formats and designs, elevating the overall shopping experience.',
                        'icon'        => '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 448 512">
                        <path fill="#ffffff" d="M128 136c0-22.1-17.9-40-40-40L40 96C17.9 96 0 113.9 0 136l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48zm0 192c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48zm32-192l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM288 328c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48zm32-192l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40zM448 328c0-22.1-17.9-40-40-40l-48 0c-22.1 0-40 17.9-40 40l0 48c0 22.1 17.9 40 40 40l48 0c22.1 0 40-17.9 40-40l0-48z"/>
                        </svg>',
                    ],
                ];
                ?>

                <?php foreach ($pro_blocks as $pro_block): ?>
                    <div class="wc-booster-blocks-items">
                        <span class="pro">Premium</span>

                        <div class="wc-booster-blocks-items-inner">
                            <div class="wc-booster-blocks-image">
                                <?php echo $pro_block['icon']; ?>
                            </div>
                            <h3><?php echo esc_html($pro_block['title']); ?></h3>
                            <p><?php echo esc_html($pro_block['description']); ?></p>
                            <a href="https://wcbooster.com/#blocks">Explore More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php

                $contents = WC_Booster_Helper::get_blocks_info();

                // sort by title
                usort($contents, function( $a, $b ){
                    return $a[ 'title' ] <=> $b[ 'title' ];
                });

                foreach( $contents as $block_id => $content ):

                    if ( $content[ 'is_pro' ] ) {
                        continue;
                    }

                    ?>
                    <div class="wc-booster-blocks-items">
                        <div class="wc-booster-blocks-items-inner">
                            <div class="wc-booster-blocks-image">
                                <?php WC_Booster_Helper::render_svg( $content[ 'icon' ] ); ?>
                            </div>
                            <h3><?php echo esc_html( $content[ 'title' ] ); ?></h3>
                            <p><?php echo esc_html( $content[ 'description' ] ); ?></p>
                            <a href="https://wcbooster.com/#blocks">Explore More</a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>       
    </div>
</div>