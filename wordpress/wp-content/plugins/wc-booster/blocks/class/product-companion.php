<?php
if( !class_exists( 'WC_Booster_Product_Companion_Block' ) ){

	class WC_Booster_Product_Companion_Block extends WC_Booster_Base_Block{

		public $slug = 'product-companion';

		/**
		* Title of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $title = 'Product Companion';

		/**
		* Description of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $description = 'Provides key product interactions like Quick View, Wishlist and Add to cart button, enhancing the shopping experience with streamlined access to essential features.';

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

        /**
		* Generate & Print Frontend Styles
		* Called in wp_head hook
		* @access public
		* @since 1.0.0
		* @return null
		*/
		public function prepare_scripts(){

			foreach( $this->blocks as $block ){

				$attrs = self::get_attrs_with_default( $block[ 'attrs' ] );

				if( in_array( $attrs[ 'block_id' ], $this->block_ids ) ){
					continue;
				}

				$this->block_ids[] = $attrs[ 'block_id' ];


				$position = $positionTop = self::get_initial_responsive_props();
				if( isset( $attrs[ 'position' ] ) ){
					$position = self::get_dimension_props( ( $attrs[ 'tooglePostion' ] == 'left' ) ? 'left' : 'right', $attrs[ 'position' ] );
				}

				if( isset( $attrs[ 'positionTop' ] ) ){
					$positionTop = self::get_dimension_props( [ 'top' ], $attrs[ 'positionTop' ] );
				}

				$layout_column_padding = self::get_initial_responsive_props();
				if( isset( $attrs[ 'layoutColumnPadding' ] ) ){
					$layout_column_padding = self::get_dimension_props( 'padding', $attrs[ 'layoutColumnPadding' ] );
				}

				$layout_row_padding = self::get_initial_responsive_props();
				if( isset( $attrs[ 'layoutRowPadding' ] ) ){
					$layout_row_padding = self::get_dimension_props( 'padding', $attrs[ 'layoutRowPadding' ] );
				}

				foreach( [ 'mobile', 'tablet', 'desktop' ] as $device ){

					$padding = ( $attrs[ 'layout' ] === 'column' ) ? $layout_column_padding[ $device ] : $layout_row_padding[ $device] ;

					$css = [
						[
							'selector' => '',
							'props'    => $position[ $device ]
						],
						[
							'selector' => '',
							'props'    => $positionTop[ $device ]
						],
						[
							'selector' => '',
							'props' => $padding,
						]
					];

					self::add_styles( [
						'attrs' => $attrs,
						'css'   => $css,
					], $device );
				}

				if ( $attrs[ 'enableTextOnHover' ] == 'visible' ) {
					$opacity = 1;
				} else {
					$opacity = 0;
				}

				
				$desktop_css = [
					[
						'selector' => '',
						'props' => [
							'background' => 'bgColor',
							'border-radius' => 'borderRadius'
						]
					],
					[
						'selector' => ['.wc-booster-wishlist-button-wrapper .wc-booster-wishlist-button i', '.wc-booster-quick-view i', '.product-companion-cart-button i'],
						'props' => [
							'color' => 'color'
						]
					],
					[
						'selector' => '',
						'props' => [
							'flex-direction' => 'layout'
						]
					],
					[
						'selector' => '.wc-booster-wishlist-button:hover .wishlist-text',
						'props' => [
							'visibility' => 'enableTextOnHover'
						]
					],
					[
						'selector' => '.wc-booster-wishlist-button:hover .wishlist-text',
						'props' => [
							'opacity' => [
								'unit' => '',
								'value' => $opacity
							]
						]
					],
					[
						'selector' => '.wc-booster-quick-view:hover .quick-view-text',
						'props' => [
							'visibility' => 'enableTextOnHover'
						]
					],
					[
						'selector' => '.wc-booster-quick-view:hover .quick-view-text',
						'props' => [
							'opacity' => [
								'unit' => '',
								'value' => $opacity
							]
						]
					],
				];

				self::add_styles( array(
					'attrs' => $attrs,
					'css'   => $desktop_css,
				));

				do_action( 'wc_booster_prepare_scripts', $this, $attrs );

			}
		}

		public function render( $attrs, $content, $block ){
			global $product;

			if( !$product )
				return;

			$quick_view = WC_Booster_Quick_View_Block::get_instance();
			$qv_attrs = $quick_view->get_default_attributes();

			$wishlist = WC_Booster_Wish_List_Button_Block::get_instance();
			$wl_attrs = $wishlist->get_default_attributes();

			$enable_ajax = get_option('woocommerce_enable_ajax_add_to_cart');

			$pid = $product->get_id();	
		    ob_start();
		    ?>
		    <section id="<?php echo esc_attr( $attrs['block_id'] ); ?>" class="wc-booster-product-companion wc-booster-product-companion-text-position-<?php echo esc_attr( $attrs['textPosition'] ); ?> wc-booster-layout-<?php echo esc_attr( $attrs['layout']);?>">
		    	<?php
		    	echo $wishlist->render( $wl_attrs, '', $block );
		    	echo $quick_view->render( $qv_attrs, '', $block );
		    	?>
		    	<?php
		    	if ( $attrs['enableCart'] == 'enable' && $product && $product->is_in_stock() ) : ?>
		    		<div class="product-companion-cart">
		    			<div class="product-companion-cart-button">
		    				<a href="<?php echo do_shortcode( '[add_to_cart_url id=' . $pid . ']' ); ?>" 
		    					class="button add_to_cart_button <?php if ( $enable_ajax == 'yes' ) echo "ajax_add_to_cart" ?>" 
		    					data-product_id="<?php echo esc_attr( $pid ); ?>">
		    					<span class="cart-text"><span><?php echo esc_html__( 'Add to cart', 'wc-booster' ); ?></span></span>
		    					<i class="fas fa-shopping-cart"></i>
		    				</a>
		    			</div>
		    		</div>
		    	<?php endif; ?>
		    </section>

			<?php
		    return ob_get_clean();
		}

	}

	WC_Booster_Product_Companion_Block::get_instance();
}