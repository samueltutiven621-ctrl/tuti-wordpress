<?php
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Product_Category' ) ){
    class Product_Category {

        public static $instance;

        public static function get_instance() {
            if( ! self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }


        public function import( $terms ) {

            $taxonomy = 'product_cat';
            $attachment = Attachment::get_instance();
            $file = File::get_instance();

            $product_categories_mapping = []; # demo id => db id
            foreach( $terms as $term ){
                $exist = term_exists( $term[ 'slug' ], $taxonomy );
                if( $exist ){
                    $product_categories_mapping[ $term[ 'id' ] ] = absint( $exist[ 'term_id' ] );
                }else{
                    $new_term = wp_insert_term( $term[ 'name' ], $taxonomy, [ 'slug' => $term[ 'slug' ] ] );

                    if( !is_wp_error( $new_term ) ){
                        if( !empty( $term[ 'image' ] ) ){
                            $attachment_id = $attachment->save( $term[ 'image' ] );
                            if( $attachment_id ){
                                $thumbnail_id = update_term_meta( $new_term[ 'term_id' ], 'thumbnail_id', $attachment_id );
                            }
                        }
                        $product_categories_mapping[ $term[ 'id' ] ] = absint( $new_term[ 'term_id' ] );
                    }
                }
            }

            $file->save( $product_categories_mapping, 'product-category' );
        }
    }
}
