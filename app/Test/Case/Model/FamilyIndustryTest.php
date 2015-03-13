<?php
App::uses('FamilyIndustry', 'Model');

/**
 * FamilyIndustry Test Case
 *
 */
class FamilyIndustryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.family_industry',
		'app.industries'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FamilyIndustry = ClassRegistry::init('FamilyIndustry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FamilyIndustry);

		parent::tearDown();
	}

}
