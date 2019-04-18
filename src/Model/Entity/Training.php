<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Training Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property float $cost
 * @property string $training_date
 * @property string $facilitator
 */
class Training extends Entity
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
        'title' => true,
        'description' => true,
        'image' => true,
        'cost' => true,
        'training_date' => true,
        'facilitator' => true,
        'status'=>true
    ];
}
