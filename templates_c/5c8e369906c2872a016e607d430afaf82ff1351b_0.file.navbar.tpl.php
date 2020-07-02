<?php
/* Smarty version 3.1.33, created on 2020-07-02 18:30:59
  from 'D:\Projeticx\site v2\mod.home\..\vue\global\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe0bc3bc6f51_53096700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8e369906c2872a016e607d430afaf82ff1351b' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.home\\..\\vue\\global\\navbar.tpl',
      1 => 1593707329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe0bc3bc6f51_53096700 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="/auth/register">register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/auth/login">login</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Loguuuout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><?php }
}
