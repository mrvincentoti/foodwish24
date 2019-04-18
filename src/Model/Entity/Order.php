<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $dish_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $oder_date
 * @property int $qty
 * @property float $amount
 * @property int $status
 *
 * @property \App\Model\Entity\Dish $dish
 * @property \App\Model\Entity\User $user
 */
class Order extends Entity
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
        'dish_id' => true,
        'user_id' => true,
        'oder_date' => true,
        'qty' => true,
        'amount' => true,
        'status' => true,
        'dish' => true,
        'user' => true
    ];
}
