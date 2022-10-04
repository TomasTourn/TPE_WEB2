<?php
/* Smarty version 4.2.1, created on 2022-10-04 23:55:53
  from 'C:\xampp\htdocs\tpe\TPE_WEB2\templates\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cabe9811423_08481912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a0d4aa3f8fb254cd0c46e0319c6fd5e7b8db12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\TPE_WEB2\\templates\\showGame.tpl',
      1 => 1664920551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633cabe9811423_08481912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>

    <thead>
        <tr>
            <th>nombre</th>
            <th>precio</th>
            <th>descripcion</th>
            <th>genero</th>
            <th>imagen</th>
            <th>ver más</th>
            <th>edit</th>
            <th>delete</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
</td>
                    <td> <a href='edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>edit</a></td>
                    <td> <a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">delete</a></td>
                </tr>

        </tbody>
</table><?php }
}
