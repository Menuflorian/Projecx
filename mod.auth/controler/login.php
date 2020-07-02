<?php

reconnection_auto();
$tpl = new Smarty();

if (isset($_SESSION['flash']['success'])) {
    $tpl -> assign('success', $_SESSION['flash']['success']);
    $_SESSION['flash']= null;
}
if (isset($_SESSION['flash']['danger'])) {
    $tpl -> assign('erreur', $_SESSION['flash']['danger']);
    $_SESSION['flash']= null;
}

$tpl -> assign('pagename', 'login');
$tpl -> display('./mod.auth/vue/login.tpl');