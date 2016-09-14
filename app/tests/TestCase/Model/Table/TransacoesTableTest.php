<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransacoesTable Test Case
 */
class TransacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransacoesTable
     */
    public $Transacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Transacoes') ? [] : ['className' => 'App\Model\Table\TransacoesTable'];
        $this->Transacoes = TableRegistry::get('Transacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transacoes);

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
