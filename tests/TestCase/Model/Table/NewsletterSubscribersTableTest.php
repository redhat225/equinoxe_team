<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewsletterSubscribersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewsletterSubscribersTable Test Case
 */
class NewsletterSubscribersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewsletterSubscribersTable
     */
    public $NewsletterSubscribers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newsletter_subscribers',
        'app.newsletters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NewsletterSubscribers') ? [] : ['className' => NewsletterSubscribersTable::class];
        $this->NewsletterSubscribers = TableRegistry::get('NewsletterSubscribers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NewsletterSubscribers);

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
