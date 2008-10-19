<?php
class Messages extends ProjectBaseModel implements AgaviISingletonModel {
	private $messages=array();
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