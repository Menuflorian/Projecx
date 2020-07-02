<?php


require_once('./mod.auth/modele/modelAuthentification.php');
$tpl = new Smarty();


if (isset($_SESSION['flash']['success'])) {
    $tpl -> assign('success', $_SESSION['flash']['success']);
    $_SESSION['flash']= null;
}
if (isset($_SESSION['flash']['danger'])) {
    $tpl -> assign('erreur', $_SESSION['flash']['danger']);
    $_SESSION['flash']= null;
}

if(empty($_POST['userMail']) || empty($_POST['userName']) ){
    $tpl -> assign('erreur','Vous devez remplir tout les champs.');
    header('Location: /auth/register');
    exit();
}

if( $_POST['userPassowrd'] != $_POST['userRepeatPassowrd'] ){
    $tpl -> assign('erreur','Lez mot de passe doit être identique');
    header('Location: /auth/register');
    exit();
}


if(!empty($_POST) && !empty($_POST['userPassowrd']) && (strlen($_POST['userPassowrd']) > 8) && (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['userPassowrd']))){
    $password =  $_POST['userPassowrd']  ;
    $email = $_POST['userMail'];
    $isValidate = isEmail($email);
    $hachPass = password_hash($password, PASSWORD_BCRYPT);
    var_dump($hachPass);
    addNewUser($_POST['userName'], $email, $hachPass);
    header('Location: /auth/login');
    exit();

}else{


    var_dump($_POST);
    var_dump('tata');
    die();
    $tpl -> assign('pagename', 'register');
    $tpl -> display('./mod.auth/vue/register.tpl');

}

