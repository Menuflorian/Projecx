<?php
require_once('./mod.auth/modele/modelAuthentification.php');

if( isset($_SESSION['match']['params']['id']) && isset($_SESSION['match']['params']['action'])) {
    $user = secureData($_SESSION['match']['params']['id'], $_SESSION['match']['params']['action'] );

    if(isset($_SESSION['match']['params']['action'])){
        $_SESSION['flash'] = array();
        $_SESSION['flash']['success'] = 'Choisissez un nouveau mot de passe.';
        $rank = getRank($user['userId']);
        $_SESSION['auth'] = $user;
        $_SESSION['auth']['roleName'] = $rank['roleName'];
        header('Location: /auth/Changement-de-motDePasse');

        exit();


    }else {
        die();
        $_SESSION['flash']=array();
        $_SESSION['flash']['danger'] = "Ce token n'est pas valide";
        header('Location: /auth/login');
        exit();

    }
}else{
  die();
    header('Location: /auth/login');
    exit();
}
