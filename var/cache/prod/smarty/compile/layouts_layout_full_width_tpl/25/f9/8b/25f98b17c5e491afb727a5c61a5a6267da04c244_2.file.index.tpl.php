<?php
/* Smarty version 3.1.33, created on 2020-09-02 13:27:22
  from 'C:\xampp\htdocs\myShop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f819a898dc4_00631438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f98b17c5e491afb727a5c61a5a6267da04c244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myShop\\themes\\classic\\templates\\index.tpl',
      1 => 1593780666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f819a898dc4_00631438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19763635935f4f819a896240_98817623', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10572804255f4f819a896898_87685342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3408746015f4f819a8976e9_63392371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_10877878525f4f819a8971b0_99379734 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3408746015f4f819a8976e9_63392371', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19763635935f4f819a896240_98817623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19763635935f4f819a896240_98817623',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10572804255f4f819a896898_87685342',
  ),
  'page_content' => 
  array (
    0 => 'Block_10877878525f4f819a8971b0_99379734',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3408746015f4f819a8976e9_63392371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10572804255f4f819a896898_87685342', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10877878525f4f819a8971b0_99379734', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
