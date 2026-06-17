<?php
if( !class_exists( 'WC_Booster_Stock_Progress_Bar_Block' ) ){

	class WC_Booster_Stock_Progress_Bar_Block extends WC_Booster_Base_Block{

		public $slug = 'stock-progress-bar';

		/**
		* Title of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $title = 'Stock Progress Bar';

		/**
		* Description of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $description = 'This block shows a progress bar indicating the percentage of stock sold, along with the number of units sold out of the total available stock for a product.';

		/**
		* SVG Icon for this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $icon = '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32"  viewBox="0 0 512 512">
		<path 
		fill="#ffffff"
		d="M448 160l-128 0 0-32 128 0 0 32zM48 64C21.5 64 0 85.5 0 112l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 64zM448 352l0 32-256 0 0-32 256 0zM48 288c-26.5 0-48 21.5-48 48l0 64c0 26.5 21.5 48 48 48l416 0c26.5 0 48-21.5 48-48l0-64c0-26.5-21.5-48-48-48L48 288z"
		/>
		</svg>';
		
	    protected static $instance;
	    
	    public static function get_instance() {
	        if ( null === self::$instance ) {
	            self::$instance = new self();
	        }

	        return self::$instance;
	    }

	    public function __construct(){
	    	parent::__construct();
	    	add_action( 'wp_ajax_get_variation_stock_info', array( $this, 'get_variation_stock_info' ) );
	    	add_action( 'wp_ajax_nopriv_get_variation_stock_info', array( $this, 'get_variation_stock_info' ) );

	    }

        /**
		* Generate & Print Frontend Styles
		* Called in wp_head hook
		* @access public
		* @since 1.0.0
		* @return null
		*/
		public function prepare_scripts(){

			wp_localize_script( 'wc-booster-stock-progress-bar-view-script', 'WC_BOOSTER_SPB', array(
					'ajaxurl' => admin_url( 'admin-ajax.php' )
				));

			foreach( $this->blocks as $block ){

				$attrs = self::get_attrs_with_default( $block[ 'attrs' ] );

				if( in_array( $attrs[ 'block_id' ], $this->block_ids ) ){
					continue;
				}

				$this->block_ids[] = $attrs[ 'block_id' ];

				$text_typo = self::get_initial_responsive_props();
	    			if( isset( $attrs[ 'textTypo' ] ) ){
	    				$text_typo = self::get_typography_props(  $attrs[ 'textTypo' ] );
	    		}

				$height = self::get_initial_responsive_props();
				if( isset( $attrs[ 'height' ] ) ){
					$height = self::get_dimension_props( 'height',
						$attrs[ 'height' ]
					);
				}

				foreach( self::$devices as $device ){

					$styles = [
						[
							'selector' => '.stock-progress-status',
							'props' => $text_typo[ $device ]
						],
						[
							'selector' => '.stock-progress-bar-fill',
							'props' => $height[ $device ]
						]
					];

					self::add_styles([
						'attrs' => $attrs,
						'css'   => $styles,
					], $device );
				}

				$desktop_css = [
					[
						'selector' => '.stock-progress-bar-fill',
						'props' => [
							'background-color' => 'progressColor'
						]
					],
					[
						'selector' => '.stock-progress-bar',
						'props' => [
							'background-color' => 'progressBarColor',
							'border-radius' => 'borderRadius'
						]
					],
					[
						'selector' => '.stock-progress-status',
						'props' => [
							'color'=> 'textColor'
						]
					]
				];

				self::add_styles( array(
					'attrs' => $attrs,
					'css'   => $desktop_css,
				));
				do_action( 'wc_booster_prepare_scripts', $this, $attrs );
			}
		}

		public function get_variation_stock_info() {
			
			if ( isset( $_POST['variation_id'] ) ) {
				$variation_id = intval( $_POST['variation_id'] );

				$variation = wc_get_product( $variation_id );

				if ( $variation && $variation->get_manage_stock() ) {
					$total_stock = $variation->get_stock_quantity();
					$sold_stock = (int) $this->count_orders_from_variation( $variation_id );

					wp_send_json_success( [
						'total_stock' => $total_stock,
						'sold_stock'  => $sold_stock,
					] );
				}
			}

			wp_send_json_error( [ 'message' => 'Invalid variation or no stock management.' ] );
		}

		public function count_orders_from_variation( $variation_id ) {
		    $statuses = array( 'wc-completed', 'wc-processing', 'wc-on-hold' );
		    $total_quantity = 0;

		    // Query orders with specified statuses
		    $orders = wc_get_orders(array(
		        'status' => $statuses,
		        'limit'  => -1,  // Retrieve all relevant orders
		    ));

		    // Loop through each order to check if it contains the variation and sum quantities
		    foreach ( $orders as $order ) {
		        foreach ( $order->get_items() as $item ) {
		            if ( $item->get_variation_id() == $variation_id ) {
		                $total_quantity += $item->get_quantity();
		            }
		        }
		    }

		    return $total_quantity;
		}

		public function get_default_variation( $product ) {
			foreach ( $product->get_available_variations() as $variation_values ) {
				$is_default = true;

				foreach ( $variation_values['attributes'] as $key => $attribute_value ) {
					$attribute_name = str_replace( 'attribute_', '', $key );
					$default_value = $product->get_variation_default_attribute( $attribute_name );

					if ( $default_value !== $attribute_value ) {
						$is_default = false;
						break;
					}
				}

				if ( $is_default ) {
					return wc_get_product( $variation_values['variation_id'] );
				}
			}

			return null;
		}

		public function render( $attrs, $content, $block ) {

		    $post_id = isset( $block->context[ 'postId' ] ) ? $block->context[ 'postId' ] : '';
		    $product = wc_get_product( $post_id );

		    if ( ! $product ) {
		        return;
		    }

		    $total_stock = 0;
		    $sold_stock  = 0;

		    if ( $product->get_type() == 'variable' ) {

		        $default_variation = $this->get_default_variation( $product );

		        if ( $default_variation && $default_variation->get_manage_stock() ) {
		        	$total_stock = $default_variation->get_stock_quantity();
		        	$sold_stock  = (int) $this->count_orders_from_variation( $default_variation->get_id() );
		        } else {
		        	$total_stock = 0;
		        	$sold_stock  = 0;
		        }

		    } else {
		        if ( ! $product->get_manage_stock() ) {
		            return;  // If no stock management, skip rendering
		        }
		        $total_stock = $product->get_stock_quantity();
		        $sold_stock  = (int) get_post_meta( $post_id, 'total_sales', true );
		    }

		    if ( $total_stock + $sold_stock > 0 ) {
		        $progress_percentage = ( $sold_stock / ( $sold_stock + $total_stock ) ) * 100;
		    } else {
		        $progress_percentage = 0;
		    }

		    if ( $progress_percentage === 0 && $total_stock === 0 && $sold_stock === 0 ) {
		        return;
		    }

		    ob_start();
		    ?>
		    <div id="<?php echo esc_attr( $attrs[ 'block_id' ] ); ?>" class="wc-booster-stock-progress-bar-wrapper <?php echo esc_attr( $attrs[ 'alignment' ] ); ?>">
		        <div class="stock-progress-bar">
		            <div class="stock-progress-bar-fill" style="width: <?php echo esc_attr( $progress_percentage ); ?>%;"></div>
		        </div>
		        <p class="stock-progress-status">
		        	<?php echo esc_html( sprintf( __( 'Sold: %d / %d', 'wc-booster' ), $sold_stock, $sold_stock + $total_stock ) ); ?>
		        </p>
		    </div>
		    <?php
		    return ob_get_clean();
		}

	}

	WC_Booster_Stock_Progress_Bar_Block::get_instance();
}