<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:28:40
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\detailProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616868c8c80e37_47250422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd13c599e5cd26de5063a7810ecbefadde87689c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\detailProduct.tpl',
      1 => 1634232515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_616868c8c80e37_47250422 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 > Detalle del producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
:</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <ul class="list-group">
                <li  class="list-group-item">
                    <h4 class="list-group-item-heading">Categoria</h4>
                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Precio</h4>
                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Cantidad disponible</h4>
                    <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
</p>
                </li>
            </ul>
        </div>
    </div>
 </div>

<?php }
}
