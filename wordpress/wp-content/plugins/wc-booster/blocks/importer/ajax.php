<?php 
namespace WC_Booster_Demo_Block_Importer;

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
			add_action( 'wp_ajax_wc_booster_fetch_front_page_demo', [ $this, 'fetch_front_page_demo' ] );
			add_action( 'wp_ajax_nopriv_wc_booster_fetch_front_page_demo', [ $this, 'fetch_front_page_demo' ] );

			add_action( 'wp_ajax_wc_booster_fetch_single_product_demo', [ $this, 'fetch_single_product_demo' ] );
			add_action( 'wp_ajax_nopriv_wc_booster_fetch_single_product_demo', [ $this, 'fetch_single_product_demo' ] );

			add_action( 'wp_ajax_wc_booster_fetch_pattern_demo', [ $this, 'fetch_pattern_demo' ] );
			add_action( 'wp_ajax_nopriv_wc_booster_fetch_pattern_demo', [ $this, 'fetch_pattern_demo' ] );

			add_action( 'wp_ajax_wc_booster_refresh_demo_data', [ $this, 'refresh_demo_data' ] );
			add_action( 'wp_ajax_wc_booster_nopriv_refresh_demo_data', [ $this, 'refresh_demo_data' ] );

			add_action( 'wp_ajax_wc_booster_fetch_user_favourite_demo', [ $this, 'fetch_user_favourite_demo' ] );
			add_action( 'wp_ajax_nopriv_wc_booster_fetch_user_favourite_demo', [ $this, 'fetch_user_favourite_demo' ] );
		}

		public function fetch_front_page_demo(){
			$data = Demo::get_instance()->get('front-page');
			wp_send_json_success( $data );
		}

		public function fetch_single_product_demo(){
			$data = Demo::get_instance()->get( 'single-product', 'wc-booster-api/v1/wp-template');
			wp_send_json_success( $data );
		}

		public function fetch_pattern_demo(){
			$data = Demo::get_instance()->get('pattern', 'wp/v2/single_block_demo?demo_category=17&_embed=true&per_page=100&order=desc&orderby=date');
			wp_send_json_success( $data );
		}

		public function refresh_demo_data() {
			$file = File::get_instance();
			$http = Http::get_instance();

			$endpoints = [
				'wc-booster-api/v1/wp-template' => 'single-product',
				'wp/v2/single_block_demo?demo_category=17&_embed=true&per_page=100&order=desc&orderby=date' => 'pattern',
				'wp/v2/single_block_demo?demo_category=16&_embed=true&per_page=100&order=desc&orderby=date' => 'front-page',
			];

			foreach ($endpoints as $endpoint => $filename) {
				$response = $http->get($endpoint);
				$file->save($response, $filename);
			}
		}


		public function fetch_user_favourite_demo() {
		    $file = File::get_instance();
		    $types = ['front-page', 'pattern', 'single-product'];

		    $all_demos = [];

		    foreach ($types as $type) {
		        $demos = $file->get($type);

		        if ($demos) {
		            $all_demos = array_merge($all_demos, $demos);
		        }
		    }

		    if (!empty($all_demos)) {
		        $data = [
		            'demos' => $all_demos
		        ];
		    } else {
		        // If no demos were found
		        $data = [
		            'message' => 'No demos found.'
		        ];
		    }

		    wp_send_json_success($data);
		}
	}
	
	Ajax::get_instance();
}
