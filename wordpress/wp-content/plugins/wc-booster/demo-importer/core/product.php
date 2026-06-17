<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Product' ) ){
	class Product{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function create( $data ){
			
	        $product = $data[ 'type' ] === 'variable' ? new \WC_Product_Variable() : new \WC_Product_Simple();
	        
	        $attachment = Attachment::get_instance();

	        $product->set_name( $data[ 'name' ] );
	        if( !empty( $data[ 'sku' ] ) ){
	        	$product->set_sku( $data[ 'sku' ] );
	        }
            $product->set_regular_price( $data[ 'price' ] );
            $product->set_description( $data[ 'description' ] ?? '');
            $product->set_short_description( $data[ 'short_description' ] );

            if( !empty( $data[ 'featured_image' ] ) ){
                $featured_image_id = $attachment->save( $data[ 'featured_image' ] );
                if( $featured_image_id ){
                    $product->set_image_id( $featured_image_id );
                }
            }

            if( !empty( $data[ 'gallery_images' ] ) ){
                $gallery_ids = [];
                foreach( $data[ 'gallery_images' ] as $gallery_image ){
                    $gallery_id = $attachment->save( $gallery_image );
                    if( $gallery_id ){
                        $gallery_ids[] = $gallery_id;
                    }
                }
                $product->set_gallery_image_ids( $gallery_ids );
            }

	        return $product;
		}

		public function get_attributes( $data, $product_id ){
	    	$attributes = [];
            foreach( $data as $taxonomy => $terms ){
            	
            	$term_slugs = $options = [];
	            foreach( $terms as $term ){
	            	$term_slugs[] = $term[ 'slug' ];
	            	$options[] = $term[ 'name' ];
	            }

	            wp_set_object_terms( $product_id, $term_slugs, $taxonomy );
	            
            	$attribute = new \WC_Product_Attribute();
            	$tax_id = wc_attribute_taxonomy_id_by_name( $taxonomy );
            	
    	        $attribute->set_id( $tax_id );
    	        $attribute->set_name( $taxonomy );
    	        $attribute->set_options( $options );
    	        $attribute->set_visible( true );
    	        $attribute->set_variation( true );

    	        $attributes[ $taxonomy ] = $attribute;
            }

            return $attributes;
		}

		public function create_variations( $data, $product_id ){

			if( !is_array( $data ) ){
			    return;
			}

			$attachment = Attachment::get_instance();

			foreach( $data as $variation_data ){

			    $variation = new \WC_Product_Variation();

			    $variation->set_parent_id( $product_id );
			    $variation->set_regular_price( $variation_data[ 'price' ] );

			    $attributes = [];
			    foreach( $variation_data[ 'attributes' ] as $taxonomy => $term_slug ) {
			        $attributes[ $taxonomy ] = $term_slug;
			    }

			    $variation->set_attributes( $attributes );

			    $image = $variation_data[ 'featured_image' ];
			    if( !empty( $image ) ){
			    	$image_id = $attachment->save( $image );
			    	if( $image_id ){
			    	    $variation->set_image_id( $image_id );
			    	}
			    }

			    $variation->save();
			}
		}

		public function import( $products ){

		    if( !is_array( $products ) ){
		        return;
		    }

		    $file = File::get_instance();

		    $product_maps = [];
		    foreach( $products as $product_data ){
		    	
		    	if( !empty( $product_data[ 'sku' ] ) ){
			    	$product_id = wc_get_product_id_by_sku( $product_data[ 'sku' ] );
		            if( $product_id ){
		            	continue;
			    	}
	            }
	            
		    	$product = $this->create( $product_data );

	            if( is_array( $product_data[ 'meta' ] ) ){
	            	foreach( $product_data[ 'meta' ] as $meta ){
	            		
	            		$meta_value = maybe_unserialize( $meta[ 'meta_value' ] );
	            		
	            		if( is_string( $meta_value ) ){
	            			$meta_value = wp_kses_post( $meta_value );
	            		}

	            		$product->update_meta_data( $meta[ 'meta_key' ], $meta_value );
	            	}
	            }

	            $product_id = $product->save();

	            if( !empty( $product_data[ 'categories' ] ) ){
	            	
	            	$term_slugs = [];
	            	foreach( $product_data[ 'categories' ] as $category ){
	            		$term_slugs[] = $category[ 'slug' ];	            		
	            	}

	            	if( count( $term_slugs ) > 0 ){
	            		wp_set_object_terms( $product_id, $term_slugs, 'product_cat' );
	            	}
	            }

	            if( $product_data[ 'type' ] === 'variable' && !empty( $product_data[ 'variations' ] ) ){

    		    	$attributes = $this->get_attributes( $product_data[ 'attributes' ], $product_id );

    	            $product->set_attributes( $attributes );

    	            $default_attributes = $product_data[ 'default_attributes' ];
    	            if( $default_attributes ){
    	            	$product->set_default_attributes( $default_attributes );
    	            }

	                $this->create_variations( $product_data[ 'variations' ], $product_id );
	               
	            }

	            if( is_array( $product_data[ 'reviews' ] ) ){
	            	$total_ratings = 0;
	            	foreach( $product_data[ 'reviews' ] as $review ){
	            		
	            		$comment = [
            		        'comment_post_ID'      => $product_id,
            		        'comment_author'       => sanitize_text_field( get_bloginfo( 'name' ) ),
            		        'comment_author_email' => get_bloginfo( 'admin_email' ),
            		        'comment_content'      => sanitize_textarea_field( $review[ 'content' ] ),
            		        'comment_type'         => 'review',
            		        'comment_approved'     => 1,
            		    ];

            		    $comment_id = wp_insert_comment( $comment );

            		    if ( !is_wp_error( $comment_id ) ) {
            		    	$rating = intval( $review[ 'rating' ] );
            		    	$total_ratings += $rating;
        		            update_comment_meta( $comment_id, 'rating', $rating );
        		        }
	            	}

        		    $product->set_average_rating( $total_ratings );
	            }

	            $product->save();

	            $product_maps[ $product_data[ 'id' ] ] = $product_id;
		    }

		    $file->save( $product_maps, 'product' );

		}
	}
}