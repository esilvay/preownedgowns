<?php

Class Controller_Register Extends Controller_Base {

	function index() {
		$this->registry['template']->set ('title', 'Sign-Up for a FREE PreOwnedGowns.com Account | Gain all the Benefits | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', 'wedding registry, the knot, wedding gowns, wedding dress, bridesmaid dress, prom dress, preownedgowns.com');
		$this->registry['template']->set('meta_desc', 'Register today for a FREE PreOwnedGowns.com account, and start reaping the benefits of rock bottom deals from all top Wedding Designers');
		$this->registry['template']->show('register');
		}
	
	function Verify() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('verify');
		}
		
	function Activated() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('activated');
		}
		
	function ActivationError() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('activation_error');
		}
}
?>