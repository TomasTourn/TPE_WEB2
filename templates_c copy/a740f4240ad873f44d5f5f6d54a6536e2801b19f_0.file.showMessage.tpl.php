<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:32:21
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\showMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63470835ef6147_67323762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a740f4240ad873f44d5f5f6d54a6536e2801b19f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\showMessage.tpl',
      1 => 1665599540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63470835ef6147_67323762 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
