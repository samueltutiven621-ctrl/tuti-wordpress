<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Post' ) ){
	class Post{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function import( $posts ){

			if( !is_array( $posts ) ){
				return;
			}

			$attachment = Attachment::get_instance();

			foreach( $posts as $post ){

				if( $post[ 'post_status' ] != 'publish' ){
					continue;
				}
				
				$id = wp_insert_post([
					'post_title' => sanitize_text_field( $post[ 'post_title' ] ),
					'post_excerpt' => wp_kses_post( $post[ 'post_excerpt' ] ),
					'post_status' => 'publish',
					'post_type' => 'post',
					'post_name' => sanitize_text_field( $post[ 'post_name' ] ),
					'post_content' => wp_kses_post( $post[ 'post_content' ] ),
				]);

				if( is_wp_error( $id ) ){
		            continue;
		        }

		        if( $post[ 'thumbnail' ] ){
		        	$attachment->save( $post[ 'thumbnail' ], $id );
		        }
			}
		}
	}
}