<?php
/* Smarty version 4.2.1, created on 2022-10-12 19:37:28
  from 'C:\xampp\htdocs\proyectos\TPE_WEB2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6346fb5814a280_91906716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec8a65c8fa9ee44d04158afa88694790736d23c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_WEB2\\templates\\header.tpl',
      1 => 1665596207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6346fb5814a280_91906716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
    <!-- CSS only -->
    <base href="<?php echo BASE_URL;?>
">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/games.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['encabezado']->value;?>
</title>
    </head>
    <body>
      <div class="container">
        <div class="titulo">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home">Juegos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="showGenre">Generos</a>
              </li>

              <?php if ((isset($_SESSION['user']))) {?>
              <li class="nav-item">
                <a class="nav-link" href="logOut">Log out</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addGame">Agregar Juego</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addGenre">Agregar Genero</a>
              </li>
              <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="logIn">Log in</a>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </nav>
      
        <?php }
}
