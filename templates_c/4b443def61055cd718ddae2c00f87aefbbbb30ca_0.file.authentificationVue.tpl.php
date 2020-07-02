<?php
/* Smarty version 3.1.33, created on 2020-07-02 17:43:13
  from 'D:\Projeticx\site v2\mod.auth\vue\authentificationVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe0091809b74_43442873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b443def61055cd718ddae2c00f87aefbbbb30ca' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\vue\\authentificationVue.tpl',
      1 => 1593701559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../vue/layout/header.tpl' => 1,
    'file:../../vue/layout/navbar.tpl' => 1,
    'file:../../vue/layout/footer.tpl' => 1,
    'file:../../vue/layout/down.tpl' => 1,
  ),
),false)) {
function content_5efe0091809b74_43442873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../../vue/layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:../../vue/layout/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div <?php echo $_smarty_tpl->tpl_vars['typeClasse2']->value;?>
>
                            <div class="alert alert-success">
                                <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

                            </div>
                        </div>
                        <div <?php echo $_smarty_tpl->tpl_vars['typeClasse']->value;?>
>
                            <div class="alert alert-danger">
                                <strong>Danger!</strong> <?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>

                            </div>
                        </div>
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <center><img src="../public/images/logo_castelrouchien.jpg"></center>
                            </div>
                            <center>
                                <h4 id="Castelrou_Chien">Intranet <span>Castelrou'Chien.<span></h4>
                            </center>
                            <center>
                                <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'Choisir un nouveau mot de passe' && $_smarty_tpl->tpl_vars['user']->value == '1') {?>
                                <h6 id="Castelrou_Chien" class="font-weight-light">Les deux mots de passe doivent
                                    correspondre.</h6>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Login') {?>
                                <h6 id="Castelrou_Chien" class="font-weight-light">Merci de vous loguer pour continuer
                                </h6>
                                <?php } else { ?>
                                <h6 id="Castelrou_Chien" class="font-weight-light">Veuillez saisir l'adresse e-mail
                                    associée à votre compte d'utilisateur. Un code de vérification vous sera adressé.
                                </h6>
                                <?php }?>
                            </center>
                            <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'Choisir un nouveau mot de passe' && $_smarty_tpl->tpl_vars['user']->value == '1') {?>
                            <form class="pt-3" action="/auth/Controle-de-motDePasse" method="post">
                                <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Login') {?>
                                <form class="pt-3" action="/auth/Controle-de-login" method="post">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Mot de passe perdu') {?>
                                    <form class="pt-3" action="/auth/Controle-de-mail" method="post">
                                        <?php }?>

                                        <div class="form-group">
                                            <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'Choisir un nouveau mot de passe' && $_smarty_tpl->tpl_vars['user']->value == '1') {?>
                                            <input id="Castelrou_Chien" type="password"
                                                class="form-control form-control-lg" name="f_password"
                                                placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg" name="f_confirm"
                                                placeholder="Confirmation du Mot de passe">
                                            <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Login') {?>
                                            <input id="Castelrou_Chien" type="mail" class="form-control form-control-lg"
                                                name="f_email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg"
                                                name="f_password" placeholder="Mot de passe">
                                            <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Mot de passe perdu') {?>
                                            <div class="form-group">
                                                <input id="Castelrou_Chien" type="mail"
                                                    class="form-control form-control-lg" name="f_email"
                                                    placeholder="Email">
                                                <?php }?>
                                                <div class="mt-3">
                                                    <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'Choisir un nouveau mot de passe' && $_smarty_tpl->tpl_vars['user']->value == '1') {?>
                                                    <button id="Castelrou_Chien"
                                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Changer
                                                        le mot de passe</button>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Login') {?>
                                                    <button id="Castelrou_Chien"
                                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Se
                                                        connecter</button>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pagename']->value == 'Mot de passe perdu') {?>
                                                    <button id="Castelrou_Chien"
                                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Reinitialiser
                                                        le mot de passe</button>
                                                    <?php }?>
                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['pagename']->value == 'Login') {?>
                                                <div class="my-2 d-flex justify-content-between align-items-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label text-muted">
                                                            <input type="checkbox" name="btn_remember"
                                                                class="form-check-input">Me garder connecter</input>
                                                        </label>
                                                    </div>
                                                    <a href="/auth/Mot-de-passe-perdu" class="auth-link text-black">Mot
                                                        de passe oublier ?</a>
                                                </div>
                                                <?php }?>
                                    </form>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender('file:../../vue/layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

        </div>

        <!-- page-body-wrapper ends -->
    </div>



    <?php $_smarty_tpl->_subTemplateRender('file:../../vue/layout/down.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
