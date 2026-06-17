<?php 
if( !class_exists( 'WC_Booster_Quick_View_Block' ) ){

	class WC_Booster_Quick_View_Block extends WC_Booster_Base_Block{

		public $slug = 'quick-view';

		/**
		* Title of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $title = 'Quick View';

		/**
		* Description of this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $description = 'This Block adds a quick view button to each product listing, allowing customers to preview products without leaving the current page.';

		/**
		* SVG Icon for this block.
		*
		* @access public
		* @since 1.0.0
		* @var string
		*/
		public $icon = '<svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 512 512"><path fill="#ffffff" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>';

		protected static $instance;

		protected $settings;

		protected static $attributes = [];
		public static $count = 1;

		protected $default_attributes;

		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function __construct(){
			parent::__construct();
			add_action( 'wc_booster_prepare_scripts', [ $this, 'inner_block_scripts' ], 10, 2 );
		}

		public function inner_block_scripts( $instance, $attrs ){
			// Style fix for those quick views inside carousel product block
			// because slick removes their ids when cloning it
			if( isset( $attrs[ 'enableQuickView' ] ) && $attrs[ 'enableQuickView' ] ){
				$qv_attrs = $instance->get_inner_block_attr( $this, $attrs[ 'block_id' ] );
				$qv_attrs[ 'block_id' ] = $attrs[ 'block_id' ];
				$this->__prepare_scripts( $qv_attrs, '.wc-booster-quick-view' );
			}
		}

		public function __prepare_scripts( $attrs, $wrapper = '' ){

			$left = $top = $iconSize = self::get_initial_responsive_props();

			$text_typo = self::get_initial_responsive_props();
			if( isset( $attrs[ 'textTypo' ] ) ){	
				$text_typo = self::get_typography_props(  $attrs[ 'textTypo' ] );
			}

			if( isset( $attrs[ 'left' ] ) ){
				$left = self::get_dimension_props( 'left',
					$attrs[ 'left' ]
				);
			}

			if( isset( $attrs[ 'top' ] ) ){
				$top = self::get_dimension_props( 'top',
					$attrs[ 'top' ]
				);
			}

			$padding = self::get_initial_responsive_props();

			if( isset( $attrs[ 'padding' ] ) ){
				$padding = self::get_dimension_props( 'padding',
					$attrs[ 'padding' ]
				);
			}

			foreach( self::$devices as $device ){

				$styles = [
					[
						'selector' => $wrapper,
						'props' => array_merge( $top[ $device ], $left[ $device ] )
					],
					[
						'selector' => $wrapper,
						'props' => $text_typo[ $device ]
					],
					[
						'selector' => '.wc-booster-quick-view-button i',
						'props' => $padding[ $device ]
					]
				];

				self::add_styles([
					'attrs' => $attrs,
					'css'   => $styles,
				], $device );
			}

			if ( $attrs[ 'enableTextOnHover' ] == 'visible' ) {
				$opacity = 1;
			} else {
				$opacity = 0;
			}

			$desktop_css = [
				[
					'selector' => $wrapper,
					'props' => array_merge(
						[
							'position' => 'iconPosition',
						]
					)
				],
				[
					'selector' => $wrapper,
					'props' => array_merge(
						[
							'color' => 'color',
						]
					)
				],
				[
					'selector' => '.wc-booster-quick-view-button i',
					'props' => array_merge(
						[
							'background-color' => 'bgColor',
							'border-radius' => [
								'unit' => '%',
								'value' => $attrs[ 'borderRadius' ]
							]
						]
					)
				],
				[
					'selector' => ['.wc-booster-quick-view-button:hover .quick-view-text', '.wc-booster-quick-view-button:hover .quick-view-text-left'],
					'props' => [
						'visibility' => 'enableTextOnHover'
					]
				],
				[
					'selector' => ['.wc-booster-quick-view-button:hover .quick-view-text', '.wc-booster-quick-view-button:hover .quick-view-text-left'],
					'props' => [
						'opacity' => [
							'unit' => '',
							'value' => $opacity
						]
					]
				]
			];

			self::add_styles( array(
				'attrs' => $attrs,
				'css'   => $desktop_css,
			));
		}

		public function prepare_scripts(){

			if( empty( self::$attributes ) ){
				return;
			}

			foreach( self::$attributes as $id => $attrs ){

				$attrs[ 'block_id' ] = $id;
				if( in_array( $attrs[ 'block_id' ], $this->block_ids ) ){
					continue;
				}

				$this->block_ids[] = $attrs[ 'block_id' ];
				$this->__prepare_scripts( $attrs );

				do_action( 'wc_booster_prepare_scripts', $this, $attrs );
			}
		}

		public function get_default_attributes() {
			return $this->default_attributes;
		}

		public function render( $attrs, $content, $block ){
			$this->default_attributes = $attrs;
			global $product;
			
			$post_id = isset( $block->context[ 'postId' ] ) ? $block->context[ 'postId' ] : '';
			
			$product = wc_get_product( $post_id );

			if( !$product )
				return;

			$id = "wc-booster-quick-view-instance-" . time() .'-' . self::$count;
		    // save attributes to print styles from prepare_scripts function
			self::$attributes[ $id ] = $attrs;
			
			$this->settings = WC_Booster_Settings::get_instance();
			ob_start();
			echo sprintf( 
			    '<div id="%s" class="wc-booster-quick-view" data-id="%s"><div class="wc-booster-quick-view-button"><span class="%s"><span>%s</span></span> <i class="fa fa-eye"></i></div></div>',
			    esc_attr( $id ),
			    esc_attr( $product->get_id() ),
			    ( $attrs['textPosition'] == 'left' ) ? 'quick-view-text-left' : 'quick-view-text',
			    esc_html__( 'Quick View', 'wc-booster' )
			);

			self::$count++;
			return ob_get_clean();

		}
	}

	WC_Booster_Quick_View_Block::get_instance();
}