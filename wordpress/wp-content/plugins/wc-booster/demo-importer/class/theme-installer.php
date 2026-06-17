<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Theme_Installer' ) ){
	class Theme_Installer{

		public static $instance;

		public static function get_instance() {
		    if ( ! self::$instance ) {
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function __construct( $args = [] ){

			if ( !function_exists( 'WP_Filesystem' ) ){
			    require_once ABSPATH . 'wp-admin/includes/file.php';
			}

			WP_Filesystem();

			$this->slug = $args[ 'slug' ];
			$this->url  = $args[ 'url' ];
			$this->site_logo  = $args[ 'site_logo' ];
			$this->theme_dir = WP_CONTENT_DIR . '/themes/';
			$this->zip_file = $this->theme_dir . $this->slug . '.zip';
			$this->theme_file = $this->theme_dir . $this->slug;
		}

		public function download(){
			$response = wp_remote_get( $this->url, [ 'timeout' => 300 ] );
			if( is_wp_error( $response ) ){
			    return false;
			}

			$content = wp_remote_retrieve_body( $response );
			if( empty( $content ) ){
			    return false;
			}

			if( !file_put_contents( $this->zip_file, $content ) ){
			    return false;
			}

			return true;
		}

		public function extract(){

			$zip = new \ZipArchive();
			if( $zip->open( $this->zip_file ) === true ){
			    $zip->extractTo( $this->theme_dir );
			    $zip->close();
			} else {
			    return false;
			}

			unlink( $this->zip_file );

			return true;
		}

		public function run(){

			if( !empty( $this->site_logo ) ){

				$attachment = Attachment::get_instance();
				$attachment_id = $attachment->save( $this->site_logo );
				if( $attachment_id ){
					set_theme_mod( 'custom_logo', $attachment_id );
				}
			}

			if( file_exists( $this->theme_file ) ){
				switch_theme( $this->slug );
				return true;
			}

			if( !file_exists( $this->zip_file ) ){
				if( !$this->download() ){
					return false;
				}
			}

			if( !class_exists( 'ZipArchive' ) ) {
			    return false;
			}

			if( !$this->extract() ){
				return false;
			}

			if( !file_exists( $this->theme_file ) ){
				return false;
			}
			
			switch_theme( $this->slug );

			return true;
		}

	}
}
