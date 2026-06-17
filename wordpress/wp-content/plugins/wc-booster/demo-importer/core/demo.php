<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Demo' ) ){
	class Demo{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function get( $id = false ){

			$file = File::get_instance();
			$http = Http::get_instance();

			try{
				
				# Check if 24 hours have passed to unlink the 'site' file
				$last_unlink_time = get_option( 'last_demo_unlink_time', 0 );
				$current_time = time();

				# Check if 24 hours have passed or if refresh is requested
				if ( isset( $_GET['refresh'] ) || ($current_time - $last_unlink_time >= 86400) ) {
					$file->unlink( 'site' );
					update_option( 'last_demo_unlink_time', $current_time );
				}

				$slug = 'demo';
				if( $id ){
					$file->set_current_site_id( $id );
					$demos = $file->get( 'site-single' );
					if( empty( $demos ) ){
						$demos = $http->get( $slug . '/' . $id );
						$file->save( $demos, 'site-single' );
					}
					$file->set_current_site_id( false );
				}else{
					
					$demos = $file->get( 'site' );
					if( empty( $demos ) ){
						$demos = $http->get( $slug );
						$file->save( $demos, 'site' );
					}
				}
			}catch( Exception $e ){
				$demos = false;
			}

			return $demos;
		}
	}
}