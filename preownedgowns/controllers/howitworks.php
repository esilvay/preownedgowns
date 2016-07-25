<?php

Class Controller_Howitworks Extends Controller_Base {
	
	function index() {
		error_reporting(0);
		$this->registry['template']->set ('title', 'General Information about PreOwnedGowns.com. | Buy &amp; Sell used wedding gowns | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', 'used wedding gowns, preownedgowns.com, buying and selling wedding gowns online');
		$this->registry['template']->set('meta_desc', 'Information about buying and selling new, sample and used wedding gowns online');
		$this->registry['template']->show('hiw');
		}
	
	function sizingguide() {
		$this->registry['template']->set ('title', 'Gown Size Guide | Purchase a PreOwnedGown With Confidence | only at PreOwnedGownd.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'Wedding gowns differ in sizes but PreOwnedGowns.com lets you browse used wedding gowns by size');
		$this->registry['template']->show('hiw-ssg');
		}
		
	function gowns101() {
		$this->registry['template']->set ('title', 'Wedding Gowns | Necklines | Silhouettes | Waistlines | Trains &amp; Fabrics Defined | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', 'common wedding terms, wedding dress glossary, wedding gown glossary, wedding glossary');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-g101');
		}
		
	function gowncleaning() {
		$this->registry['template']->set ('title', 'Wedding Dress Cleaning | Advice on cleaning &amp; storing a wedding gown | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', 'wedding gown cleaning, properly store wedding gown');
		$this->registry['template']->set('meta_desc', 'Tips and recommendations on how to properly clean and store a wedding dress');
		$this->registry['template']->show('hiw-gowncleaning');
		}
		
	function onlinetransactiontips() {
		$this->registry['template']->set ('title', 'Recommended Transaction Tips | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-onlinett');
		}
		
	function recommendedpayment() {
		$this->registry['template']->set ('title', 'Recommended Payment Tips | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-rp');
		}
		
	function testimonials() {
		$this->registry['template']->set ('title', 'Testimonials | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-testimonials');
		}
		
	function faqs() {
		$this->registry['template']->set ('title', 'FAQs | Frequently Asked Questions | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-faqs');
		}
		
	function sellwithpog() {
		$this->registry['template']->set ('title', 'Sell Wedding Gown | Bridesmaid Dress | Prom Dress | Evening Wear | Get Started Today | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-sellwithpog');
		}
		
	function sellgown() {
		$this->registry['template']->set ('title', 'Sell Wedding Gown | Bridesmaid Dress | Prom Dress | Evening Wear | Get Started Today | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-sellgown');
		}
		
	function optimizelisting() {
		$this->registry['template']->set ('title', 'Optimize Gown Listing on PreOwnedGowns | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'Get the most out of your listing on PreOwnedGowns.com, we offer a few tips to help you sell your gown quickly');
		$this->registry['template']->show('hiw-optimize');
		}
		
	function managelisting() {
		$this->registry['template']->set ('title', 'Manage Your Gown Listing | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'The neccessary steps to manage and keep your gown or dress listing up-to-date');
		$this->registry['template']->show('hiw-managelisting');
		}
		
	function sellingsafety() {
		$this->registry['template']->set ('title', 'Ways To Help Protect Your Investment | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'Sell your gown or dress with confidence.');
		$this->registry['template']->show('hiw-sellsafe');
		}
		
	function buywithpog() {
		$this->registry['template']->set ('title', 'Buy A Wedding Gown | Bridesmaid Dress | Prom Dress | Evening Wear Gowns | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'Search through our gown and accessory listings and find your dream gown today');
		$this->registry['template']->show('hiw-buywithpog');
		}
		
	function buyingvsrenting() {
		$this->registry['template']->set ('title', '');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-buyrent');
		}
		
	function searchgown() {
		$this->registry['template']->set ('title', 'Search Gowns | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', '');
		$this->registry['template']->show('hiw-searchgown');
		}
		
	function contactseller() {
		$this->registry['template']->set ('title', 'Contacting A Seller | only at PreOwnedGowns.com');
		$this->registry['template']->set('meta_keys', '');
		$this->registry['template']->set('meta_desc', 'Contact a seller with confidence. Here are a few strategies to help.');
		$this->registry['template']->show('hiw-contactseller');
		}
}
?>