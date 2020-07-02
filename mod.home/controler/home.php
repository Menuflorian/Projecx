<?php

$tpl = new Smarty();


$tpl -> assign('pagename', $_SESSION['match']['name']);


$tpl -> display('./mod.home/vue/home.tpl');
