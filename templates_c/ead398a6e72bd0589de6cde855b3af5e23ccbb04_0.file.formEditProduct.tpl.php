<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:38:16
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\formEditProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616840d8edbd53_32552065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead398a6e72bd0589de6cde855b3af5e23ccbb04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\formEditProduct.tpl',
      1 => 1634222294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_616840d8edbd53_32552065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Producto</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" method="POST">
                <div class="row ">
                    <div class="col">
                       <input type="text" class="form-control"  aria-label="Nombre categoria:"name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
">
                    </div>
                    <div class="col">
                      <input type="number" class="form-control"  aria-label="cantidad"name="cantidad" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->cantidad;?>
">
                    </div>
                    <div class="col">
                      <input type="number" class="form-control"  aria-label="precio"name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
">
                    </div>
                    <div class="col">
                        <select class="form-control" name="categoria" aria-label="cantidad" id="">
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
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="EDITAR" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
