<?php
session_start();
require('./vendor/autoload.php');
require('./include/configuration.php');
$uri = $_SERVER['REQUEST_URI'];

$router = new AltoRouter();

//------------------Redirection ---------------//

$router-> map('GET', '/' , function() {
	require('./mod.home/controler/home.php');
} , 'Home' );

$router-> map('GET|POST', '/auth/[*:action]' , function() {
	require('./mod.auth/router/routerAuth.php');
} , 'Router authentification' );

$router-> map('GET|POST', '/admin/[*:action]' , function() {
	is_identificated();
	require('./mod.admin/router/routerAdmin.php');
} , 'Router admin' );

$router-> map('GET|POST', '/home/[*:action]' , function() {
	is_identificated();
	require('./mod.home/router/routerHome.php');
} , 'Router home' );

$router-> map('GET', '/logout' , function() {
	logout();
} );

//$router-> map('GET|POST', '/add-data' , function() {
//	require('./dev/fixture/data.php');
//} , 'Ajouter de la DATA ');

$router-> map('GET|POST', '/dumpDATA' , function() {
	require('./dev/test/sauvegardeDB.php');
} , 'dumpDATA');













$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	$_SESSION['match']['params'] = $match['params'];
	$_SESSION['match']['name'] = $match['name'];

	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( 'Location: /');
}
