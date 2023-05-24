<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int $product_id
 * @property int $buyer_user_id
 * @property float $buy_price
 * @property float $unity_of_measure
 * @property float $quantitaty
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $user
 */
class Sale extends Entity
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
        'product_id' => true,
        'buyer_user_id' => true,
        'buy_price' => true,
        'unity_of_measure' => true,
        'quantitaty' => true,
        'created_at' => true,
        'updated_at' => true,
        'product' => true,
        'user' => true,
    ];
}
