<?php

Class Controller_Gowns Extends Controller_Base {
	
	function index() {
		error_reporting(0);
		$this->registry['template']->set ('title', 'Preowned Gowns and Wedding Dresses for a fraction of the cost');
		$this->registry['template']->set('meta_keys', 'used wedding dresses, used bridesmaid dresses, designer wedding dresses, preowned wedding dress, second hand wedding dresses, preowned gowns, used wedding gowns, pre owned wedding dresses, preowned wedding dress');
		$this->registry['template']->set('meta_desc', 'PreOwnedGowns.com offers top designer wedding, bridesmaid, prom and evening gowns at rock bottom prices, only at PreOwnedGowns.com');
		$this->registry['template']->show('gown-results');
		}
	
	function look() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('gown-item');
		}
}
?>