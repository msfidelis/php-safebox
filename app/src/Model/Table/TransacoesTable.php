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
class TransacoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
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
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_transacao')
            ->allowEmpty('id_transacao', 'create');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->integer('id_cliente')
            ->requirePresence('id_cliente', 'create')
            ->notEmpty('id_cliente');

        $validator
            ->integer('id_mediador')
            ->requirePresence('id_mediador', 'create')
            ->notEmpty('id_mediador');

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

        return $validator;
    }
}
