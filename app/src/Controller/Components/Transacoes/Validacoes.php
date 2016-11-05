<?php

namespace App\Controller\Components\Transacoes;

use App\Controller\Components\CryptoClass;
use Cake\Controller\Action;
use Cake\Crypto\EncryptSSL;

/**
 * Classe de validações das transações  
 * @email msfidelis01@gmail.com
 * @author Matheus Fidelis
 */
class Validacoes extends Action {
  
  public function verificaPendentes($user_id) {
    $this->controller->loadModel('Transacoes');
    
  }

  /**
   * Retorna os dados do post da tela de transa��es validados
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
        'transacao_pass' => self::newTransacaoPass()
      );
    }

    return $data;
  }
  
  /**
   * Trata uma nova transação
   * @param type $i
   * @return type
   */
  public static function trataTransacao($i) {
    return array (
      'id_transacao' => $i['id_transacao'] ? (int) $i['id_transacao'] : NULL,
      'transacao_pass' => $i['transacao_pass'] ? (string) $i['transacao_pass'] : NULL
    );
  }
  
  /**
   * Retorna uma nova chave aleatória da Transação
   * @return type string 
   */
  public static function newTransacaoPass() {
    return CryptoClass::randomKey(20);
  }

}
