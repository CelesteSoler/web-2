<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:46:56
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\prodByCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61686d109d1c28_47930871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b454dd752d2839c07ca53b320ea570b74509ee7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\prodByCategory.tpl',
      1 => 1634233613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61686d109d1c28_47930871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h4 > Productos </h4>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <ul class="list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
                            <li  class="list-group-item" > 
                                <p class="list-group-item-text"> <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_producto;?>
</p>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
 </div><?php }
}
