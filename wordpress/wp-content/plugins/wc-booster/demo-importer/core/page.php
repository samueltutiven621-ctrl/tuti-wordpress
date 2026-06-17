<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Page' ) ){
	class Page{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function import( $pages, $frontpage_id ){
			if( is_array( $pages ) ){
				foreach( $pages as $page ){
					if( $page[ 'post_status' ] != 'publish' ){
						continue;
					}

					$exist = get_posts([
						'name'           => $page[ 'post_name' ],
						'post_type'      => 'page',
						'post_status'    => 'publish',
						'posts_per_page' => 1
					]);

					if( $exist ){
						$id = absint( $exist[0]->ID );
						wp_update_post([
							'ID' => $id,
							'post_title'   => sanitize_text_field( $page[ 'post_title' ] ),
							'post_excerpt' => wp_kses_post( $page[ 'post_excerpt' ] ),
							'post_content' => wp_kses_post( $page[ 'post_content' ] )
						]);
					}else{

						$id = wp_insert_post([
							'post_title' => sanitize_text_field( $page[ 'post_title' ] ),
							'post_excerpt' => wp_kses_post( $page[ 'post_excerpt' ] ),
							'post_status' => 'publish',
							'post_type' => 'page',
							'post_name' => sanitize_text_field( $page[ 'post_name' ] ),
							'post_content' => wp_kses_post( $page[ 'post_content' ] ),
						]);
					}

					if( is_wp_error( $id ) ){
			            continue;
			        }

			        if( $frontpage_id == $page[ 'ID' ] ){
		        		update_option( 'page_on_front', $id );
		        		update_option( 'show_on_front', 'page' );
			        }

			        if( $page[ 'thumbnail' ] ){
			        	$attachment->save( $page[ 'thumbnail' ], $id );
			        }
				}
			}
		}
	}
}