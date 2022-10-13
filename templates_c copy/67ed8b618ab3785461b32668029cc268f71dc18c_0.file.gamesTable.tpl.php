<?php
/* Smarty version 4.2.1, created on 2022-10-11 18:48:15
  from 'C:\xampp\htdocs\tpe\TPE_WEB2\templates\gamesTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63459e4f5b6573_16245863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ed8b618ab3785461b32668029cc268f71dc18c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe\\TPE_WEB2\\templates\\gamesTable.tpl',
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
function content_63459e4f5b6573_16245863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<table>
    
    <thead>
        <tr>
            <th>nombre</th>
            <th>genero</th><!--    -->
            <th>imagen</th>
            <th>ver más</th>
        <?php if ((isset($_SESSION['user']))) {?>
            <th>edit</th>
            <th>delete</th>
        <?php }?>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->genero;?>
</td>
                    <td><img class="img" src="<?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
" alt=""></td>
                    <td><a href="showGame/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">ver más</a></td>
                <?php if ((isset($_SESSION['user']))) {?>
                    <td> <a href='updateGame/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>edit</a></td>
                    <td> <a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">delete</a></td>
                <?php }?>
                    
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
