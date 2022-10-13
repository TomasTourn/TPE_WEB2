<?php
/* Smarty version 4.2.1, created on 2022-10-11 18:48:53
  from 'C:\xampp\htdocs\tpe\TPE_WEB2\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63459e75765de5_55174165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a0d4aa3f8fb254cd0c46e0319c6fd5e7b8db12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\TPE_WEB2\\templates\\showGame.tpl',
      1 => 1665506757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63459e75765de5_55174165 (Smarty_Internal_Template $_smarty_tpl) {
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
