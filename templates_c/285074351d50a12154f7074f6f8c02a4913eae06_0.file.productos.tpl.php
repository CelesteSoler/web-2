<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:03:14
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616773c26258e5_57589923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285074351d50a12154f7074f6f8c02a4913eae06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\productos.tpl',
      1 => 1634165217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/createProduct.tpl' => 1,
  ),
),false)) {
function content_616773c26258e5_57589923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
            <li>
                <a href="producto/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> Producto: <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_producto;?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['log']->value) {?> <a href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> BORRAR</a>
                <a href="editar/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> EDITAR</a><?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <?php if ($_smarty_tpl->tpl_vars['log']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/createProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
}
