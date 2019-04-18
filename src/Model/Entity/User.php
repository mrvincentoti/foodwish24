<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $fullname
 * @property string $password
 * @property string $phone
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created_date
 * @property int $status
 *
 * @property \App\Model\Entity\Billing[] $billings
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class User extends Entity
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
        'username' => true,
        'fullname' => true,
        'password' => true,
        'phone' => true,
        'address' => true,
        'created_date' => true,
        'status' => true,
        'billings' => true,
        'orders' => true,
        'transactions' => true,
        'roleid'=> true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
