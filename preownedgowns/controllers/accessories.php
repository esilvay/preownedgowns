<?php

Class Controller_Accessories Extends Controller_Base {
	
	function index() {
		error_reporting(0);
		$this->registry['template']->set ('title', 'Preowned Gown Accessories from leading designers');
		$this->registry['template']->set('meta_keys', 'used wedding veils, tiaras, wraps, flowers, sashes, shoes, slips, jewelry');
		$this->registry['template']->set('meta_desc', 'An accessory can add the perfect touch to your wedding gown. Our accessory listings include veils, tiaras, wraps, flowers, sashes, shoes, slips and jewelry.');
		$this->registry['template']->show('accessory-results');
		}
		
	function look() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('accessory-item');
		}
}
?>