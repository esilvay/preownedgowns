<?php

Class Controller_Admin Extends Controller_Base {

	function index() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-login');
		}
		
	function home() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-page');
		}
		
	function gowns() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-gowns');
		}
		
	function accessories() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-accessories');
		}
		
	function listaccessory() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-accessory-listing');
		}
		
	function listgown() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-gown-listing');
		}
		
	function mygowns() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('myadmingowns');
		}
		
	function myaccessories() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('myadminaccessories');
		}
		
	function updategown() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-gown-update');
		}
		
	function updateaccessory() {
		$this->registry['template']->set ('title', 'Admin');
		$this->registry['template']->set('meta_keys', 'Admin');
		$this->registry['template']->set('meta_desc', 'Admin');
		$this->registry['template']->show('admin-accessory-update');
		}

}
?>