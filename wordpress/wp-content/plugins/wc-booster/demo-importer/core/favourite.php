<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Favourite' ) ){
	class Favourite{

		public static $instance;

		public $key = 'wc_booster_favourite_demo_site_id';

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function __construct(){
			$this->http = Http::get_instance();
		}

		public function get(){
			$data = get_option( $this->key, [] );
			return $data;
		}

		public function add( $id ){

			$data = $this->get();

			$data[] = $id;
			$data = array_unique($data);

			update_option( $this->key, $data );
		}

		public function remove( $id ){

			$data = $this->get();
			$data = array_diff( $data, [ $id ] );

			update_option( $this->key, $data );
		}
	}
}