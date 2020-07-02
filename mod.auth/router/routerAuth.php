<?php


$router = new AltoRouter();
//Page login
$router-> map('GET', '/auth/login' , function() {
	require('./mod.auth/controler/login.php');
} , 'Login' );

$router-> map('GET', '/auth/register' , function() {
	require('./mod.auth/controler/register.php');
} , 'Register' );


$router-> map('POST', '/auth/register' , function() {
	require('./mod.auth/controler/registerNewUser.php');
} , 'Register new user' );

$router-> map('POST', '/auth/Controle-de-login' , function() {
	require('./mod.auth/controler/authentification.php');
} , 'Controle de login' );

$router-> map('POST', '/auth/Controle-de-mail' , function() {
	require('./mod.auth/controler/forgetPassword.php');
} , 'Controle de mail' );

$router-> map('POST', '/auth/Controle-de-motDePasse' , function() {
    require('./mod.auth/controler/changePassword.php');
} , 'Controle de Mot de passe' );

$router-> map('GET', '/auth/[:action]/[i:id]' , function() {
    require('./mod.auth/controler/controleResetTokent.php');
} , 'Controle de reset token' );

$router-> map('GET', '/auth/Mot-de-passe-perdu' , function() {
	require('./mod.auth/controler/changePassword.php');
} , 'Mot de passe perdu' );

$router-> map('GET', '/auth/Changement-de-motDePasse' , function() {
	require('./mod.auth/vue/authentificationVue.php');
} , 'Choisir un nouveau mot de passe' );


$match = $router->match();


if( is_array($match) && is_callable( $match['target'] ) ) {
	$_SESSION['match']['params'] = $match['params'];
	$_SESSION['match']['name'] = $match['name'];

	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( 'Location: /');
}
