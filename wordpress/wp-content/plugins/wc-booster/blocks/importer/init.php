<?php 
$class = [ 'file' ];
foreach( $class as $c ){
	require_once WC_Booster_Path . "blocks/importer/class/{$c}.php";
}

$core = [ 
	'http',
	'demo', 
];
foreach( $core as $c ){
	require_once WC_Booster_Path . "blocks/importer/core/{$c}.php";
}

$main = [ 'ajax' ];
foreach( $main as $m ){
	require_once WC_Booster_Path . "blocks/importer/{$m}.php";
}