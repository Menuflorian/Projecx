<?php

    function str_rand($length){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0,$length);
    }

    function is_identificated(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['auth'])){
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page.";
            header('Location: /auth/login');
        }
    }

    function is_admin(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if($_SESSION['auth']['roleName'] != 'Admin'){
            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page.";
            header('Location: /');
        }
    }

    function reconnection_auto(){
        if (session_status() == PHP_SESSION_NONE){
            session_start();
        }

        if(isset($_COOKIE['remember']) && !isset($_SESSION['auth'])){
            $rememberToken = $_COOKIE['remember'];
            $parts = explode('==', $rememberToken);
            $userId = $parts[0];
            $user = getUserById($userId);
            $user = $user-> fetch();

            if ($user){
                 $expected = $userId . "==" . $user['rememberToken'] . '=='. sha1($userId . 'chienchatlapin');

                if($expected == $rememberToken) {

                    $_SESSION['auth'] = $user;
                    $rank = getRank($user['userId']);
                    $_SESSION['auth']['roleName'] = $rank['roleName'];
                    $_SESSION['flash']['success'] = 'Vous êtes maintenant connecter.';
                    $time = time() + 60 * 60 * 10;
                    setcookie('remember', $rememberToken, $time , '../', '.domaine.com' );
                }else{
                    setcookie('remember', null, -1);
                }
            }else{
                setcookie('remember', null, -1);
            }
        }

    }

      function logout(){
        $_SESSION = array();
        setcookie("remember", "", time()-3600);
        session_destroy();
        header ('location: /auth/login');
      }
