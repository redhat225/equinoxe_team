<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceCategoryItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceCategoryItemsTable Test Case
 */
class ServiceCategoryItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceCategoryItemsTable
     */
    public $ServiceCategoryItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_category_items',
        'app.service_categories',
        'app.service_subscribers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceCategoryItems') ? [] : ['className' => ServiceCategoryItemsTable::class];
        $this->ServiceCategoryItems = TableRegistry::get('ServiceCategoryItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceCategoryItems);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
