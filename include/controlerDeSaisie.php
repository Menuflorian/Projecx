<?php

function isEmail($mail){
    if (empty($mail)){
        $error = 'Le champ email ne peux pas être vide.';
        $isValide = 0;
    }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $error = "La forme de l'email n'est pas correcte.";
        $isValide = 0;
    }else{
        $error = '';
        $isValide = 1;
    }
    $validate = array($error, $isValide);
    return $validate;
}

function isPhone($phone){
    $NbChiffre = strlen($phone);
    if (empty($phone)){
        $error = 'Le champ telephone ne peux pas être vide.';
        $isValide = 0;
    }elseif ($NbChiffre !=  10) {
        $error = "Le numéros de telephone doit comporter 10 chiffre.";
        $isValide = 0;
    }elseif (preg_match('/[0-9]{10}/',  $phone)) {
        $error = "Le numéros de telephone doit être composer uniquement de chiffre.";
        $isValide = 0;
    }else{
        $error = '';
        $isValide = 1;
    }
    $validate = array($error, $isValide);
    return $validate;
}
