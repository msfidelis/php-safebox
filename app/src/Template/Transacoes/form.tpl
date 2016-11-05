<div class="materiais form large-9 medium-8 columns content">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Transação</div>
            </div>
        </div>
        <div role="tabpanel">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="card-body col-md-6">
                    <div class="form-group">
                        {$this->Form->create($transaco)}
                        <fieldset>
                            <legend>{__('Add Transaco')}</legend>
                            {$this->Form->input('descricao', ['class' => 'form-control'])}
                            {$this->Form->input('id_cliente', ['class' => 'form-control', 'label' => 'Cliente', 'type' => 'select', 'options' => $clientes])}
                            {$this->Form->input('id_mediador', ['class' => 'form-control', 'label' => 'Mediador', 'type' => 'select', 'options' => $mediadores])}
                            {$this->Form->input('aes_key', ['class' => 'form-control'])}
                            {$this->Form->input('gpg_key', ['class' => 'form-control'])}
                            {$this->Form->input('dt_inicio', ['empty' => true, 'type' => 'text', 'class' => 'form-control', 'label' => 'Data Inicial'])}
                            {$this->Form->input('dt_fim', ['empty' => true, 'type' => 'text', 'class' => 'form-control', 'label' => 'Data Final'])}

                        </fieldset>
                        {$this->Form->button(__('Submit'), ['class' => 'btn btn-primary'])}
                        {$this->Form->end()}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>