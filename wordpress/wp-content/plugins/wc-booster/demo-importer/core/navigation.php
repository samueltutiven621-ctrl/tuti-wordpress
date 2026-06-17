<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Navigation' ) ){
	class Navigation{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function import( $navigations ){

			if( !is_array( $navigations ) ){
				return;
			}

			$file = File::get_instance();
			
			$mappings = [];
			foreach( $navigations as $nav ){

				$existing_menu = get_posts([
		            'post_type'   => 'wp_navigation',
		            'post_status' => 'publish',
		        ]);

		        $content = $nav[ 'post_content' ];

				if( $existing_menu ){
					$id = absint( $existing_menu[ 0 ]->ID );
					wp_update_post([
					    'ID'           => $id,
					    'post_title'   => sanitize_text_field( $nav[ 'post_title' ] ),
					    'post_content' => wp_kses_post( $content ),
					]);
		        }else {
		            $id = wp_insert_post([
		                'post_title'   => sanitize_text_field( $nav[ 'post_title' ] ),
		                'post_content' => wp_kses_post( $content ),
		                'post_name'    => $nav[ 'post_name' ],
		                'post_status'  => 'publish',
		                'post_type'    => 'wp_navigation',
		            ]);
		        }

		        $mappings[ $nav[ 'id' ] ] = $id;
			}

			$file->save( $mappings, 'navigation' );
		}
	}
}