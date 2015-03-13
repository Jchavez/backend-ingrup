<?php
App::uses('CategoryProduct', 'Model');

/**
 * CategoryProduct Test Case
 *
 */
class CategoryProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_product',
		'app.family_products'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryProduct = ClassRegistry::init('CategoryProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryProduct);

		parent::tearDown();
	}

}
