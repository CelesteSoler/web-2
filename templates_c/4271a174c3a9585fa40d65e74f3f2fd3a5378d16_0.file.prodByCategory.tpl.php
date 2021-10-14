<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:14:40
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\prodByCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677670b360b8_42854284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4271a174c3a9585fa40d65e74f3f2fd3a5378d16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\prodByCategory.tpl',
      1 => 1633910221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61677670b360b8_42854284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'prod');
$_smarty_tpl->tpl_vars['prod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
$_smarty_tpl->tpl_vars['prod']->do_else = false;
?>
            <li>
                Producto: <?php echo $_smarty_tpl->tpl_vars['prod']->value->nombre_producto;?>

            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php }
}
