<?php

Class Controller_Index Extends Controller_Base {
		
	function index() {
		$this->registry['template']->set ('title', 'Preowned Gowns and Preowned Wedding Dresses Buy &amp; Sell');
		$this->registry['template']->set('meta_keys', 'Preowned Wedding Gowns, Used Wedding Gowns, Preowned Dresses, Dress resale');
		$this->registry['template']->set('meta_desc', 'Preowned Wedding gowns listings &amp; Wedding accessory listings at NO Cost. Wedding and bridesmaid gowns, prom dresses, from top designers for sale. New, sample and used wedding gowns');
		$this->registry['template']->show('index2');
		}
		
	function contact() {
		$this->registry['template']->set ('title', 'Contact Preowned Gowns Today');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'We would love to hear your thoughts and comments about our site, or to answer any questions you might have.');
		$this->registry['template']->show('contact');
		}
	
	function error() {
		$this->registry['template']->set ('title', 'Oops... This is embarrassing, we have not built this page yet... Sorry from Preowned Gowns');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('error');
		}
		
	function search() {
		$this->registry['template']->set ('title', 'Search from our selection of preowned gowns');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('search-gown-results');
		}
	
	function privacypolicy() {
		$this->registry['template']->set ('title', 'Privacy Policy at Preowned Gowns');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('privacypolicy');
		}
		
	function terms() {
		$this->registry['template']->set ('title', 'Terms &amp; Conditions only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('terms');
		}
		
	function sitemap() {
		$this->registry['template']->set ('title', 'Sitemap only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('sitemap');
		}
		
	function advertise() {
		$this->registry['template']->set ('title', 'Advertise with PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('advertise');
		}
		
	function copyright() {
		$this->registry['template']->set ('title', 'Copyright only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('copyright');
		}
		
}

?>