<?php
if( !class_exists( 'WC_Booster_Tax_Toggler_Block' ) ){

	class WC_Booster_Tax_Toggler_Block extends WC_Booster_Base_Block{

		public $slug = 'tax-toggler';

		/**
		* Title of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $title = 'Tax Toggler';

		/**
		* Description of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $description = 'The Product Tax Toggler block is a versatile addition to your WooCommerce store, enabling customers to toggle between viewing product prices with or without tax.';

		/**
		* SVG Icon for this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $icon = '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 576 512"><path fill="#ffffff" d="M384 128c70.7 0 128 57.3 128 128s-57.3 128-128 128l-192 0c-70.7 0-128-57.3-128-128s57.3-128 128-128l192 0zM576 256c0-106-86-192-192-192L192 64C86 64 0 150 0 256S86 448 192 448l192 0c106 0 192-86 192-192zM192 352a96 96 0 1 0 0-192 96 96 0 1 0 0 192z"/></svg>';


	    protected static $instance;
	    
	    public static function get_instance() {
	        if ( null === self::$instance ) {
	            self::$instance = new self();
	        }

	        return self::$instance;
	    }

	    public function __construct(){
	    	parent::__construct();

	    	add_filter( "option_woocommerce_tax_display_shop", [ $this, 'tax_display' ], 999, 2 );
	    	add_filter( "option_woocommerce_tax_display_cart", [ $this, 'tax_display' ], 999, 2 );

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

				$heading_typo = self::get_initial_responsive_props();
	    			if( isset( $attrs[ 'headingTypo' ] ) ){
	    				$heading_typo = self::get_typography_props(  $attrs[ 'headingTypo' ] );
	    		}

	    		$padding = self::get_dimension_props( 'padding', $attrs[ 'padding' ] );

	    		$txtPadding = self::get_dimension_props( 'padding', $attrs[ 'txtPadding' ] );

	    		foreach( self::$devices as $device ){

					$styles = [
						[
							'selector' => '.wc-booster-tax-toggler-wrapper',
							'props' => $padding[ $device ]
						],
						[
							'selector' => '.inclusive-text',
							'props' => $heading_typo[ $device ]
						],
						[
							'selector' => '.exclusive-text',
							'props' => $heading_typo[ $device ]
						],
						[
							'selector' => '.inclusive-text',
							'props' => $txtPadding[ $device ]
						],
						[
							'selector' => '.exclusive-text',
							'props' => $txtPadding[ $device ]
						]

					];

					self::add_styles([
						'attrs' => $attrs,
						'css'   => $styles,
					], $device );
				}

				$desktop_css = [
					[
						'selector' => '.inclusive-text',
						'props' => ['color'=>'txtColor']
					],
					[
						'selector' => '.exclusive-text',
						'props' => ['color'=>'txtColor']
					],
					[
						'selector' => '.wc-booster-tax-toggler-wrapper',
						'props' => [
							'background-color'=>'bgColor'
						]
					],
					[
						'selector' => '.wc-booster-tax-toggler-wrapper .active',
						'props'    => [
							'color' => 'activeTxtColor',
							'background-color' => 'activeBgColor'
						]
					],
					[
						'selector' => ['.wc-booster-tax-toggler-wrapper', '.active'],
						'props' => [
							'border-radius' => [
								'unit' => 'px',
								'value' => $attrs[ 'borderRadius' ]
							]
						]

					]
				];

				self::add_styles( array(
					'attrs' => $attrs,
					'css'   => $desktop_css,
				));

			}
		}

		public function tax_display( $value, $option ){
			
			if( isset( $_GET[ 'mode' ] ) ){
				$value = $_GET[ 'mode' ];
			}
			return $value;
		}

		public function render( $attrs, $content, $block ) {
		    $block_content = '';
		    ob_start();

		    $current_mode = isset($_GET['mode']) ? $_GET['mode'] : '';
		    $tax_display_shop = get_option( 'woocommerce_tax_display_shop' );

			// Determine the active class based on the current mode and tax display settings
			$incl_active_class = ( $current_mode === 'incl' || ( $current_mode === '' && $tax_display_shop === 'incl' ) ) ? 'active' : '';
			$excl_active_class = ( $current_mode === 'excl' || ( $current_mode === '' && $tax_display_shop === 'excl' ) ) ? 'active' : '';


		    ?>
		    <div id="<?php echo esc_attr( $attrs['block_id'] ); ?>" class="wc-booster-tax-toggler">
		        <div class="wc-booster-tax-toggler-wrapper">
		            <a href="?mode=incl" class="inclusive-text <?php echo esc_attr( $incl_active_class ); ?>">
		                <?php echo esc_html( $attrs['inclusiveText'] ); ?>
		            </a>
		            <a href="?mode=excl" class="exclusive-text <?php echo esc_attr($excl_active_class); ?>">
		                <?php echo esc_html( $attrs['exclusiveText'] ); ?>
		            </a>
		        </div>
		    </div>
		    <?php

		    $block_content = ob_get_clean();
		    return $block_content;
		}

	}

	WC_Booster_Tax_Toggler_Block::get_instance();
}