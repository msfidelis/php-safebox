<?php
/* Smarty version 3.1.29, created on 2016-09-14 02:31:31
  from "/Users/fidelis/Sites/PHP-SafeBox/app/src/Template/Transacoes/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d8b683e05ce0_80851933',
  'file_dependency' => 
  array (
    '88c2b23734451468e0d70e1f7579f976a04ebaa3' => 
    array (
      0 => '/Users/fidelis/Sites/PHP-SafeBox/app/src/Template/Transacoes/add.tpl',
      1 => 1473820287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d8b683e05ce0_80851933 ($_smarty_tpl) {
?>
<div class="materiais form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Cadastrar Novo Registro</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class=""><a href="/transacoes" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/transacoes/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->create($_smarty_tpl->tpl_vars['transaco']->value);?>

                        <fieldset>
                            <legend><?php echo __('Add Transaco');?>
</legend>
                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('descricao',array('class'=>'form-control'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('id_cliente',array('class'=>'form-control','label'=>'Cliente'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('id_mediador',array('class'=>'form-control','label'=>'Mediador'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('aes_key',array('class'=>'form-control'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('gpg_key',array('class'=>'form-control'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('dt_inicio',array('empty'=>true,'type'=>'text','class'=>'form-control','label'=>'Data Inicial'));?>

                            <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->input('dt_fim',array('empty'=>true,'type'=>'text','class'=>'form-control','label'=>'Data Final'));?>


                        </fieldset>
                        <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->button(__('Submit'),array('class'=>'btn btn-primary'));?>

                        <?php echo $_smarty_tpl->tpl_vars['this']->value->Form->end();?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
