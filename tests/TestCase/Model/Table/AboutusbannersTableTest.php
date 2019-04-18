<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutusbannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutusbannersTable Test Case
 */
class AboutusbannersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutusbannersTable
     */
    public $Aboutusbanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aboutusbanners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aboutusbanners') ? [] : ['className' => AboutusbannersTable::class];
        $this->Aboutusbanners = TableRegistry::getTableLocator()->get('Aboutusbanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aboutusbanners);

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
