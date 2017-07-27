<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Text;
use Cake\Event\Event;
use ArrayObject;
/**
 * NewsletterSubscribers Model
 *
 * @property \App\Model\Table\NewslettersTable|\Cake\ORM\Association\BelongsTo $Newsletters
 *
 * @method \App\Model\Entity\NewsletterSubscriber get($primaryKey, $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscriber findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NewsletterSubscribersTable extends Table
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

        $this->setTable('newsletter_subscribers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Newsletters', [
            'foreignKey' => 'newsletter_id',
            'joinType' => 'INNER'
        ]);
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options){
        $data['subscriber_newsletter_voucher'] = Text::uuid();
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
            ->requirePresence('newsletter_label', 'create')
            ->notEmpty('newsletter_label')
            ->add('newsletter_label',[
                'maxLength' => [
                    'rule' => ['maxlength',50],
                    'message' => 'Email Mal formatté'
                ],
                'email_formatter' => [
                    'rule' => ['email',true,'/^[a-zA-Z0-9._-]+@[a-zA-Z0-9_-]+\.[a-zA-Z0-9]{2,6}$/'],
                    'message' => 'Email indisponible/Erreur'
                ]
            ]);

        $validator
           ->requirePresence('subscriber_newsletter_voucher', 'create')
            ->notEmpty('subscriber_newsletter_voucher')
            ->add('subscriber_newsletter_voucher',[
                    'maxLength' => [
                        'rule' => ['maxlength',100],
                        'message' => 'Voucher Format Error'
                    ]
                ]);

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

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
        $rules->add($rules->isUnique(['newsletter_label']));
        $rules->add($rules->isUnique(['subscriber_newsletter_voucher']));
        return $rules;
    }
}
