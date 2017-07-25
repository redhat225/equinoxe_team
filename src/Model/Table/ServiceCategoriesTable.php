<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceCategories Model
 *
 * @property \App\Model\Table\ServiceCategoryItemsTable|\Cake\ORM\Association\HasMany $ServiceCategoryItems
 *
 * @method \App\Model\Entity\ServiceCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServiceCategoriesTable extends Table
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

        $this->setTable('service_categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ServiceCategoryItems', [
            'foreignKey' => 'service_category_id'
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
            ->requirePresence('category_label', 'create')
            ->notEmpty('category_label');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        return $validator;
    }
}
