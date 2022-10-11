<?php
/* Smarty version 4.2.1, created on 2022-10-10 23:42:30
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\genreGames.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634491c62cf556_54375376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f180e488d607b151d4db20fe97f6057aa84d0272' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\genreGames.tpl',
      1 => 1665438062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634491c62cf556_54375376 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<table>
    <h1><?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
</h1>
    <thead>
        <tr>
            <th>nombre</th>
            <th>imagen</th>
            <th>precio</th>
            <th>descripcion</th>
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
                    <td><img class="img" src="<?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
" alt=""></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['game']->value->descripcion;?>
</td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
<a href="home">ir a home</a>

<?php ob_start();
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;
}
}
