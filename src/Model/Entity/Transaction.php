<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $oder_id
 * @property \Cake\I18n\FrozenTime $oder_date
 * @property string $gresponse
 * @property string $amount
 * @property string $status
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Oder $oder
 */
class Transaction extends Entity
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
        'user_id' => true,
        'oder_id' => true,
        'oder_date' => true,
        'gresponse' => true,
        'amount' => true,
        'status' => true,
        'user' => true,
        'oder' => true
    ];
}
