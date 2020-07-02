<?php
/* Smarty version 3.1.33, created on 2020-07-02 21:01:06
  from 'D:\Projeticx\site v2\mod.auth\..\vue\layout\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe2ef264f9f5_16821490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ad3bfcb64f28dc9a2762810d30deeacafc7a37' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\..\\vue\\layout\\layout.tpl',
      1 => 1593715712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../vue/global/header.tpl' => 1,
    'file:../../vue/global/navbar.tpl' => 1,
    'file:../../vue/global/sidebar.tpl' => 1,
    'file:../../vue/global/breadcrum.tpl' => 1,
    'file:../../vue/global/footer.tpl' => 1,
    'file:../../vue/global/down.tpl' => 1,
  ),
),false)) {
function content_5efe2ef264f9f5_16821490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender('file:../../vue/global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:../../vue/global/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../vue/global/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../vue/global/breadcrum.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6834659865efe2ef264e0d2_77830800', 'body');
?>



<?php $_smarty_tpl->_subTemplateRender('file:../../vue/global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:../../vue/global/down.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
/* {block 'body'} */
class Block_6834659865efe2ef264e0d2_77830800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6834659865efe2ef264e0d2_77830800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php
}
}
/* {/block 'body'} */
}
