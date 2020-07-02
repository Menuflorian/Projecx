<?php
/* Smarty version 3.1.33, created on 2020-07-02 21:01:06
  from 'D:\Projeticx\site v2\mod.auth\..\vue\global\down.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efe2ef2689da0_31692190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc493fcd5df61052615960640e73313cb46124e' => 
    array (
      0 => 'D:\\Projeticx\\site v2\\mod.auth\\..\\vue\\global\\down.tpl',
      1 => 1593716381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efe2ef2689da0_31692190 (Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- plugins:js -->


<!-- endinject -->
<!-- Plugin js for this page-->

<!-- End plugin js for this page-->
<!-- inject:js -->


<!-- endinject -->
<!-- Custom js for this page-->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
<!-- End custom js for this page-->


         <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap Js CDN -->
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <!-- jQuery Custom Scroller CDN -->
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
$(document).ready(function() {

    $('.list-group-item').click(function(e) {
        e.preventDefault();
        $('.list-group-item').removeClass('active');
        $(this).addClass('active');
    });
});
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
