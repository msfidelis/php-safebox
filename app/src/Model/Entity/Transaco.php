<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaco Entity.
 *
 * @property int $id_transacao
 * @property string $descricao
 * @property int $id_cliente
 * @property int $id_mediador
 * @property string $aes_key
 * @property string $gpg_key
 * @property string $path
 * @property \Cake\I18n\Time $dt_inicio
 * @property \Cake\I18n\Time $dt_fim
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Transaco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_transacao' => false,
    ];
}
