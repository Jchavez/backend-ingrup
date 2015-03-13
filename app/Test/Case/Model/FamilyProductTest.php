<?php
App::uses('FamilyProduct', 'Model');

/**
 * FamilyProduct Test Case
 *
 */
class FamilyProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilyProduct = ClassRegistry::init('FamilyProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyProduct);

		parent::tearDown();
	}

}
