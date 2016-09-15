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

  public function getQtdItensPendentesCliente($id_cliente) {
    $where = "id_cliente = {$id_cliente}";
    return $this->find('All')
            ->where($where)
            ->count();
  }

  public function getQtdItensPendentesMediador($id_mediador) {
    $where = "id_mediador = {$id_mediador}";
    return $this->find('All')
            ->where($where)
            ->count();
  }

}
