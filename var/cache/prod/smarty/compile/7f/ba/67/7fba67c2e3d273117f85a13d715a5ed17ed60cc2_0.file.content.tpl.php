<?php
/* Smarty version 3.1.33, created on 2020-09-02 14:18:33
  from 'C:\xampp\htdocs\myShop\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f8d992b5430_50372441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fba67c2e3d273117f85a13d715a5ed17ed60cc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myShop\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1593780666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f8d992b5430_50372441 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
