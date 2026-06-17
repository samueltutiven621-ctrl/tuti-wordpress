<?php 
namespace WC_Booster_Demo_Block_Importer;

if( !class_exists( 'File' ) ){
	class File{

		public static $instance;

		public $type = [ 'pattern', 'front-page', 'single-product', 'favourite' ];

		protected $current_site_id = false;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function get_path( $type ){
			return WC_Booster_Path . "blocks/importer/data/{$type}.json";
		}

		public function save( $data, $type ){
			$path = $this->get_path( $type );
			if( is_array( $data ) ){
				file_put_contents( $path, print_r( json_encode( $data ), true ) );
			}
		}

		public function get( $type ){
			
			$path = $this->get_path( $type );
			$data = [];

			if( file_exists( $path ) ){
				$data = file_get_contents( $path );
				try{
					$data = json_decode( $data, true );
				}catch( Exception $e ){
					$data = [];
				}
			}

			return $data;
		}

		public function unlink( $type ){
			$path = $this->get_path( $type );
			if( file_exists( $path ) ){
				unlink( $path );
			}
		}
	}
}