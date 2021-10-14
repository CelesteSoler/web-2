<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:39:06
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\formEditCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168410aed30e7_30239848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49fe02a744c6235c0a891cae55d24e7d5543662d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\formEditCateg.tpl',
      1 => 1634222344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6168410aed30e7_30239848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Categoria</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editCateg/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" method="POST">
                <div class="row ">
                    <div class="col">
                       <input type="text" class="form-control"  aria-label="Nombre categoria:"name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control"  aria-label="Descripción"name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
">
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
