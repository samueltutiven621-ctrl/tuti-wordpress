<?php 
namespace WC_Booster_Demo_Block_Importer;

if( !class_exists( 'Demo' ) ){
	class Demo{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function __construct(){
			$this->get('front-page');
		}

		public function get( $type, $id = false ){

			$file = File::get_instance();
			$http = Http::get_instance();

			try{
				$slug = 'wp/v2/single_block_demo?demo_category=16&_embed=true&per_page=100&order=desc&orderby=date';
				if( $id ){
					$demos = $file->get( $type );
					if( empty( $demos ) ){
						$demos = $http->get( $id );
						$file->save( $demos, $type );
					}
				}else{
					$demos = $file->get( 'front-page' );
					if( empty( $demos ) ){
						$demos = $http->get( $slug );
						$file->save( $demos, 'front-page' );
					}
				}
			}catch( Exception $e ){
				$demos = false;
			}

			return $demos;
		}
	}

	Demo::get_instance();
}