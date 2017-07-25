<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceSubscribers Model
 *
 * @property \App\Model\Table\ServiceCategoryItemsTable|\Cake\ORM\Association\BelongsTo $ServiceCategoryItems
 *
 * @method \App\Model\Entity\ServiceSubscriber get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceSubscriber newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceSubscriber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceSubscriber|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceSubscriber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceSubscriber[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceSubscriber findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServiceSubscribersTable extends Table
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

        $this->setTable('service_subscribers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ServiceCategoryItems', [
            'foreignKey' => 'service_category_item_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('subscriber_tel', 'create')
            ->notEmpty('subscriber_tel')
            ->add('subscriber_tel',[
                    'minlength' => [
                        'rule' => ['minLength',5],
                        'message' => 'minLength error'
                    ],
                    'maxlength' => [
                        'rule' => ['maxLength',10],
                        'message' => 'maxLength error'
                    ],
                    'custom' => [
                        'rule' => ['custom','/^[0-9]{10}$/'],
                        'message' => 'format error'
                    ]
                ]);

        $validator
            ->requirePresence('subscriber_fullname', 'create')
            ->notEmpty('subscriber_fullname')
            ->add('subscriber_fullname',[
                    'maxlength' => [
                        'rule' => ['maxLength',100],
                        'message' => 'maxLength error'
                    ],
                    'minLength' =>  [
                        'rule' => ['minLength',8],
                        'message' => 'minLength Error'
                    ],
                    'custom' => [
                        'rule' => ['custom','/^[a-zA-Z0-9_\s-]{8,100}$/'],
                        'message' => 'format error'
                    ]

                ]);

        $validator
            ->requirePresence('subscriber_email', 'create')
            ->notEmpty('subscriber_email')
            ->add('subscriber_email',[
                    'email' => [
                        'rule' => ['email',true,'/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/'],
                        'message' => 'format error'
                    ],

                    'maxLength' => [
                        'rule' => ['maxLength',50],
                        'message' => 'maxLength error'
                    ]
                ]);

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
        $rules->add($rules->existsIn(['service_category_item_id'], 'ServiceCategoryItems'));

        return $rules;
    }
}
