<?php namespace controllers;
use core\view as View;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Resume extends \core\controller{

	/**
	 * call the parent construct
	 */
	public function __construct(){
		parent::__construct();

		//$this->language->load('welcome');
	}

	/**
	 * define page title and load template files
	 */
	public function index(){

		$personalDetails = new \models\Welcome();
		
		//$data['title'] = 'Welcome';
		//$data['welcome_message'] = $this->language->get('welcome_message');
                $personal_details = array();
                $personal_details = $personalDetails->getPersonalDetails();
                $objectives = $personalDetails->getObjectives();
                $skills = $personalDetails->getSkills();
                $education = $personalDetails->getEducation();
                $experience = $personalDetails->getExperience();
                $hobbies = $personalDetails->getHobbies();
                $references = $personalDetails->getReferences();
                //print_r ($personal_details); 

		View::rendertemplate('header', $data);
		//View::render('welcome/welcome', $data);
		View::render('welcome/welcome', $personal_details[0]);
                
                View::render('welcome/objectives', $objectives);
                
                View::render('welcome/skills', $skills);
                View::render('welcome/education', $education);
                
                View::render('welcome/experience', $experience);
                View::render('welcome/hobbies', $hobbies);
                View::render('welcome/references', $references);
		View::rendertemplate('footer', $data);
	}

}
