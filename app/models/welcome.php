<?php namespace models;
class Welcome extends \core\model{

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
        
        //foreach($rows as $row)
        //{
         //   $skills[$row->type] = $row->skill;
        //}
        
        return $rows;
    }
    
    public function getEducation()
    {
        return $this->_db->select("SELECT * FROM `education`");
    }
    
    public function getExperience()
    {
        return $this->_db->select("SELECT * FROM `experience`");
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
