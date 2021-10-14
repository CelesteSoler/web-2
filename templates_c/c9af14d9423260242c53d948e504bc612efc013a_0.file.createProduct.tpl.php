<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:04:26
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\createProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616838ea940cb3_06924239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9af14d9423260242c53d948e504bc612efc013a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\createProduct.tpl',
      1 => 1634220251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616838ea940cb3_06924239 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar productos:</h2>
            </div>
    </div>
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createProd" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto" aria-label="nombre"name="nombre" >
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" aria-label="cantidad"name="cantidad">
                    </div> 
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio" aria-label="precio"name="precio">
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
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>


<?php }
}
