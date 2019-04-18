<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Openingtimes Model
 *
 * @method \App\Model\Entity\Openingtime get($primaryKey, $options = [])
 * @method \App\Model\Entity\Openingtime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Openingtime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Openingtime|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Openingtime|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Openingtime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Openingtime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Openingtime findOrCreate($search, callable $callback = null, $options = [])
 */
class OpeningtimesTable extends Table
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

        $this->setTable('openingtimes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('days')
            ->maxLength('days', 32)
            ->requirePresence('days', 'create')
            ->notEmpty('days');

        $validator
            ->scalar('time')
            ->maxLength('time', 64)
            ->requirePresence('time', 'create')
            ->notEmpty('time');

        return $validator;
    }
}
