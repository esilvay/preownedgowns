<?php

Class Controller_Login Extends Controller_Base {

	function index() {
		$this->registry['template']->set ('title', 'You have Succesfully Logged out of PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('loggedout');
		}
}
?>