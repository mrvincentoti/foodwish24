<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $video
 * @property \Cake\I18n\FrozenTime $created_date
 * @property string $author
 * @property int $group_id
 *
 * @property \App\Model\Entity\Group $group
 */
class Blog extends Entity
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
        'video' => true,
        'created_date' => true,
        'author' => true,
        'group_id' => true,
        'group' => true
    ];
}
