<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cars Model
 *
 * @method \App\Model\Entity\Car get($primaryKey, $options = [])
 * @method \App\Model\Entity\Car newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Car[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Car|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Car[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Car findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cars');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('ppsr_created', 'create')
            ->notEmpty('ppsr_created');

        $validator
            ->requirePresence('identifier_type', 'create')
            ->notEmpty('identifier_type');

        $validator
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        $validator
            ->requirePresence('compliance_date', 'create')
            ->notEmpty('compliance_date');

        $validator
            ->boolean('is_encumbered')
            ->requirePresence('is_encumbered', 'create')
            ->notEmpty('is_encumbered');

        $validator
            ->requirePresence('make', 'create')
            ->notEmpty('make');

        $validator
            ->requirePresence('model', 'create')
            ->notEmpty('model');

        $validator
            ->requirePresence('market_semgent', 'create')
            ->notEmpty('market_semgent');

        $validator
            ->integer('thefts_count')
            ->requirePresence('thefts_count', 'create')
            ->notEmpty('thefts_count');

        $validator
            ->integer('registrations_count')
            ->requirePresence('registrations_count', 'create')
            ->notEmpty('registrations_count');

        $validator
            ->requirePresence('star_rating', 'create')
            ->notEmpty('star_rating');

        $validator
            ->integer('estimated_value')
            ->requirePresence('estimated_value', 'create')
            ->notEmpty('estimated_value');

        $validator
            ->requirePresence('plate_number', 'create')
            ->notEmpty('plate_number');

        $validator
            ->boolean('is_rego_expired')
            ->requirePresence('is_rego_expired', 'create')
            ->notEmpty('is_rego_expired');

        $validator
            ->boolean('is_stolen')
            ->requirePresence('is_stolen', 'create')
            ->notEmpty('is_stolen');

        $validator
            ->boolean('is_damaged')
            ->requirePresence('is_damaged', 'create')
            ->notEmpty('is_damaged');

        $validator
            ->boolean('is_rolled_backk')
            ->requirePresence('is_rolled_backk', 'create')
            ->notEmpty('is_rolled_backk');

        return $validator;
    }
}
