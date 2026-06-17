<?php
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Product_Attribute' ) ){
    class Product_Attribute {

        public static $instance;

        public static function get_instance() {
            if( ! self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function exist( $slug ){
            $existing = false;
            foreach( $this->taxonomies as $taxonomy ) {
                if( $taxonomy->attribute_name === $slug ){
                    $existing = true;
                    break;
                }
            }

            return $existing;
        }

        public function import( $product_attributes ) {

            $this->taxonomies = wc_get_attribute_taxonomies();

            foreach( $product_attributes as $data ) {

                $taxonomy = wc_attribute_taxonomy_name( $data[ 'slug' ] );

                # create attribute
                if( !$this->exist( $data[ 'slug' ] ) ){
                    wc_create_attribute([
                        'name' => $data[ 'name' ],
                        'slug' => $data[ 'slug' ],
                        'type' => $data[ 'type' ],
                    ]);

                    register_taxonomy( $taxonomy, [ 'product' ] );
                }

                # insert term
                if( !empty( $data[ 'terms' ] ) && is_array( $data[ 'terms' ] ) ){
                    foreach( $data[ 'terms' ] as $value ){
                        if( !term_exists( $value[ 'slug' ], $taxonomy ) ){
                            wp_insert_term( 
                                $value[ 'name' ],
                                $taxonomy,
                                [ 'slug' => $value[ 'slug' ] ] 
                            );
                        }
                    }
                }
            }
        }
    }
}
