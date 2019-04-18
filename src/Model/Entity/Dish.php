<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dish Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property float $price
 * @property string $description
 * @property string $image
 * @property int $status
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Order[] $orders
 */
class Dish extends Entity
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
        'category_id' => true,
        'title' => true,
        'price' => true,
        'description' => true,
        'image' => true,
        'status' => true,
        'category' => true,
        'orders' => true
    ];
}
