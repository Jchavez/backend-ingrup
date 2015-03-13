<?php
App::uses('CategoryIndustry', 'Model');

/**
 * CategoryIndustry Test Case
 *
 */
class CategoryIndustryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category_industry',
		'app.family_industries'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryIndustry = ClassRegistry::init('CategoryIndustry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryIndustry);

		parent::tearDown();
	}

}
