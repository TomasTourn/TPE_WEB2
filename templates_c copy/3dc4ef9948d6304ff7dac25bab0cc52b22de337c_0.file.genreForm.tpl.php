<?php
/* Smarty version 4.2.1, created on 2022-10-12 20:38:13
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\genreForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63470995ee9df2_83215684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc4ef9948d6304ff7dac25bab0cc52b22de337c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\genreForm.tpl',
      1 => 1665597041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63470995ee9df2_83215684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['action']->value == "finishAddGenre") {?>
<form   action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="genre" placeholder="name" value="">
            <label for="name">Genero</label>
          
</div>



<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="">
            <label for="description">Descripcion</label>
</div>
      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>


  
  <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "finishUpdateGenre") {?>


  <form   action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
" method="post">
    
    <div class="form-floating"> 
        
            <input type="text" class="form-control" id="name" name="genre" placeholder="name" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
">
            <label for="name">Genero</label>
          
</div>



<div class="form-floating"> 
    <input type="text" class="form-control" id="description" name="description" placeholder="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->descripcion_genero;?>
">
            <label for="description">Descripcion</label>
</div>
      <button type="Submit" class="btn btn-primary">Guardar</button>
  </form>
  <?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
