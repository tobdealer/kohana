<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends ORM {


	protected $_has_many = array(
			'texts'       => array('model' => 'Text'),
	);

} // End User Model