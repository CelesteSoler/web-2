<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:20:04
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\createCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616777b4487e84_08907041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c8b3c566db33d95d88b1ff9b6080a9a762c5fa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\createCateg.tpl',
      1 => 1633662281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616777b4487e84_08907041 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Cargar categoria:</h1>
    <form action="createCateg" method="POST">
        
        Categoria: <input type="text" name="categoria">
        descripcion: <input type="text" name="descripcion"> 
        
        <input type="submit" value="Cargar">
    </form><?php }
}
