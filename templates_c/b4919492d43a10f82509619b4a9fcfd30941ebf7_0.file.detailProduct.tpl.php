<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:20:33
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\detailProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616777d1a28602_61749661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4919492d43a10f82509619b4a9fcfd30941ebf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\detailProduct.tpl',
      1 => 1633910166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_616777d1a28602_61749661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> Detalle del producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
:</h1> 
<ul>
    <li> Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
 </li>
    <li> Precio: $ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </li>
    <li> Cantidad disponible: <?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</li>
</ul><?php }
}
