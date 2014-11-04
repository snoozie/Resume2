<?php namespace models;

/*
 * Resume model
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

class Resume extends \core\model{

    /**
     * call the parent construct
     */
    public function __construct(){
            parent::__construct();
    }
    
    /*
     * Get personal details from database
     */
    public function getPersonalDetails()
    {
        return $this->_db->select("SELECT * FROM `personal details`");
    }
    
    /*
     * Get objectives from database
     */
    public function getObjectives()
    {
        return $this->_db->select("SELECT * FROM `objectives`");
    }
    
    /*
     * Get skills from database
     */
    public function getSkills()
    {
        return $this->_db->select("SELECT * FROM `skills`");
    }
    
    /*
     * Get education from database
     */
    public function getEducation()
    {
        return $this->_db->select("SELECT * FROM `education`");
    }
    
    /*
     * Get experience from database
     */
    public function getExperience()
    {
        return $this->_db->select("SELECT * FROM `experience` Order by `Start` DESC");
    }
    
    /*
     * Get hobbies from database
     */
    public function getHobbies()
    {
        return $this->_db->select("SELECT * FROM `hobbies`");
    }
    
    /*
     * Get references from database
     */
    public function getReferences()
    {
        return $this->_db->select("SELECT * FROM `references`");
    }

}
