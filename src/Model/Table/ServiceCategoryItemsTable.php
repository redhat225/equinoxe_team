<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceCategoryItems Model
 *
 * @property \App\Model\Table\ServiceCategoriesTable|\Cake\ORM\Association\BelongsTo $ServiceCategories
 * @property \App\Model\Table\ServiceSubscribersTable|\Cake\ORM\Association\HasMany $ServiceSubscribers
 *
 * @method \App\Model\Entity\ServiceCategoryItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategoryItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServiceCategoryItemsTable extends Table
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

        $this->setTable('service_category_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ServiceCategories', [
            'foreignKey' => 'service_category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ServiceSubscribers', [
            'foreignKey' => 'service_category_item_id'
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
            ->requirePresence('item_label', 'create')
            ->notEmpty('item_label');

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
        $rules->add($rules->existsIn(['service_category_id'], 'ServiceCategories'));

        return $rules;
    }
}
