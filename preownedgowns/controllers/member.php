<?php

Class Controller_Member Extends Controller_Base {

	function index() {
		$this->registry['template']->set ('title', 'Welcome Member | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('member');
		}
		
	function gownlisting() {
		$this->registry['template']->set ('title', 'List a Gown | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('gown-listing');
		}
		
	function accessorylisting() {
		$this->registry['template']->set ('title', 'List an Accessory | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('accessory-listing');
		}
		
	function manageprofile() {
		$this->registry['template']->set ('title', 'Manage your Information | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('manage-profile');
		}
		
	function mygownsforsale() {
		$this->registry['template']->set ('title', 'My Gowns | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('mygowns');
		}
		
	function myaccessoriesforsale() {
		$this->registry['template']->set ('title', 'My Accessories | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('myaccessories');
		}
		
	function submitticket() {
		$this->registry['template']->set ('title', 'Submit a Ticket | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('myticket');
		}
		
	function out() {
		$this->registry['template']->set ('title', 'Log Out | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('login_out');
		}
		
	function gownalerts() {
		$this->registry['template']->set ('title', 'Recieve Gown Alerts | PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('myalerts');
		}
}
?>