<?php 

if( !class_exists( 'WC_Booster_Product_Image_Gallery_Block' ) ){

    class WC_Booster_Product_Image_Gallery_Block extends WC_Booster_Base_Block{

        public $slug = 'product-image-gallery';

        /**
        * Title of this block.
        *
        * @access public
        * @since 1.0.0
        * @var string
        */
        public $title = 'Product Image Gallery';

        /**
        * Description of this block.
        *
        * @access public
        * @since 1.0.0
        * @var string
        */
        public $description = 'The Product Image Gallery Block displays a customizable image slider for WooCommerce products. It supports product variations and offers a responsive, smooth browsing experience on all devices.';

        /**
        * SVG Icon for this block.
        *
        * @access public
        * @since 1.0.0
        * @var string
        */
        public $icon = '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 640 512">
        <path
        fill="#ffffff"
        d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
        </svg>';

        protected static $instance;

        public static function get_instance() {
            if ( null === self::$instance ) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function prepare_scripts(){

            if( count( $this->blocks ) > 0 ){

                wp_enqueue_script( 'jquery-magnific-popup', WC_Booster_Url . 'assets/vendors/magnific-popup/jquery.magnific-popup.min.js', [ 'jquery' ], '1.2.0' );
                wp_enqueue_style( 'magnific-popup-css', WC_Booster_Url . 'assets/vendors/magnific-popup/magnific-popup.min.css' );

                global $product;

                if ($product && $product->is_type('variable')) {
                    $available_variations = $product->get_available_variations();
                } else {
                    $available_variations = array();
                }

                wp_localize_script( 'wc-booster-product-image-gallery-view-script', 'WC_BOOSTER_PIGB', array(
                    'available_variations' => $available_variations
                ));

                foreach( $this->blocks as $block ){

                    $attrs = self::get_attrs_with_default( $block[ 'attrs' ] );

                    if( in_array( $attrs[ 'block_id' ], $this->block_ids ) ){
                        continue;
                    }

                    $this->block_ids[] = $attrs[ 'block_id' ];

                    $sale_typo = self::get_initial_responsive_props();
                    if( isset( $attrs[ 'saleTypo' ] ) ){   
                        $sale_typo = self::get_typography_props(  $attrs[ 'saleTypo' ] );
                    }

                    foreach( [ 'mobile', 'tablet', 'desktop' ] as $device ){
                        $css = [
                            [
                                'selector' => '.wc-booster-save-badge',
                                'props'    => $sale_typo[ $device ]
                            ],
                        ];

                        self::add_styles( [
                            'attrs' => $attrs,
                            'css'   => $css,
                        ], $device );
                    }

                    $dynamic_css = [
                        [
                            'selector' => '.wc-booster-save-badge',
                            'props'    =>  [
                                'color' => 'saleTextColor'
                            ]
                        ],
                        [
                            'selector' => '.wc-booster-save-badge',
                            'props'    =>  [
                                'background' => 'saleBgColor'
                            ]
                        ],
                    ];

                    self::add_styles( [
                        'attrs' => $attrs,
                        'css'   => $dynamic_css,
                    ]);

                }
            }
        }

        public function get_gallery_image_html( $image_id, $index, $alt = '' ) {
            $image_url = wp_get_attachment_image_url( $image_id, 'large' );
            if ( ! $image_url ) {
                return '';
            }

            return sprintf(
                '<div><div data-index="%1$d" class="wc-booster-image-gallery-wrapper"><img src="%2$s" class="woocommerce-product-gallery__image" alt="%3$s" /></div></div>',
                esc_attr( $index ),
                esc_url( $image_url ),
                esc_attr( $alt )
            );
        }

        public function get_main_image_html( $image_id, $index, $variation_id, $alt = '' ) {
            $image_url = wp_get_attachment_image_url( $image_id, 'large' );
            if ( ! $image_url ) {
                return '';
            }

            return sprintf(
                '<div><div data-index="%1$d" data-variation-id="%4$s" class="woocommerce-product-gallery__image wc-booster-image-gallery-wrapper" data-zoom-image="%2$s"><img src="%2$s" alt="%3$s" /></div></div>',
                esc_attr( $index ),
                esc_url( $image_url ),
                esc_attr( $alt ),
                esc_attr( $variation_id )
            );
        }

        public function get_sale_badge( $product, $attrs ) {
            $badge = '';

            if ( $product->is_on_sale() ) {
                $badge = sprintf(
                    '<span class="wc-booster-save-badge">%s</span>',
                    esc_html__( $attrs['saleText'], 'wc-booster' )
                );
            }

            return $badge;
        }


        public function render( $attrs, $content, $block ) {

            global $product;

            if ( !$product ) {
                return;
            }

            $available_variations = '';

            if ( $product->is_type( 'variable' ) ) {
                $available_variations = $product->get_available_variations();
            }

            $product_gallery_ids = $product->get_gallery_image_ids();
            $featured_image_id   = $product->get_image_id();
            $featured_image_alt  = get_post_meta( $featured_image_id, '_wp_attachment_image_alt', true );


            // Start output buffering
            ob_start();
            if ( !empty( $available_variations ) || !empty( $product_gallery_ids ) ) {

            ?>
            <div id="<?php echo esc_attr( $attrs['block_id'] ); ?>" class="product-gallery wp-block-wc-booster-product-image-gallery">
                <div class="wc-booster-thumbnail">
                    <?php
                    $thumb_index = 0;

                    if ( $available_variations ) :
                        foreach ( $available_variations as $index => $variation ) : 
                            $variation_image_id = $variation['image_id'];
                            if ( $variation_image_id ) :
                                echo $this->get_gallery_image_html( $variation_image_id, $thumb_index, $variation['image']['alt'] );
                                $thumb_index++;
                                break;
                            endif;
                        endforeach; 
                    endif;

                    if ( $featured_image_id ) {
                        echo $this->get_main_image_html( $featured_image_id, $thumb_index, $featured_image_id, $featured_image_alt );
                        $thumb_index++;
                    }

                    foreach ( $product_gallery_ids as $index => $gallery_id ) :
                        echo $this->get_gallery_image_html( $gallery_id, $thumb_index + $index );
                    endforeach;
                    ?>
                </div>
                <div class="wc-booster-main-image">
                    <?php
                    $main_img_index = 0;

                    if ( $available_variations ) :
                        foreach ( $available_variations as $index => $variation ) : 
                            $variation_image_id = $variation['image_id'];
                            if ( $variation_image_id ) :
                                echo $this->get_main_image_html( $variation_image_id, $main_img_index, $variation['variation_id'], $variation['image']['alt'] );
                            $main_img_index++;
                                break;
                            endif;
                        endforeach; 
                    endif;

                    if ( $featured_image_id ) {
                        echo $this->get_main_image_html( $featured_image_id, $main_img_index, $featured_image_id, $featured_image_alt );
                        $main_img_index++;
                    }

                    foreach ( $product_gallery_ids as $index => $gallery_id ) :
                        echo $this->get_main_image_html( $gallery_id, $main_img_index + $index, $gallery_id, get_post_meta( $gallery_id, '_wp_attachment_image_alt', true ) );
                    endforeach; 
                    ?>
                </div>
                <?php echo $this->get_sale_badge( $product, $attrs ); ?>
            </div>

            <?php
            } else {
                $product_image_id = $product->get_image_id();

                if ( $product_image_id ) {
                    $product_img_url = wp_get_attachment_image_url( $product_image_id, 'full' );
                } else {
                    $product_img_url = wc_placeholder_img_src();
                }

                $img_alt = get_post_meta( $product_image_id, '_wp_attachment_image_alt', true );

                ?>

                <div id="<?php echo esc_attr( $attrs['block_id'] ); ?>" class="product-gallery wp-block-wc-booster-product-image-gallery">
                    <div class="wc-booster-single-main-image">
                        <div class="wc-booster-single-main-image-wrapper" data-zoom-image="<?php echo esc_url( $product_img_url); ?>">
                            <img src="<?php echo esc_url( $product_img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>"/>
                        </div>
                    </div>
                    <?php echo $this->get_sale_badge( $product, $attrs ); ?>
                </div>
                <?php
            }

            // Get the buffered content
            $block_content = ob_get_clean();

            return $block_content;
        }
    }

    WC_Booster_Product_Image_Gallery_Block::get_instance();
}

