<?php
/* Smarty version 3.1.33, created on 2020-07-02 21:11:49
  from 'D:\Projeticx\site v2\mod.auth\vue\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe317527e951_48389186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f5aa100bbb10dd1fc489c809a341b89e77c817' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\vue\\register.tpl',
      1 => 1593717106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe317527e951_48389186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3630556915efe3175273c82_43682898', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../vue/layout/layout.tpl");
}
/* {block 'body'} */
class Block_3630556915efe3175273c82_43682898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3630556915efe3175273c82_43682898',
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
                    <div class="card-header">Register</div>
                    <div class="card-body">




	<p class="text-center">Get started with your free account</p>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Account</div>
                    <div class="card-body">
<form class="pt-3" action="../auth/register" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="userName" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="userMail" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="userPhone" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Select job type</option>
			<option>Designer</option>
			<option>Manager</option>
			<option>Accaunting</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="userPassowrd" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="userRepeatPassowrd" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
<!--container end.//-->



                </div>
            </div>
        </div>
    </div>
    </div>

<?php
}
}
/* {/block 'body'} */
}
