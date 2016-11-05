
function resendKey(form) {
    var id = $("#id").val();

    if (id === "") {
        returnError("Transação Inválida");
    } else {
        $.ajax({
            url: "/transacoes/resetkey/",
            type: "POST",
            dataType: "JSON",
            sync: false,
            data: {
                id: id
            },
            success: function (data) {
                console.log(data.return);
                if (data.return === 'true') {
                    returnPassword("CHAVE GERADA COM SUCESSO");
                    clean();
                } else {
                    returnError("FALHA AO TROCAR A SENHA");
                }
            },
            error: function (data) {

            }
        });

    }
}

function returnPassword(msg) {
    var msg2 = "<div class='alert alert-success' role='alert'>";
    var msg3 = ".</a> </div>";
    var html = msg2 + msg + msg3;
    $("#return").html(html);
}

function returnError(msg) {
    var msg2 = "<div class='alert alert-danger' role='alert'>";
    var msg3 = ".</a> </div>";
    var html = msg2 + msg + msg3;
    $("#return").html(html);
}