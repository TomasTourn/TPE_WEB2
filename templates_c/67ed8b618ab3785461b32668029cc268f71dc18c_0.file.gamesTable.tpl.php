<?php
/* Smarty version 4.2.1, created on 2022-10-04 23:46:19
  from 'C:\xampp\htdocs\tpe\TPE_WEB2\templates\gamesTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ca9abe7c6e7_42859338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ed8b618ab3785461b32668029cc268f71dc18c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\TPE_WEB2\\templates\\gamesTable.tpl',
      1 => 1664919977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633ca9abe7c6e7_42859338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>

    <thead>
        <tr>
            <th>nombre</th>
            <th>imagen</th>
            <th>ver más</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</td>
                    

                  <!-- 
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->genero;?>
</td>
                -->

                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
</td>
                    <td><a href="showGame/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">ver más</a></td>
                    <td> <a href='edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>edit</a></td>
                    <td> <a href="delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">delete</a></td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table><?php }
}
