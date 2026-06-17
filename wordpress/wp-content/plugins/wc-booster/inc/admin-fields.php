<?php 
if( !class_exists( 'WC_Booster_Admin_Fields' ) ){
	class WC_Booster_Admin_Fields{

		public static $instance;

		public static function get_instance() {
		    if ( ! self::$instance ) {
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function __construct(){
			add_filter( 'wc_booster_admin_fields', [ $this, 'fields' ] );
		}

		public function fields( $fields ){
			return [
				'general' => [
					'label' => esc_html( 'General', 'wc-booster' ),
					'fields' => [
						'divider_1' => [
							'label' => esc_html__( 'Custom Quantity Input', 'wc-booster' ),
							'type'  => 'divider'
						],
						'enable_custom_qty_button' => [
							'label' => esc_html__( 'Enable', 'wc-booster' ),
							'type'  => 'checkbox',
							'description' => esc_html__( 'Enable this option to allow customers to modify the order quantity through various carts - Mini Cart, Shopping Cart, and during the checkout as well.', 'wc-booster' )
						],
						'custom_qty_button_layout' => [
							'label' => esc_html__( 'Layout', 'wc-booster' ),
							'type'  => 'select',
							'choices' => [
								'default'  => esc_html__( 'Default', 'wc-booster' ),
								'vertical' => esc_html__( 'Vertical', 'wc-booster' )
							],
							'is_pro' => true,
							'description' => esc_html__( 'Choose layout for the Custom Quantity Input.', 'wc-booster' )
						]
					]
				],
				'product_page' => [
					'label' => esc_html__( 'Product', 'wc-booster' ),
					'fields' => [
						'divider_1' => [
							'label' => esc_html__( 'Cart', 'wc-booster' ),
							'type'  => 'divider'
						],
						'enable_sticky_add_to_cart' => [
							'label'   => esc_html__( 'Sticky', 'wc-booster' ),
							'type'    => 'checkbox',
							'description' => esc_html__( 'Enable this option to display the cart in the bottom of the product page.', 'wc-booster' )
						],
						'add_to_cart_text' => [
							'label'   => esc_html__( 'Label', 'wc-booster' ),
							'type'    => 'text',
							'default' => 'Add to Cart',
							'description' => esc_html__( 'Insert the Cart Button Label ( button text ).', 'wc-booster' )
						],
						'divider_3' => [
							'label' => esc_html__( 'Bulk Variation', 'wc-booster' ),
							'type'  => 'divider'
						],
						'enable_bulk_variation' => [
							'label'  => esc_html__( 'Enable', 'wc-booster' ),
							'type'   => 'checkbox',
							'is_pro' => true,
							'description' => esc_html__( 'Enable this option to allow customers to order multiple quantities of the same product with variations.', 'wc-booster' )
						],
/*						'bulk_variation_layout' => [
							'label'   => esc_html__( 'Layout', 'wc-booster' ),
							'type'    => 'select',
							'choices' => [
								'default' => esc_html__( 'Default', 'wc-booster' )
							],
							'description' => esc_html__( 'Choose the layout of the variation section displayed in product page.', 'wc-booster' )
						],*/
						'hide_out_of_stock' => [
							'label' => esc_html__( 'Hide out of stock', 'wc-booster' ),
							'type' => 'checkbox',
							'description' => esc_html__( 'Enable this section to hide the products that are out of stock.', 'wc-booster' )
						],
						'divider_4' => [
							'label' => esc_html__( 'Specification', 'wc-booster' ),
							'type'  => 'divider'
						],
						'enable_specification' => [
							'label' => esc_html__( 'Enable', 'wc-booster' ),
							'type'  => 'checkbox',
							'description' => esc_html__( 'Enable product specification on the each product on the product page.', 'wc-booster' )
						]
					]
				],
				'checkout' => [
					'label' => esc_html__( 'Checkout', 'wc-booster' ),
					'fields' => [
						'divider_1' => [
							'label' => esc_html__( 'General', 'wc-booster' ),
							'type'  => 'divider'
						],
						'disable_checkout_customization' => [
							'label' => esc_html__( 'Disable Customization', 'wc-booster' ),
							'type'  => 'checkbox',
						],
						/*'shortcode' => [
							'label'       => esc_html__( 'Shortcode', 'wc-booster' ),
							'type'        => 'copy',
							'description' => '[wc_booster_checkout]',
							'tooltip' => esc_html__( 'Paste this shortcode in the checkout page.', 'wc-booster' )  
						],
						'checkout_layout' => [
							'label' => esc_html__( 'Layout', 'wc-booster' ),
							'type'  => 'select',
							'choices' => [
								'default' => 'Default',
								'multistep' => 'Multistep ( Pro )'
							],
							'description' => esc_html__( 'Choose layout of the checkout.', 'wc-booster' )
						],
*/						
						'enable_add_to_cart_checkout_redirect' => [
							'label' => esc_html__( 'Direct Checkout', 'wc-booster' ),
							'type'  => 'checkbox',
							'description' => esc_html__( 'Enable this option to redirect to checkout page after adding to the cart.', 'wc-booster' )
						],
						/**********************/
						'divider_2' => [
							'label' => esc_html__( 'Label', 'wc-booster' ),
							'type'  => 'divider'
						],
						'cart_title' => [
							'label'   => esc_html__( 'Cart', 'wc-booster' ),
							'type'    => 'text',
							'default' => 'Your Cart',
							'description' => esc_html__( 'Insert the title of the cart.', 'wc-booster' )
						],
						/*'payment_method_title' => [
							'label'   => esc_html__( 'Payment Method', 'wc-booster' ),
							'type'    => 'text',
							'default' => 'How do you want to pay?',
							'description' => esc_html__( 'Insert the title of the payment method section.', 'wc-booster' )
						],*/
						/**********************/
						'divider_3' => [
							'label' => esc_html__( 'Upsells', 'wc-booster' ),
							'type'  => 'divider'
						],
						'enable_upsells' => [
							'label'  => esc_html__( 'Enable', 'wc-booster' ),
							'type'   => 'checkbox',
							'is_pro' => true,
							'description' => esc_html__( 'Enable this option to provide product recommendation aligned with interested products.', 'wc-booster' )
						],
						'upsells_heading' => [
							'label'   => esc_html__( 'Heading', 'wc-booster' ),
							'type'    => 'text',
							'default' => esc_html__( 'You may also like this', 'wc-booster' ),
							'is_pro'  => true,
							'description' => esc_html__( 'Insert heading for the upsells section.', 'wc-booster' )
						]
					]
				],
				'wishlist' => [
					'label' => esc_html__( 'Wishlist', 'wc-booster' ),
					'fields' => [
						'divider_1' => [
							'label' => esc_html__( 'General', 'wc-booster' ),
							'type'  => 'divider'
						],
						'wishlist_page_id' => [
							'label' => esc_html__( 'Assign wishlist page', 'wc-booster' ),
							'type'  => 'dropdown-pages',
							'description' => esc_html__( 'Assign a page to display the list of wishlist and also add a ( Wish List Table ) block to that page', 'wc-booster' )
						]
					]
				]
			];
		}
	}

	WC_Booster_Admin_Fields::get_instance();
}