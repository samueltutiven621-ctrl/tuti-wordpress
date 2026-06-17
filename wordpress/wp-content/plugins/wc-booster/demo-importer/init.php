<?php 
$class = [ 'theme-installer', 'attachment', 'file' ];
foreach( $class as $c ){
	require_once WC_Booster_Path . "demo-importer/class/{$c}.php";
}

$core = [ 
	'demo', 
	'dynamic-id-mapper', 
	'favourite', 
	'http', 
	'navigation', 
	'page', 
	'post', 
	'product-attribute', 
	'product-category', 
	'product', 
	'swatches', 
	'wp-template-part', 
	'wp-template' 
];
foreach( $core as $c ){
	require_once WC_Booster_Path . "demo-importer/core/{$c}.php";
}

$main = [ 'admin-page', 'ajax', 'scripts', 'svg' ];
foreach( $main as $m ){
	require_once WC_Booster_Path . "demo-importer/{$m}.php";
}