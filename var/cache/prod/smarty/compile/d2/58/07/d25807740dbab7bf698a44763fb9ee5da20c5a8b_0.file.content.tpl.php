<?php
/* Smarty version 3.1.33, created on 2020-09-02 14:18:19
  from 'C:\xampp\htdocs\myShop\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f8d8b90f3d9_31653082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd25807740dbab7bf698a44763fb9ee5da20c5a8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myShop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1593780666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f8d8b90f3d9_31653082 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
