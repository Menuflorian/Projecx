<?php
/* Smarty version 3.1.33, created on 2020-07-02 21:16:42
  from 'D:\Projeticx\site v2\mod.auth\..\vue\global\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe329a786559_90432552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9635a0d6bd35c006d61d5103ddcd2a8de90aa1fd' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\..\\vue\\global\\navbar.tpl',
      1 => 1593717400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe329a786559_90432552 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
          <a class="dropdown-item" href="#">register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">login</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/index">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><?php }
}
