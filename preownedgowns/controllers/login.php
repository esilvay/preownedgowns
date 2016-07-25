<?php

Class Controller_Login Extends Controller_Base {

	function index() {
		$this->registry['template']->set ('title', 'Login | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', 'wedding registry, the knot, wedding gowns, wedding dress, bridesmaid dress, prom dress, preownedgowns.com');
		$this->registry['template']->set('meta_desc', 'PreOwnedGowns.com is a service that assists buyers and sellers with new and used gowns. The seller pays a flat rate to list a dress on the site for a period of time');
		$this->registry['template']->show('login');
		}
	
	function success() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('login_success');
		}
		
	function fail() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('login_fail');
		}
		
	function forgot() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('forgot');
		}
		
	function reminder() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('reminder');
		}
}
?>