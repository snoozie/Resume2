<?php namespace models;
class Resume extends \core\model{

	/**
	 * call the parent construct
	 */
	public function __construct(){
		parent::__construct();
	}

    public function getPersonalDetails()
    {
        return $this->_db->select("SELECT * FROM `personal details`");
    }
    
    public function getObjectives()
    {
        return $this->_db->select("SELECT * FROM `objectives`");
    }
    
    public function getSkills()
    {
        $skills = array();
        $rows = $this->_db->select("SELECT * FROM `skills`");
        
        return $rows;
    }
    
    public function getEducation()
    {
        return $this->_db->select("SELECT * FROM `education`");
    }
    
    public function getExperience()
    {
        return $this->_db->select("SELECT * FROM `experience` Order by `Start` DESC");
    }
    
    public function getHobbies()
    {
        return $this->_db->select("SELECT * FROM `hobbies`");
    }
    
    public function getReferences()
    {
        return $this->_db->select("SELECT * FROM `references`");
    }

}
