<?php
/* Smarty version 4.2.1, created on 2022-10-02 19:55:21
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\gamesTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6339d0897a0610_70115532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9828a7207abe1a77fbe3c5286bd0cb32f282850' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\gamesTable.tpl',
      1 => 1664733305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6339d0897a0610_70115532 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->id_genero_fk;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
</td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table><?php }
}
