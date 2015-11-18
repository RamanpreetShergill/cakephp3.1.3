<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pizzainfo Entity.
 *
 * @property string $size
 * @property string $crustType
 * @property string $toppings
 * @property int $quantity
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postalCode
 * @property string $contact
 * @property int $ID
 */
class Pizzainfo extends Entity
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
        'ID' => false,
    ];
}
