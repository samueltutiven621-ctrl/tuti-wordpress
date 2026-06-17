<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'WP_Template_Part' ) ){
	class WP_Template_Part{

		public static $instance;

		public static $post_type = 'wp_template_part';

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}	

		public function import( $pages ){
			if( !is_array( $pages ) ){
				return;
			}
			
			$mapper = Dynamic_Id_Mapper::get_instance();

			$theme_slug = wp_get_theme()->get_stylesheet();

			foreach( $pages as $page ){

				if( $page[ 'post_status' ] != 'publish' ){
					continue;
				}

				$exist = get_posts([
					'name'           => $page[ 'post_name' ],
					'post_type'      => self::$post_type,
					'post_status'    => 'publish',
					'posts_per_page' => 1
				]);

				$content = $mapper->resolve( $page[ 'post_content' ] );
				
				if( $exist ){
					$post_id = absint( $exist[0]->ID );
					wp_update_post([
						'ID' => $post_id,
						'post_content' => wp_kses_post( $content ),
						'post_title'   => sanitize_text_field( $page[ 'post_title' ] ),

					]);
				}else{
					$post_id = wp_insert_post([
						'post_title'   => sanitize_text_field( $page[ 'post_title' ] ),
						'post_excerpt' => wp_kses_post( $page[ 'post_excerpt' ] ),
						'post_status'  => 'publish',
						'post_type'    => self::$post_type,
						'post_name'    => sanitize_text_field( $page[ 'post_name' ] ),
						'post_content' => wp_kses_post( $content )
					]);
				}

				wp_set_object_terms( $post_id, $theme_slug, 'wp_theme' );
			}
		}
	}
}