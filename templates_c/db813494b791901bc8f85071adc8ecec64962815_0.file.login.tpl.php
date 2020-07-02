<?php
/* Smarty version 3.1.33, created on 2020-07-02 21:04:41
  from 'D:\Projeticx\site v2\mod.auth\vue\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe2fc928b525_69410148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db813494b791901bc8f85071adc8ecec64962815' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\vue\\login.tpl',
      1 => 1593716679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe2fc928b525_69410148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2619740365efe2fc9280387_73948135', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../vue/layout/layout.tpl");
}
/* {block 'body'} */
class Block_2619740365efe2fc9280387_73948135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2619740365efe2fc9280387_73948135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?>
        <div class="alert alert-danger">
        <strong>Danger : </strong> <?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>

    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
    <div class="alert alert-success">
        <strong>Success : </strong> <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

    </div>
<?php }?>


<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form class="pt-3" action="../auth/Controle-de-login" method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="f_email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="f_password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="/auth/Mot-de-passe-perdu" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>


<?php
}
}
/* {/block 'body'} */
}
