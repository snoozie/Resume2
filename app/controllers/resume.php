<?php

namespace controllers;
use core\view as View;

/*
 * Resume controller
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

class Resume extends \core\controller {

    /**
     * call the parent construct
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * define new model and get Resume data
     */
    public function index() {

        $resume = new \models\Resume();

        $personal_details = $resume->getPersonalDetails();
        $objectives = $resume->getObjectives();
        $skills = $resume->getSkills();
        $education = $resume->getEducation();
        $experience = $resume->getExperience();
        $hobbies = $resume->getHobbies();
        $references = $resume->getReferences();

        $data = array('title'=>"CV", 'personal_details' => $personal_details, 'objectives' => $objectives, 'skills' => $skills,
            'education' => $education, 'experience' => $experience, 'hobbies' => $hobbies, 'references' => $references);   
        
        View::rendertemplate('header', $data);
        View::render('resume/main', $data);
        View::rendertemplate('footer', $data);
    }

}
