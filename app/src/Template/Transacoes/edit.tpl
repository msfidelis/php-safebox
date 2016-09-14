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
                <li role="presentation" class=""><a href="/transacos" aria-controls="Novo"  aria-expanded="false">Listar</a></li>
                <li role="presentation" class="active"><a href="/transacos/add" aria-controls="Novo"  aria-expanded="false">Novo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <input type='hidden' value="{$transaco->id_transacao}" id='id' name='id'>
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($transaco)}
                        <fieldset>
                            <legend>{__('Editar Transação')}</legend>
                            {$this->Form->input('descricao', ['class' => 'form-control'])}
                            {$this->Form->input('id_cliente', ['class' => 'form-control', 'label' => 'Cliente', 'type' => 'select', 'options' => $clientes])}
                            {$this->Form->input('id_mediador', ['class' => 'form-control', 'label' => 'Mediador', 'type' => 'select', 'options' => $mediadores])}
                            {$this->Form->input('aes_key', ['class' => 'form-control'])}
                            {$this->Form->input('gpg_key', ['class' => 'form-control'])}
                            {$this->Form->input('path', ['class' => 'form-control'])}
                            {$this->Form->input('dt_inicio', ['empty' => true, 'type' => 'text', 'class' => 'form-control datetime', 'label' => 'Data Inicial'])}
                            {$this->Form->input('dt_fim', ['empty' => true, 'type' => 'text', 'class' => 'form-control datetime', 'label' => 'Data Final'])}
                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}

                        <button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#modalSuccess">
                            Resetar Chave da Transacao
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-success" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <script src="/js/Transacoes/services.js" type="text/javascript"></script>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Deseja Resetar chave desta transacao?</h4>
            </div>
            <div id="return">

            </div>
            <div class="modal-body image-responsive" id='image'>
                <img src="/images/cadeado.png" style="height: 200px; width: 200px; display: block; margin-left: auto; margin-right: auto;">
            </div>
            <div class="modal-body image-responsive" style="display: none" id='loading'>
                <img src="/images/loading.gif" style="height: 200px; width: 200px; display: block; margin-left: auto; margin-right: auto;">
            </div>
            <div>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">

                    <h4 id="oh-snap!-you-got-an-error!">Cuidado!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a></h4>
                    <p>Essa ação poderá inutilizar toda sua transação até o presente momento. Ao continuar uma nova chave de transação será enviada para o cliente. Deseja continuar?</p>
                    <p>
                        <button type="button" class="btn btn-danger" onclick="resendKey(this);">Sim</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Nao</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>