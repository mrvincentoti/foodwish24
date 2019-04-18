<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpeningtimesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpeningtimesTable Test Case
 */
class OpeningtimesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpeningtimesTable
     */
    public $Openingtimes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.openingtimes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Openingtimes') ? [] : ['className' => OpeningtimesTable::class];
        $this->Openingtimes = TableRegistry::getTableLocator()->get('Openingtimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Openingtimes);

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
}
