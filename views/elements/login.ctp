<?php
	if(!$this->Session->read('Auth.User.id')){
		$login = isset($login) ? $login : array();
		echo $this->Facebook->login($login);
	}
	else{
		$logout = isset($logout) ? $logout : array();
		echo $this->Facebook->logout($logout);
	}