<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceCategoryItem Entity
 *
 * @property int $id
 * @property int $service_category_id
 * @property string $item_label
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $deleted
 *
 * @property \App\Model\Entity\ServiceCategory $service_category
 * @property \App\Model\Entity\ServiceSubscriber[] $service_subscribers
 */
class ServiceCategoryItem extends Entity
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
        'id' => false
    ];
}
