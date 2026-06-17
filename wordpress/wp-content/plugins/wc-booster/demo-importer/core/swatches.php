<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Swatches' ) ){
	class Swatches{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function import( $swatches ){

			if( !is_array( $swatches ) ){
				return;
			}

			$attachment = Attachment::get_instance();

			foreach( $swatches as $taxonomy => $terms ){

				$type = $terms[ 'type' ];
				update_option( "wc_booster_swatches_{$taxonomy}", $type );
				update_option( "wc_booster_swatches_{$taxonomy}_show_label", $terms[ 'show_label' ] );

				foreach( $terms[ 'terms' ] as $term_data ){
					$term = get_term_by( 'slug', $term_data[ 'slug' ], $taxonomy );

					if( $term ){
						$term_id = $term->term_id;

						switch( $type ){
				    		case 'color':
				    			$color = $term_data[ 'color' ];
				    		    update_term_meta( $term_id, 'swatches_color', $color );
				    		break;

				    		case 'image':
				    			$attachment_id = $attachment->save( $term_data[ 'image' ] );
				    			if( $attachment_id ){
				    				update_term_meta( $term_id, 'swatches_attachment_id', $attachment_id );
				    			}
				    		break;

				    		default:

				    		break;
				    	}
					}
				}
			}
		}
	}
}