<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property string $tw
 * @property string $fb
 * @property string $gg
 * @property string $inst
 * @property string $rs
 * @property int $status
 */
class Contact extends Entity
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
        'address' => true,
        'phone1' => true,
        'phone2' => true,
        'email' => true,
        'tw' => true,
        'fb' => true,
        'gg' => true,
        'inst' => true,
        'rs' => true,
        'status' => true
    ];
}
