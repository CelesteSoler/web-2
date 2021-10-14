<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:15:03
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\createProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616776877cdad6_13201932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad7977d32e61b6d2d8d8f0f522ffb92ddce8ee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\createProduct.tpl',
      1 => 1633904350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616776877cdad6_13201932 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Cargar productos:</h1>
    <form action="createProd" method="POST">
        Nombre producto: <input type="text" name="nombre">
        Cantidad: <input type="number" name="cantidad">
        Precio: <input type="number" name="precio"> 
        Categoria: <select name="categoria" id="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>       
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            
        </select>
        <input type="submit" value="Cargar">
    </form><?php }
}
