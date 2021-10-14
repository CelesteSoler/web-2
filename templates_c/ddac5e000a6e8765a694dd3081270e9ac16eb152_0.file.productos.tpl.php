<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:51:32
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61686e24680393_52336140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddac5e000a6e8765a694dd3081270e9ac16eb152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\productos.tpl',
      1 => 1634233884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/createProduct.tpl' => 1,
  ),
),false)) {
function content_61686e24680393_52336140 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                    <li class="list-group-item">
                        <a class="list-group-item-text" href="producto/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"><?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_producto;?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['log']->value) {?><a class=" btn-sm btn btn btn-secondary" href="borrarProd/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> BORRAR</a>
                        <a class=" btn-sm btn btn-primary list-group-item-text" href="editar/<?php echo $_smarty_tpl->tpl_vars['prod']->value->id_producto;?>
"> EDITAR</a><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['log']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:templates/createProduct.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
        </div>
    </div>
</div><?php }
}
