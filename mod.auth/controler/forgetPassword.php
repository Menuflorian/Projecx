<?php
require_once('./mod.auth/modele/modelAuthentification.php');
if(!empty($_POST['f_email'])){

    $user = getUserByEmail($_POST['f_email']);
    if($user){

        $id = $user['userId'];
        $resetToken = str_rand(60);
        putResetToken($resetToken, $id);

        $_SESSION['flash']=array();
        $_SESSION['flash']['success'] = 'Les instruction du rappel de mot de passe vous ont été envoyées par email.';
        mail($_POST['f_email'], "Réinitialisation de votre mot de passe", "Afin de réinitialisation votre compte merci de cliquer sur ce lien\n\n  localhost:8000/auth/$resetToken/$id");
        header('Location: /auth/login');
        exit();
    }else{
        $_SESSION['flash']=array();
        $_SESSION['flash']['danger'] = "Aucun compte ne correspond à cet adresse.";
        header('Location: /auth/Mot-de-passe-perdu');
    }
}
