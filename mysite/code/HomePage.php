<?php

class HomePage extends Page {
	
	private static $db = array (
		'FeaturedTitle' => 'Text',
		'FeaturedContent' => 'Text',
	);

	private static $can_be_root = true;


	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main', TextField::create('FeaturedTitle','Featured Heading'),'Content');
		$fields->addFieldToTab('Root.Main', TextareaField::create('FeaturedContent','Featured Content'),'Content');

		return $fields;
	}
	
	private static $allowed_children = array (
		'ShowCase'
	);
}

class HomePage_Controller extends Page_Controller {

	
}