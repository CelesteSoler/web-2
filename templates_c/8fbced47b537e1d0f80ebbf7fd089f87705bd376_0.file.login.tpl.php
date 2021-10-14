<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:53:08
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61686e84087649_45935585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbced47b537e1d0f80ebbf7fd089f87705bd376' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\login.tpl',
      1 => 1634233984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61686e84087649_45935585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Log in</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-4 border text center">
            <form action="verify" method="POST">
                <div class="col">
                    <input type="text" class="form-control"  placeholder="email" aria-label="email"name="email" id="email" required>
                </div>
                <div class="col">
                    <input type="password" class="form-control"  placeholder="contraseña" aria-label="password"name="password" id="password" required>
                </div>
                <div class="col">
                    <input type="submit" value="login" class="btn btn btn-secondary">
                </div>    
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-4  text center">
            <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
