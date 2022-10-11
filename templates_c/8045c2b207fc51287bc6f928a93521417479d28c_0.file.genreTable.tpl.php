<?php
/* Smarty version 4.2.1, created on 2022-10-11 01:06:27
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\genreTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344a573d854d0_43214018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8045c2b207fc51287bc6f928a93521417479d28c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\genreTable.tpl',
      1 => 1665443166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6344a573d854d0_43214018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    
    <thead>
        <tr>
            <th>genero</th>
            <th>descripcion</th>
            <th>juegos</th>
            <?php if ((isset($_SESSION['user']))) {?>
            <th>edit</th>
            <th>delete</th>
            <?php }?>
        </tr>
    </thead>
        <tbody>
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, 'genre');
$_smarty_tpl->tpl_vars['genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['genre']->do_else = false;
?>

                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['genre']->value->genero;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['genre']->value->descripcion_genero;?>
</td>
                    <td><a href="showByGenre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
">ver juegos</a></td>
                    <?php if ((isset($_SESSION['user']))) {?>
                    <td> <a href='updateGenre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
'>edit</a></td>
                    <td> <a href="deleteGenre/<?php echo $_smarty_tpl->tpl_vars['genre']->value->id_genero;?>
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
