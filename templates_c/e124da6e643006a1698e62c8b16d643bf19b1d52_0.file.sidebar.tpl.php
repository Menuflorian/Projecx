<?php
/* Smarty version 3.1.33, created on 2020-07-02 17:28:00
  from 'D:\Projeticx\site v2\mod.auth\..\vue\layout\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efdfd00de5b05_43057893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e124da6e643006a1698e62c8b16d643bf19b1d52' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\..\\vue\\layout\\sidebar.tpl',
      1 => 1558794147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efdfd00de5b05_43057893 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item nav-profile">
            <div class="border-bottom">
                <h4 id="Castelrouchien" class="font-weight-large mb-3">Gestion boutique</h4>
            </div>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/Dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Client</span>
                <i class="menu-arrow"></i>
                <i class=" mdi mdi-human-male-female menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/client/Liste-des-clients">Liste Client</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/client/Ajouter-nouveau-client">Ajouter Client</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/calendrier/Calendar">
                <span class="menu-title">Calendrier</span>
                <i class="mdi mdi-calendar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/sms/sms">
                <span class="menu-title">Sms</span>
                <i class=" mdi mdi-forum  menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Produit</span>
                <i class=" mdi mdi-cart menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Autre</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
        <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
        <span class="menu-title">Sample Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
      </a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
        </ul>
        </div>
    </li> -->
        <?php if ($_smarty_tpl->tpl_vars['Rang']->value == 'Admin') {?>
        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <div class="border-bottom">
                        <h4 id="Castelrouchien" class="font-weight-large mb-3">Administration</h4>
                    </div>

                </div>

        <li class="nav-item">
            <a class="nav-link" href="/vitrine/Editer-vitrine">
                <span class="menu-title">Gestion site-vitrine</span>
                <i class="mdi mdi mdi-verified  menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/admin/Liste-des-client-effacer">
                <span class="menu-title">Ramener un Client</span>
                <i class="mdi mdi-account-star menu-icon"></i>
            </a>
        </li>
        </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                <span class="menu-title">Gestion des Utilisateur</span>
                <i class="menu-arrow"></i>
                <i class=" mdi mdi-human-male-female menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/user/Liste-des-utilisateurs">Liste des utilisateurs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/user/Ajouter-Utilisateur">Ajouter un utilisateur</a></li>
                </ul>
            </div>
        </li>

        <?php }?>
    </ul>
</nav>

<body>

    <div class="main-panel">
<?php }
}
