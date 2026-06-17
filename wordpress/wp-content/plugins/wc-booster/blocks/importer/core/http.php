<?php 
namespace WC_Booster_Demo_Block_Importer;

if( !class_exists( 'Http' ) ){
	class Http{

		public static $instance;

		public $endpoint = "https://demos.wcbooster.com/wp-json";

		public static function get_instance(){

		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function get( $slug ){

			$response = wp_remote_get( $this->endpoint . '/' . $slug );
			if( is_wp_error( $response ) ){
	            return false;
	        }

	        $response = json_decode( wp_remote_retrieve_body( $response ), true );
	        
	        return $response;
		}
	}
}