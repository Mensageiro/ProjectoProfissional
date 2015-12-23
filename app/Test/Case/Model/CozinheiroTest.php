<?php
App::uses('Cozinheiro', 'Model');

/**
 * Cozinheiro Test Case
 *
 */
class CozinheiroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cozinheiro',
		'app.pratos',
		'app.prato'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cozinheiro = ClassRegistry::init('Cozinheiro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cozinheiro);

		parent::tearDown();
	}

}
