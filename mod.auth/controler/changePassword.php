<?php
is_identificated();

require_once('./mod.auth/modele/modelAuthentification.php');
if((empty($_POST['f_confirm']) == empty($_POST['f_password'])) && (strlen($_POST['f_password']) > 8) && (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['f_password'])) ){

    $password =  password_hash(  $_POST['f_password']  , PASSWORD_BCRYPT);
    $userId = $_SESSION['auth']['userId'];

    changePasswordUser($password, $_SESSION['auth']['userId']);
    $_SESSION = array();
    session_destroy();
    session_start();
    $_SESSION['flash']['success'] = 'Mot de passe changer avec succes. Vous pouvez maintenant vous reconnecter';

    header ('location: /auth/login');
    exit();
}else {

    $_SESSION['flash'] = array();
    $_SESSION['flash']['danger'] = 'Les mots de passe doivent correspondre et posseder les conditions de sécurité requise.';
    header ('location: /auth/Changement-de-motDePasse');
}
