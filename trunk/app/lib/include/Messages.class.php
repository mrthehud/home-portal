<?php
class Messages {
	private static $instance=null;
	private $messages=array();

	private function __construct() {
		$this->instance = new Messages();
	}

	public static function getInstance() {
		if( is_null( self::$instance ) ) new Messages();
		return $this->instance;
	}

	public function send($msg, $type) {
		$message = $msg instanceof Message ? $msg : new Message($message, $type);
		$this->messages[] = $message;
	}

	public function sendDebug($msg) {
		$this->send($msg, Message::DEBUG);
	}

	public function retrieve() {
		return $this->messages;
	}

	public static function getMessages() {
		return self::getInstance()->retrieve();
	}
}

class Message {
	private $type=Message::NOTICE;
	private $message='';

	const NOTICE='notice';
	const WARNING='warning';
	const DEBUG='debug';

	public function __construct($message, $type) {
		$this->message = $message;
		$this->type = $type;
	}

	public function getMessage() {
		return $this->message;
	}
}