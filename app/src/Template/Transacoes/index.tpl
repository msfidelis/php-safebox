<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">{$this->Html->link(__('Listar'), ['action' => 'index'])}</li>
        <li role="presentation" class="">{$this->Html->link(__('Novo'), ['action' => 'add'])}</li>
    </ul>
</nav>
<div class="tab-content">
    <div class="card-body col-md-10">
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>{$this->Paginator->sort('ID')}</th>
                    <th>{$this->Paginator->sort('Descrição')}</th>
                    <th>{$this->Paginator->sort('Cliente')}</th>
                    <th>{$this->Paginator->sort('Mediador')}</th>
                    <th>{$this->Paginator->sort('Inicio')}</th>
                    <th>{$this->Paginator->sort('Fim')}</th>
                    <th>{$this->Paginator->sort('Criado')}</th>
                    <th>{$this->Paginator->sort('Modificado')}</th>
                    <th class="actions">{__('Actions')}</th>
                </tr>
            </thead>
            <tbody>
                {foreach $transacoes as $transaco}
                    <tr>
                        <td>{$this->Number->format($transaco->id_transacao)}</td>
                        <td>{$transaco->descricao}</td>
                        <td>{$this->Number->format($transaco->id_cliente)}</td>
                        <td>{$this->Number->format($transaco->id_mediador)}</td>
                        <td>{$transaco->dt_inicio}</td>
                        <td>{$transaco->dt_fim}</td>
                        <td>{$transaco->created}</td>
                        <td>{$transaco->modified}</td>
                        <td class="actions">
                            {$this->Html->link(__('View'), ['action' => 'view', $transaco->id_transacao], ['class' => 'btn btn-xs btn-info'])}
                            {$this->Html->link(__('Edit'), ['action' => 'edit', $transaco->id_transacao], ['class' => 'btn btn-xs btn-success'])}
                            {$this->Form->postLink(__('Delete'), ['action' => 'delete', $transaco->id_transacao], ['class' => 'btn btn-xs btn-danger'])}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                {$this->Paginator->prev( __('Anterior'))}
                {$this->Paginator->numbers()}
                {$this->Paginator->next(__('Proximo'))}
            </ul>
            <p>{$this->Paginator->counter()}</p>
        </div>
    </div>
