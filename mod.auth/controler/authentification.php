<?php
require_once('./mod.auth/modele/modelAuthentification.php');


if(isset($_SESSION['auth'])) {
    session_start();
}
if(empty($_POST['f_email']) || empty($_POST['f_password'])){
    $_SESSION['flash']=array();
    $_SESSION['flash']['danger'] = 'Vous devez remplir tout les champs.';
    header('Location: /auth/login');
    exit();
}

if(!empty($_POST) && !empty($_POST['f_password']) && (strlen($_POST['f_password']) > 8) && (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $_POST['f_password']))){
    $password =  $_POST['f_password']  ;
    $email = $_POST['f_email'];
    $isValidate = isEmail($email);

    if ($isValidate['isvalidate'] = 1) {
        $user = getUserByEmail($_POST['f_email']);
        if(password_verify( $password,  $user['userPassword'])){
            $_SESSION['auth'] = $user;
            $_SESSION['flash'] = array();
            $_SESSION['flash']['success'] = 'Vous êtes maintenant connecter.';
            //$rank = getRank($user['userId']);
            //$_SESSION['auth']['roleName'] = $rank['roleName'];
            if($_POST['btn_remember'] == 'on'){
                $rememberToken = str_rand(250);
                $userId = $_SESSION['auth']['userId'];
                updateUserSetToken($rememberToken, $userId);
                setcookie('remember', $userId . "==" . $rememberToken . '=='. sha1($userId . 'ProX'),time() + 60 * 60 * 10, '/');
            }

            header('Location: /');
            exit();
        }else{

            $_SESSION=array();
            $_SESSION['flash']['danger'] = 'Identifiant incorrecte';
            header('Location: /auth/login');
            exit();
        }

    }else{
        
        $_SESSION=array();
        $_SESSION['flash']['danger'] = $isValidate['error'];
        header('Location: /auth/login');
        exit();
    }
}else{
    $_SESSION=array();
    $_SESSION['flash']['danger'] = 'Le mot de passe ne respecte pas les conditions de sécurité.';
    header('Location: /auth/login');
    exit();
}
