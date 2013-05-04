<?php

if(!session_id()){
	session_start();
}

class Flash{
	
	public function add($type, $message)
	{
		$_SESSION['messages'][$type][] = $message;

		return $this;
	}

	public function has($type = null)
	{
		if(null === $type){
			return isset($_SESSION['messages']);
		}else{
			return isset($_SESSION['messages'][$type]);			
		}
	}

	public function getMessages()
	{
		$messages = $this->has() ? (array) $_SESSION['messages'] : array();
		unset($_SESSION['messages']);

		return $messages;
	}
}