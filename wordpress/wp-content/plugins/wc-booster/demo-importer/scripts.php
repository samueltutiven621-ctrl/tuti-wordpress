<?php 
namespace WC_Booster_Demo_Importer;

if( !class_exists( 'Scripts' ) ){
	class Scripts{ 

		public static $instance;

		public static function get_instance() {
		    if( ! self::$instance ){
		        self::$instance = new self();
		    }
		    return self::$instance;
		}

		public function __construct(){
			$script = new \WC_Booster_Script([
                'hook' => 'admin_enqueue_scripts',
                'condition_hook'   => 'wc-booster_page_wc_booster_demo_importer',
                'path' => WC_Booster_Url . 'demo-importer/assets',
                'type' => 'unminified'
            ]);

            $localize = [
                'key' => 'WC_BOOSTER_DEMO_IMPORTER',
                'data' => [
                    'ajax_url' => admin_url( 'admin-ajax.php' ),
                    'nonce'    => wp_create_nonce( 'wc-booster-demo-imprter-ajax-nonce' ),
                ]
            ];

            $script->load([
                [
                    'handle' => 'demo-importer-style',
                    'style'  => 'style.css'
                ],
                [
                    'handle' => 'slick',
                    'style'  => 'slick/slick.css'
                ],

                [
                    'handle' => 'slick-js',
                    'script'  => 'slick/slick.min.js',
                ],
                [
                    'handle' => 'demo-importer',
                    'script'  => 'importer.js',
                    'localize' => $localize
                ],
                [
                    'handle' => 'demo-scripts',
                    'script'  => 'script.js',
                    'localize' => $localize
                ]
            ]);
		}
	}

	Scripts::get_instance();

}