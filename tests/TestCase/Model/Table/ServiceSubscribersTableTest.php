<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceSubscribersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceSubscribersTable Test Case
 */
class ServiceSubscribersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceSubscribersTable
     */
    public $ServiceSubscribers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_subscribers',
        'app.service_category_items',
        'app.service_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceSubscribers') ? [] : ['className' => ServiceSubscribersTable::class];
        $this->ServiceSubscribers = TableRegistry::get('ServiceSubscribers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceSubscribers);

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
