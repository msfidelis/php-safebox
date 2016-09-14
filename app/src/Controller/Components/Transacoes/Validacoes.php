<?php

namespace App\Controller\Components\Transacoes;

use App\Controller\Components\CryptoClass;
use Cake\Controller\Action;
use Cake\Crypto\EncryptSSL;
/**
 * Classe de validações da tela de transações 
 * @email msfidelis01@gmail.com
 * @author Matheus Fidelis
 */
class Validacoes extends Action {

    /**
     * Retorna os dados do post da tela de transações validados
     * @param type $i
     * @return type
     */
    public static function trataPost(array $i, $id = null) {
        $data = array(
            'descricao' => $i['descricao'] ? (string) $i['descricao'] : NULL,
            'id_cliente' => $i['id_cliente'] ? (int) $i['id_cliente'] : NULL,
            'id_mediador' => $i['id_mediador'] ? (int) $i['id_mediador'] : NULL,
            'aes_key' => $i['aes_key'] ? (string) $i['aes_key'] : CryptoClass::randomKey(50),
            'gpg_key' => $i['gpg_key'] ? (string) $i['gpg_key'] : CryptoClass::randomKey(50),
            //'dt_inicio' => $i['dt_inicio'] ? (string) $i['dt_inicio'] : NULL,
            //'dt_fim' => $i['dt_fim'] ? (string) $i['dt_fim'] : NULL
        );
        
        if (is_null($id)) {
            $data += array(
                'transacao_pass' => CryptoClass::randomKey(20)
            );
        }
        
        return $data;

    }

}
