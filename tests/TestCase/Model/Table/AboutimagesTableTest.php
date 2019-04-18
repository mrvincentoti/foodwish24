<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutimagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutimagesTable Test Case
 */
class AboutimagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutimagesTable
     */
    public $Aboutimages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aboutimages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Aboutimages') ? [] : ['className' => AboutimagesTable::class];
        $this->Aboutimages = TableRegistry::getTableLocator()->get('Aboutimages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aboutimages);

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
