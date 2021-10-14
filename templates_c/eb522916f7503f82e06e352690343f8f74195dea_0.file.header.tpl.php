<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:21:12
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61683cd8e273c1_62994697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb522916f7503f82e06e352690343f8f74195dea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\header.tpl',
      1 => 1634220843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61683cd8e273c1_62994697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="scss/estilos.css" rel="stylesheet" > 
    <title>Las Pulpas</title>
</head>
<body>
    <div class="container">
        <div class="row alert alert-secondary">
            <div class="col-12  text center">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home" > Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorias" > Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.laspulpas.com" > Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="login"> Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="logout"> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><?php }
}
