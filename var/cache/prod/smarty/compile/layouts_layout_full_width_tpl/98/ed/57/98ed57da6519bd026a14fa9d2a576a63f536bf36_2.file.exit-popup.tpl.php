<?php
/* Smarty version 3.1.33, created on 2020-09-02 13:27:24
  from 'C:\xampp\htdocs\myShop\themes\classic\templates\exit-popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4f819c487324_64437996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ed57da6519bd026a14fa9d2a576a63f536bf36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myShop\\themes\\classic\\templates\\exit-popup.tpl',
      1 => 1599044368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4f819c487324_64437996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="popup" class="popup__wrapper">
    <div id="news-signup_close"></div>
    <div class="popup__container">
        <h1 class="popup__title">Thank you for visiting!</h1>
        <p>Have a wonderful day 💁</p>
    </div>
</div>


<?php echo '<script'; ?>
>
    function onMouseOut(event) {
        // Remove this event listener
        document.removeEventListener("mouseout", onMouseOut);
        
        // Show the popup
        document.getElementById("popup").style.display = "block";
    }

    document.addEventListener("mouseout", onMouseOut);

    this.closebtn = document.getElementById("news-signup_close");
    this.addEvent(this.closebtn, "click", function() {
      bioEp.hidePopup();

<?php echo '</script'; ?>
>

<?php }
}
