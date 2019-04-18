<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GallerybannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GallerybannersTable Test Case
 */
class GallerybannersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GallerybannersTable
     */
    public $Gallerybanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gallerybanners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gallerybanners') ? [] : ['className' => GallerybannersTable::class];
        $this->Gallerybanners = TableRegistry::getTableLocator()->get('Gallerybanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gallerybanners);

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
