<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:07:42
  from 'C:\xampp\htdocs\WEB2\TPE_entrega1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616774ce4b0c45_63197098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440829cf5f9b1d1560cc6c3258aabf06b355cb1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPE_entrega1\\templates\\login.tpl',
      1 => 1633985007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616774ce4b0c45_63197098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h2> Log in</h2>

    <form action="verify" method="POST">
        email: <input type="text" name="email" placeholder="email" id="email" required>
        contrasenia: <input type="password" name="password" placeholder="contraseña" id="password" required>
        <input type="submit" value="login">
    </form>
</div>

<h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
