<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property float $unity_of_measure
 * @property float $quantitaty
 * @property float $price
 * @property bool $product_perishable
 * @property \Cake\I18n\FrozenDate|null $expiration_date
 * @property \Cake\I18n\FrozenDate $date_of_manufacture
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Sale[] $sales
 */
class Product extends Entity
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
        'name' => true,
        'user_id' => true,
        'unity_of_measure' => true,
        'quantitaty' => true,
        'price' => true,
        'product_perishable' => true,
        'expiration_date' => true,
        'date_of_manufacture' => true,
        'created_at' => true,
        'updated_at' => true,
        'user' => true,
        'sales' => true,
    ];
}
