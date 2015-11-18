<?php
namespace App\Model\Table;

use App\Model\Entity\Pizzainfo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pizzainfo Model
 *
 */
class PizzainfoTable extends Table
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

        $this->table('pizzainfo');
        $this->displayField('ID');
        $this->primaryKey('ID');

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
            ->allowEmpty('size');

        $validator
            ->allowEmpty('crustType');

        $validator
            ->allowEmpty('toppings');

        $validator
            ->add('quantity', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('quantity');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('province');

        $validator
            ->allowEmpty('postalCode');

        $validator
            ->allowEmpty('contact');

        $validator
            ->add('ID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ID', 'create');

        return $validator;
    }
}
