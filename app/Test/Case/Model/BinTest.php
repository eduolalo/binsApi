<?php
App::uses('Bin', 'Model');

/**
 * Bin Test Case
 *
 */
class BinTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bin',
		'app.user',
		'app.profile',
		'app.profile_category',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bin = ClassRegistry::init('Bin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bin);

		parent::tearDown();
	}

}
