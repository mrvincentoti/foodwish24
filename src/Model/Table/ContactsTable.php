<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactsTable extends Table
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

        $this->setTable('contacts');
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
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('phone1')
            ->maxLength('phone1', 32)
            ->requirePresence('phone1', 'create')
            ->notEmpty('phone1');

        $validator
            ->scalar('phone2')
            ->maxLength('phone2', 32)
            ->requirePresence('phone2', 'create')
            ->notEmpty('phone2');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('tw')
            ->maxLength('tw', 64)
            ->requirePresence('tw', 'create')
            ->notEmpty('tw');

        $validator
            ->scalar('fb')
            ->maxLength('fb', 64)
            ->requirePresence('fb', 'create')
            ->notEmpty('fb');

        $validator
            ->scalar('gg')
            ->maxLength('gg', 64)
            ->requirePresence('gg', 'create')
            ->notEmpty('gg');

        $validator
            ->scalar('inst')
            ->maxLength('inst', 64)
            ->requirePresence('inst', 'create')
            ->notEmpty('inst');

        $validator
            ->scalar('rs')
            ->maxLength('rs', 64)
            ->requirePresence('rs', 'create')
            ->notEmpty('rs');

       /* $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');*/

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
