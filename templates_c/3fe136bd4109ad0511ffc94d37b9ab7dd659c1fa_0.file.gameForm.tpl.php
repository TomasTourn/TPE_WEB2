<?php
/* Smarty version 4.2.1, created on 2022-10-11 03:50:25
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\gameForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344cbe1558b93_38971183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe136bd4109ad0511ffc94d37b9ab7dd659c1fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\gameForm.tpl',
      1 => 1665453002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6344cbe1558b93_38971183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['action']->value == "addedGame") {?>
<form   action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
    
  <div class="form-floating"> 
      
    <input type="text" class="form-control" id="name"  name="name" placeholder="name" value="">
    <label for="name">Nombre</label>
        
</div>

<div class="form-floating"> 
  <input type="number" class="form-control" id="precio" name="price" placeholder="precio" value="">
          <label for="price">Precio</label>
</div>

<div class="form-floating"> 
  <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
          <label for="description">Descripcion</label>
</div>

  <div class="form-floating">
      <select name="genre" class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        
        <option value='<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
'><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <label for="floatingSelect">Genero</label>
    </div>

    <button type="Submit" class="btn btn-primary">Guardar</button>
</form>



<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "updatedGame") {?>



<form   action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" method="post">
  <div class="form-floating"> 
      
          <input type="text" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
" name="name" placeholder="name" value="">
          <label for="name">Nombre</label>
        
</div>

<div class="form-floating"> 
  <input type="number" class="form-control" id="precio" name="price" placeholder="precio" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
">
          <label for="precio">Precio</label>
</div>

<div class="form-floating"> 
  <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
">
          <label for="description">Descripcion</label>
</div>

  <div class="form-floating">
      <select name="genre" class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
"  selected><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>
        
        <option value='<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
'><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      <label for="floatingSelect">Genero</label>
    </div>

    <button type="Submit" class="btn btn-primary">Guardar</button>
</form>


<?php }?>





<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
