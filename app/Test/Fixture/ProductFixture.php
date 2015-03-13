<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'main_image' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image4' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'image5' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_materials' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_features' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_weight' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_dimensions' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_packaging' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_storage' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_order' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datasheet_colors' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2048, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category_products_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'category_industries_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'category_products_id' => array('column' => 'category_products_id', 'unique' => 0),
			'category_industries_id' => array('column' => 'category_industries_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'main_image' => 'Lorem ipsum dolor sit amet',
			'image1' => 'Lorem ipsum dolor sit amet',
			'image2' => 'Lorem ipsum dolor sit amet',
			'image3' => 'Lorem ipsum dolor sit amet',
			'image4' => 'Lorem ipsum dolor sit amet',
			'image5' => 'Lorem ipsum dolor sit amet',
			'datasheet_description' => 'Lorem ipsum dolor sit amet',
			'datasheet_materials' => 'Lorem ipsum dolor sit amet',
			'datasheet_features' => 'Lorem ipsum dolor sit amet',
			'datasheet_weight' => 'Lorem ipsum dolor sit amet',
			'datasheet_dimensions' => 'Lorem ipsum dolor sit amet',
			'datasheet_packaging' => 'Lorem ipsum dolor sit amet',
			'datasheet_storage' => 'Lorem ipsum dolor sit amet',
			'datasheet_order' => 'Lorem ipsum dolor sit amet',
			'datasheet_colors' => 'Lorem ipsum dolor sit amet',
			'category_products_id' => 1,
			'category_industries_id' => 1,
			'created' => '2015-03-12 15:50:33',
			'modified' => '2015-03-12 15:50:33'
		),
	);

}
