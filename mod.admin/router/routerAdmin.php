<?php

$router = new AltoRouter();


$router-> map('GET', '/admin/index' , function() {
	require('./mod.admin/controler/indexAdmin.php');
} , 'index admin test' );


$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	$_SESSION['match']['params'] = $match['params'];
	$_SESSION['match']['name'] = $match['name'];

	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( 'Location: /');
}
