<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:17:41
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348483584b1e3_74354574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9187d64174f08336034a38edfebd0e35b134aa7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\login.tpl',
      1 => 1665599452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6348483584b1e3_74354574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" action="verifyUser">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" name="name" id="exampleInputtext1" aria-describedby="textHelp"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php if ($_smarty_tpl->tpl_vars['message']->value != null) {?>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
