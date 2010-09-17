<?php

  /**
  * BaseProjectTaskListTemplate class
  *
  * @http://www.projectpier.org/
  */
  abstract class BaseProjectTaskListTemplate extends ProjectDataObject {
  
    // -------------------------------------------------------
    //  Access methods
    // -------------------------------------------------------
  
    /**
    * Return value of 'id' field
    *
    * @access public
    * @param void
    * @return integer 
    */
    function getId() {
      return $this->getColumnValue('id');
    } // getId()
    
    /**
    * Set value of 'id' field
    *
    * @access public   
    * @param integer $value
    * @return boolean
    */
    function setId($value) {
      return $this->setColumnValue('id', $value);
    } // setId() 
    
    /**
    * Return value of 'name' field
    *
    * @access public
    * @param void
    * @return string 
    */
    function getName() {
      return $this->getColumnValue('name');
    } // getName()
    
    /**
    * Set value of 'name' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    function setName($value) {
      return $this->setColumnValue('name', $value);
    } // setName() 

    /**
    * Return value of 'data' field
    *
    * @access public
    * @param void
    * @return string 
    */
    function getData() {
      return $this->getColumnValue('data');
    } // getData()
    
    /**
    * Set value of 'data' field
    *
    * @access public   
    * @param string $value
    * @return boolean
    */
    function setData($value) {
      return $this->setColumnValue('data', $value);
    } // setData() 
    
    
    /**
    * Return manager instance
    *
    * @access protected
    * @param void
    * @return ProjectTaskListTemplates 
    */
    function manager() {
      if (!($this->manager instanceof ProjectTaskListTemplates)) {
        $this->manager = ProjectTaskListTemplates::instance();
      }
      return $this->manager;
    } // manager
  
  } // BaseProjectTaskListTemplate 

?>
