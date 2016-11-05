<div class="login-page">
    <div class="form">
        <img src="/images/padlock.png" style="height: 100px; width: 100px">
        <h4>{$data.descricao}</h4>
        <br>
        <form class="login-form" action="/transacoes/authtransacaocliente" method="post">
            <input type="password" name="transacao_pass" id="transacao_pass" placeholder="Chave de Transação"/>
            <input type="hidden" id="id_transacao" name="id_transacao" id="id_transacao" value="{$data.id_transacao}"/>
            <button>Iniciar</button>
        </form>
    </div>
</div>