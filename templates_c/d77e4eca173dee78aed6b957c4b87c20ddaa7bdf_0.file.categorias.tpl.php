<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:14:01
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677649d5b814_35818331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77e4eca173dee78aed6b957c4b87c20ddaa7bdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\categorias.tpl',
      1 => 1634151622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/createCateg.tpl' => 1,
  ),
),false)) {
function content_61677649d5b814_35818331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
        <li>
            <a href="Categoria/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"> categoria: <?php echo $_smarty_tpl->tpl_vars['cat']->value->nombre_categoria;?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['log']->value) {?><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"> BORRAR</a>
            <a href="edit/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id_categoria;?>
"> EDITAR</a><?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->_subTemplateRender('file:templates/createCateg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
