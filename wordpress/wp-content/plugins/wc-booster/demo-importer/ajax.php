<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Ajax' ) ){
	class Ajax{

		public static $instance;

		public static function get_instance() {
		    if ( ! self::$instance ) {
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function __construct(){
			add_action( 'wp_ajax_wc_booster_fetch_demo', [ $this, 'fetch_demo' ] );
			add_action( 'wp_ajax_wc_booster_install_theme', [ $this, 'install_theme' ] );
			add_action( 'wp_ajax_wc_booster_import_posts', [ $this, 'import_posts' ] );
			add_action( 'wp_ajax_wc_booster_import_pages', [ $this, 'import_pages' ] );

			add_action( 'wp_ajax_wc_booster_import_product_categories', [ $this, 'import_product_categories' ] );
			add_action( 'wp_ajax_wc_booster_import_product_attributes', [ $this, 'import_product_attributes' ] );
			add_action( 'wp_ajax_wc_booster_import_products', [ $this, 'import_products' ] );

			add_action( 'wp_ajax_wc_booster_import_swatches', [ $this, 'import_swatches' ] );
			add_action( 'wp_ajax_wc_booster_clean_up', [ $this, 'clean_up' ] );

			add_action( 'wp_ajax_wc_booster_favourite', [ $this, 'favourite' ] );
			add_action( 'wp_ajax_wc_booster_favourite', [ $this, 'favourite' ] );

			add_filter( 'http_request_timeout', array( $this, 'bump_request_timeout' ) );
		}

		public function bump_request_timeout( $val ) {
			return 60;
		}

		public function get_site_id(){
			return absint( $_POST[ 'id' ] );
		}

		public function fetch_demo(){

			$data = [
				'status' => true,
				'message' => esc_html__( 'Fetched demo successfully.', 'wc-booster' )
			];

			try{
				$site_id = $this->get_site_id(); 
				$demo = Demo::get_instance()->get( $site_id );
			}catch( Exception $e ){
				$data[ 'status' ] = false;
				$data[ 'message' ] = $e->getMessage();
			}

			wp_send_json_success( $data );
		}

		public function get_site(){
			$file = File::get_instance();
			$file->set_current_site_id( $this->get_site_id() );
			$demo = $file->get( 'site-single' );
			$file->set_current_site_id( false );
			return $demo;
		}

		public function check_security(){

			check_ajax_referer( 'wc-booster-demo-imprter-ajax-nonce', 'security' );

			if( !current_user_can( 'manage_options' ) ){
				$messsage =  esc_html__( 'You are not allowed perform this action.', 'wc-booster' );
				wp_send_json_success([
					'status'  => false,
					'message' => $message
				]);
			}
		}

		public function install_theme(){

			$this->check_security();

			$data = [
				'status' => true,
				'message' => esc_html__( 'Theme installed successfully.', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo && is_array( $demo ) ){
				$installer = new Theme_Installer([
					'url'  => $demo[ 'url' ],
					'slug' => $demo[ 'slug' ],
					'site_logo' => $demo[ 'site_logo' ]
				]);

				$install = $installer->run();

				if( !$install ){
					$data[ 'status' ] = false;
					$data[ 'message' ] = esc_html__( 'Theme installation failed.', 'wc-booster' );
				}
			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Theme installation failed.', 'wc-booster' );
			}

			wp_send_json_success($data);
		}

		public function import_posts(){
			
			$this->check_security();

			$data = [
				'status' => true,
				'message' => esc_html__( 'Posts imported successfully.', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo ){
				$post = Post::get_instance();
				$post->import( $demo[ 'posts' ] );
			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import posts.', 'wc-booster' );
			}
							
			wp_send_json_success($data);
		}

		public function import_pages(){
			
			$this->check_security();

			$data = [
				'status' => true,
				'message' => esc_html__( 'Pages imported successfully.', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo ){

				$navigation = Navigation::get_instance();
				$navigation->import( $demo[ 'navigation' ] );

				$page = Page::get_instance();
				$page->import( $demo[ 'pages' ], $demo[ 'frontpage' ] );

				$wp_template_part = WP_Template_Part::get_instance();
				$wp_template_part->import( $demo[ 'wp_template_parts' ] );

				$wp_template = WP_Template::get_instance();
				$wp_template->import( $demo[ 'wp_templates' ] );

			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import pages.', 'wc-booster' );
			}
							
			wp_send_json_success($data);
		}

		public function import_product_categories(){

			$this->check_security();
			
			$data = [
				'status' => true,
				'message' => esc_html__( 'Product categories imported successfully', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo ){
				$product_category = Product_Category::get_instance();
				$product_category->import( $demo[ 'product_categories' ] );
				
			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import product categories.', 'wc-booster' );
			}

			wp_send_json_success($data);
		}

		public function import_product_attributes(){

			$this->check_security();
			
			$data = [
				'status' => true,
				'message' => esc_html__( 'Product attributes imported successfully', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo ){
				$product_attribute = Product_Attribute::get_instance();
				$product_attribute->import( $demo[ 'product_attributes' ] );
				
			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import product attributes.', 'wc-booster' );
			}

			wp_send_json_success($data);
		}

		public function import_products(){

			$this->check_security();
			
			$data = [
				'status' => true,
				'message' => ''
			];
			
			$demo = $this->get_site();
			if( $demo ){

				$page = absint( $_POST[ 'page' ] );
				$product = Product::get_instance();
				$per_page = 2;
				$total_products = count( $demo[ 'products' ] );

				$data[ 'total_page' ] = ceil( $total_products / $per_page );
				
				if( $page > 0 ){

					$offset = ( $page - 1 ) * $per_page;
					$products = array_slice( $demo[ 'products' ], $offset, $per_page );
					
					$product->import( $products );

					$completed = $data[ 'total_page' ] == $page ? $total_products : $page * $per_page;
					$data[ 'message' ] =  sprintf( esc_html__( 'Successfully imported %d out of %d products.', 'wc-booster' ), $completed, $total_products );
				}else{
					$data[ 'message' ] = sprintf( esc_html__( 'Found %d products.', 'wc-booster' ), $total_products );
				}

			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import products.', 'wc-booster' );
			}

			wp_send_json_success( $data );
		}

		public function import_swatches(){

			$this->check_security();
			
			$data = [
				'status' => true,
				'message' => esc_html__( 'Swatches imported successfully', 'wc-booster' )
			];

			$demo = $this->get_site();
			if( $demo ){
				$swatches = Swatches::get_instance();
				$swatches->import( $demo[ 'swatches' ] );
			}else{
				$data[ 'status' ] = false;
				$data[ 'message' ] = esc_html__( 'Failed to import swatches.', 'wc-booster' );
			}

			wp_send_json_success($data);
		}

		public function clean_up(){

			$file = File::get_instance();
			$file->clean_up();
			
			$data = [
				'status' => true,
				'message' => esc_html__( 'Cleaned up successfully.', 'wc-booster' )
			];

			wp_send_json_success($data);
		}

		public function favourite(){
			
			check_ajax_referer( 'wc-booster-demo-imprter-ajax-nonce', 'security' );
			$data = [
				'status' => true,
				'message' => ''
			];
			if( !current_user_can( 'manage_options' ) ){
				$data[ 'status' ] = false;
				$data[ 'message' ] =  esc_html__( 'You are not allowed perform this action.', 'wc-booster' );
				wp_send_json_success($data);
			}

			$site_id = $this->get_site_id();
			$action = $_POST[ 'type' ];

			$fav = Favourite::get_instance();
			if( 'add' == $action ){
				$fav->add( $site_id );
				$data[ 'message' ] = esc_html__( 'Added', 'wc-booster' );
			}else if( 'remove' == $action ){
				$fav->remove( $site_id );
				$data[ 'message' ] = esc_html__( 'Removed', 'wc-booster' );
			}

			wp_send_json_success( $data );
		}
	}
	
	Ajax::get_instance();
}
