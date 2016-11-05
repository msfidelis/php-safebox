<?php

namespace App\Model\Table;

use App\Model\Entity\Transaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transacoes Model
 *
 */
class TransacoesTable extends Table {

  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config) {
    parent::initialize($config);

    $this->table('transacoes');
    $this->displayField('id_transacao');
    $this->primaryKey('id_transacao');

    $this->addBehavior('Timestamp');
  }

  /**
   * Default validation rules.
   *
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator) {
    $validator
        ->integer('id_transacao')
        ->allowEmpty('id_transacao', 'create');

    $validator
        ->requirePresence('descricao', 'create')
        ->notEmpty('descricao');

    $validator
        ->integer('id_cliente')
        ->allowEmpty('id_cliente');

    $validator
        ->integer('id_mediador')
        ->allowEmpty('id_mediador');

    $validator
        ->allowEmpty('aes_key');

    $validator
        ->allowEmpty('gpg_key');

    $validator
        ->allowEmpty('path');

    $validator
        ->dateTime('dt_inicio')
        ->allowEmpty('dt_inicio');

    $validator
        ->dateTime('dt_fim')
        ->allowEmpty('dt_fim');

    $validator
        ->allowEmpty('encfile');

    return $validator;
  }

  public function findClientes() {
    $where = "tipo = 2";
    return $this->find('All')->where($where);
  }

  public function getItensPendentesCliente($id_cliente) {
    $where = "id_cliente = {$id_cliente}";
    return $this->find('All')
            ->where($where);
  }

  /**
   * Pega a quantidade de itens pendentes por cliente
   * @param type $id_cliente
   * @return type
   */
  public function getQtdItensPendentesCliente($id_cliente) {
    return $this->getItensPendentesCliente($id_cliente)->count();
  }

  /**
   * Pega os itens pendentes por mediador
   * @param type $id_mediador
   * @return type
   */
  public function getItensPendentesMediador($id_mediador) {
    $where = "id_mediador = {$id_mediador}";
    return $this->find('All')
            ->where($where);
  }

  /**
   * Pega a quantidade de itens pendentes do mediador informado
   * @param type $id_mediador
   * @return type
   */
  public function getQtdItensPendentesMediador($id_mediador) {
    return $this->getItensPendentesMediador($id_mediador)->count();
  }
  
  /**
   * Pega a ultima transação do usuário
   * @param type $id_cliente
   * @return type
   */
  public function getLastTransaction($id_cliente) {
    $fields = array("id_transacao", "descricao", "id_cliente", "id_mediador");
    $where = "id_cliente = {$id_cliente}";
    return $this->find('All')
        ->select($fields)
        ->where($where)
        ->first();
  }
  
  /**
   * Valida se existe uma transação ativa com os dados informados
   * @param type $id_transacao
   * @param type $transacao_pass
   * @param type $id_usuario
   * @return boolean
   */
  public function validateTransaction($id_transacao, $transacao_pass, $id_usuario) {
    $where = "id_transacao = {$id_transacao} "
    . "AND transacao_pass = '{$transacao_pass}' "
    . "AND status_transacao = 1 AND id_cliente = {$id_usuario}";
    
    $result = $this->find('All')
        ->where($where)
        ->first();
    
    if (sizeof($result) > 0) {
      return True;
    } else {
      return False;
    }
  }

}
