<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Dynamic_Id_Mapper' ) ){
	class Dynamic_Id_Mapper{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function process( $blocks, $maps ){
			
		    foreach( $blocks as &$block ){
		    	
		        if( !empty( $block[ 'attrs' ] ) ){

		        	switch( $block[ 'blockName' ] ){
		        		case 'core/navigation':
		        			if( !empty( $block[ 'attrs' ][ 'ref' ] ) ){
		        				$demo_id = $block[ 'attrs' ][ 'ref' ];
		        				if( isset( $maps[ 'navigation' ][ $demo_id ] ) ){
		        				    $block[ 'attrs' ][ 'ref' ] = $maps[ 'navigation' ][ $demo_id ];
		        				}
		        			}
		        		break;

		        		case 'wc-booster/carousel-product':
		        			if( !empty( $block[ 'attrs' ][ 'categories' ] ) ){
		        				$demo_id = $block[ 'attrs' ][ 'categories' ];
		        				if( isset( $maps[ 'product_category' ][ $demo_id ] ) ){
		        				    $block[ 'attrs' ][ 'categories' ] = $maps[ 'product_category' ][ $demo_id ];
		        				}
		        			}
		        		break;

		        		case 'wc-booster-pro/carousel-category':
		        		case 'wc-booster-pro/carousel-category-product':
		        		case 'wc-booster/category-collage':
		        			if( !empty( $block[ 'attrs' ][ 'cat_id' ] ) ){
				            	try{

				            		$new_c = [];
				            		$cat_ids = json_decode( $block[ 'attrs' ][ 'cat_id' ], true );
				            		
				            		foreach( $cat_ids as $cat_id ){
				            			if( isset( $maps[ 'product_category' ][ $cat_id[ "id" ] ] ) ){
				            				$id = absint( $maps[ 'product_category' ][ $cat_id[ "id" ] ] );

					            			$new_c[] = [
					            				"id" => $id,
					            			];
				            			}
				            		}

				            		$block[ 'attrs' ][ 'cat_id' ] = json_encode( $new_c );

				            	}catch(Exception $e){

				            	}
		        			}
		        		break;

		        		case 'wc-booster-pro/product-collage':
		        			if( !empty( $block[ 'attrs' ][ 'product_id' ] ) ){
				            	try{

				            		$new_c = [];
				            		$product_ids = json_decode( $block[ 'attrs' ][ 'product_id' ], true );

				            		foreach( $product_ids as $product ){
				            			if( isset( $maps[ 'product' ][ $product[ "id" ] ] ) ){
				            				
				            				$id = absint( $maps[ 'product' ][ $product[ "id" ] ] );
					            			
					            			$new_c[] = [
					            				"id" => $id
					            			];
				            			}
				            		}

				            		$block[ 'attrs' ][ 'product_id' ] = json_encode( $new_c );

				            	}catch(Exception $e){

				            	}
		        			}
				        break;

		        		case 'wc-booster/product-review':

		        			if( !empty( $block[ 'attrs' ][ 'product_id' ] ) ){
				            	try{

				            		$new_c = [];
				            		$product_ids = json_decode( $block[ 'attrs' ][ 'product_id' ], true );

				            		foreach( $product_ids as $product ){
				            			if( isset( $maps[ 'product' ][ $product[ "id" ] ] ) ){
				            				
				            				$id = absint( $maps[ 'product' ][ $product[ "id" ] ] );
					            			
					            			$new_c[] = [
					            				"id" => $id,
					            				"review_id" => 1
					            			];
				            			}
				            		}

				            		$block[ 'attrs' ][ 'product_id' ] = json_encode( $new_c );

				            	}catch(Exception $e){

				            	}
		        			}

		        		break;

		        		case 'wc-booster-pro/product-toggler':
		        			if( !empty( $block[ 'attrs' ][ 'categories' ] ) ){
		        				$demo_id = $block[ 'attrs' ][ 'categories' ];
		        				if( isset( $maps[ 'product_category' ][ $demo_id ] ) ){
		        				    $block[ 'attrs' ][ 'categories' ] = $maps[ 'product_category' ][ $demo_id ];
		        				}
		        			}
		        		break;

		        		case 'core/query':
		        			if( !empty( $block[ 'attrs' ][ 'query' ][ 'taxQuery' ][ 'product_cat' ] ) ){
		        				$new_cat_ids = [];
		        				$demo_cat_ids = $block[ 'attrs' ][ 'query' ][ 'taxQuery' ][ 'product_cat' ];
		        				if( is_array( $demo_cat_ids ) ){
		        					foreach( $demo_cat_ids as $cat_id ){
		        						if( isset( $maps[ 'product_category' ][ $cat_id ] ) ){
		        							$new_cat_ids[] = $maps[ 'product_category' ][ $cat_id ];
		        						}
		        					}

		        					$block[ 'attrs' ][ 'query' ][ 'taxQuery' ][ 'product_cat' ] = $new_cat_ids;
		        				}
		        			}
		        		break;
		        	}
		        }

		        if( !empty( $block[ 'innerBlocks' ] ) ){
		            $block[ 'innerBlocks' ] = $this->process( $block[ 'innerBlocks' ], $maps );
		        }
		    }

		    return $blocks;
		}

		public function resolve( $content ){
			$file = File::get_instance();
			$maps = [
				'product_category' => $file->get( 'product-category' ),
				'navigation' => $file->get( 'navigation' ),
				'product' => $file->get( 'product' ),
				'comment' => $file->get( 'comment' )
			];

			$blocks = parse_blocks( $content );
			if( ! is_array( $blocks ) ){
				return $content;
			}

			$blocks = $this->process( $blocks, $maps );

			return serialize_blocks( $blocks );
		}
	}
}