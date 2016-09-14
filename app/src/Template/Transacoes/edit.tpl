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
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($transaco)}
                        <fieldset>
                            <legend>{__('Edit Transaco')}</legend>
                                                        {$this->Form->input('descricao', ['class' => 'form-control'])}
                                                              {$this->Form->input('id_cliente', ['class' => 'form-control'])}
                                                              {$this->Form->input('id_mediador', ['class' => 'form-control'])}
                                                              {$this->Form->input('aes_key', ['class' => 'form-control'])}
                                                              {$this->Form->input('gpg_key', ['class' => 'form-control'])}
                                                              {$this->Form->input('path', ['class' => 'form-control'])}
                                                              {$this->Form->input('dt_inicio', ['empty' => true], ['class' => 'form-control'])}
                                                              {$this->Form->input('dt_fim', ['empty' => true], ['class' => 'form-control'])}
                                         
                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>