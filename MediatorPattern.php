<?php
class ChatRoom {
	function __construct() {}
	
	public function showMessage(User $user, string $message): void {
		echo date('Y-m-d') . ' [' . $user->getName() . '] : ' . $message . '<br/>';
	}
}

class User {
	function __construct(string $name) {
		$this->name = $name;
	}
	
	public function getName(): string {
		return $this->name;
	}
	
	public function setName(string $name) {
		$this->name = $name;
	}
	
	public function sendMessage(string $message): void {
		$chat_room = new ChatRoom();
		$chat_room->showMessage($this, $message);
	}
}

$robert = new User('Robert');
$john = new User('John');

$robert->sendMessage('Hi! John!');
$john->sendMessage('Hello! Robert!');
?>