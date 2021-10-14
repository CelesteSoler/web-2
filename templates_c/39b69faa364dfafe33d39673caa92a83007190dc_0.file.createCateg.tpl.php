<?php
/* Smarty version 3.1.39, created on 2021-10-14 16:30:25
  from 'C:\xampp\htdocs\web2\TPE_entrega1\templates\createCateg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61683f016b4c09_38572060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b69faa364dfafe33d39673caa92a83007190dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE_entrega1\\templates\\createCateg.tpl',
      1 => 1634221818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61683f016b4c09_38572060 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar categorias:</h2>
            </div>
    </div>
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createCateg" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Categoria" aria-label="nombre_categoria"name="nombre_categoria" id="">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion"name="descripcion">
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div> 
</div><?php }
}
