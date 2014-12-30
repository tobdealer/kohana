<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Text extends ORM {


	protected $_belongs_to = array(
			'creator'       => array('model' => 'User'),
	);

} // End User Model