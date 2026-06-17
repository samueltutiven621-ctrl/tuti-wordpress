<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Attachment' ) ){
	class Attachment{

		public static $instance;

		public static function get_instance(){
			
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }

		    return self::$instance;
		}

		public function save( $image_url, $post_id = 0 ){

		    $temp_file = download_url( $image_url );

		    if( is_wp_error( $temp_file ) ){
		        return false;
		    }

		    $file = [
		        'name'     => basename( $image_url ),
		        'type'     => mime_content_type( $temp_file ),
		        'tmp_name' => $temp_file,
		        'error'    => 0,
		        'size'     => filesize( $temp_file ),
		    ];

		    # Upload the image to the WordPress media library
		    $attachment_id = media_handle_sideload( $file, $post_id );

		    if( is_wp_error( $attachment_id ) ){
		        @unlink( $temp_file );
		        return false;
		    }

		    if( $post_id ){
		    	set_post_thumbnail( $post_id, $attachment_id );
		    }

		    @unlink( $temp_file );
			
		    return $attachment_id;
		}

	}
}
