<?php
/* Smarty version 4.2.1, created on 2022-10-16 00:03:27
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b2e2f5ac3a4_74844330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303b84e9363eef1260562bbd1133cdeea8ae64d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\showGame.tpl',
      1 => 1665443205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b2e2f5ac3a4_74844330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    
    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>genero</th>
            <th>imagen</th>
        </tr>
    </thead>
        <tbody>
                <tr>
                    
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->genero;?>
</td>
                    <td><img class="img" src='<?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
' alt=""></td>
                </tr>

        </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
