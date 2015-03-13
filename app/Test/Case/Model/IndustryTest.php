<?php
App::uses('Industry', 'Model');

/**
 * Industry Test Case
 *
 */
class IndustryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.industry'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Industry = ClassRegistry::init('Industry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Industry);

		parent::tearDown();
	}

}
