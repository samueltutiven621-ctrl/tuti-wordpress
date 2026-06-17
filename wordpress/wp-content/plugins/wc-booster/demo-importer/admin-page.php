<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Admin_Page' ) ){
	class Admin_Page{

		public static $instance;

		public $menu_slug = 'wc_booster_demo_importer';

		public static function get_instance() {
		    if ( ! self::$instance ) {
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function __construct(){
			add_action( 'admin_menu', [ $this, 'add_submenu' ], 9999 );
		}

		public function add_submenu(){

		    add_submenu_page( 
		    	'wc_booster', # parent slug
		    	esc_html__( 'Demo Importer', 'wc-booster' ), # page title
		    	esc_html__( 'Demo Importer', 'wc-booster' ), # menu title
		    	'manage_options', # capability
		    	$this->menu_slug, # menu_slug
		    	[ $this, 'render_main_page' ],
		    	9999 # position
		    );

		}

		public function render_main_page(){
			include WC_Booster_Path . 'demo-importer/template-demo.php';
		}
	}

	Admin_Page::get_instance();
}