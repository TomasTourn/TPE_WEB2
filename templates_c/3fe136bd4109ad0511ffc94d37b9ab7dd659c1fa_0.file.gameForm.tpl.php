<?php
/* Smarty version 4.2.1, created on 2022-10-05 08:28:22
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\gameForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d2406e13647_90440001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe136bd4109ad0511ffc94d37b9ab7dd659c1fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\gameForm.tpl',
      1 => 1664951301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633d2406e13647_90440001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form  class="form-floating" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="">
            <label for="name">Nombre</label>
          
</div>

<div class="form-floating"> 
    <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" value="">
            <label for="precio">Precio</label>
</div>

<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
            <label for="description">Descripcion</label>
</div>

    <div class="form-floating">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
          <option selected>...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <label for="floatingSelect">Genero</label>
      </div>

      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>




<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
