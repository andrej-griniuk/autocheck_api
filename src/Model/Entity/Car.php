<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $ppsr_created
 * @property string $identifier_type
 * @property string $color
 * @property string $compliance_date
 * @property bool $is_encumbered
 * @property string $make
 * @property string $model
 * @property string $market_semgent
 * @property int $thefts_count
 * @property int $registrations_count
 * @property string $star_rating
 * @property int $estimated_value
 * @property string $plate_number
 * @property bool $is_rego_expired
 * @property bool $is_stolen
 * @property bool $is_damaged
 * @property bool $is_rolled_backk
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Car extends Entity
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
