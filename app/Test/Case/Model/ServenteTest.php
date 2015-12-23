<?php
App::uses('Servente', 'Model');

/**
 * Servente Test Case
 *
 */
class ServenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.servente',
		'app.mesa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Servente = ClassRegistry::init('Servente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Servente);

		parent::tearDown();
	}

}
