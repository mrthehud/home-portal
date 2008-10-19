<?php
require_once(dirname(__FILE__).'/../include/Messages.class.php');
class ProjectBaseModel extends AgaviModel {
	/*
		This is the base model all your application's models should extend.
		This way, you can easily inject new functionality into all of your models.
	*/

	protected static $messages = null;

	public function __construct() {
		$this->messages = Messages::getInstance();
	}
}

?>