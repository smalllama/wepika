<?php
/* Smarty version 3.1.33, created on 2020-09-02 14:17:29
  from 'C:\xampp\htdocs\myShop\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f8d59678da5_37537742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4bebbe74e8135c791952f9e9f9f599806a1d9a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myShop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1593780666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f8d59678da5_37537742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
