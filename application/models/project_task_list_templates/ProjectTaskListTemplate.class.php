<?php

  /**
  * ProjectTaskListTemplate class
  * Generated on Wed, 08 Mar 2006 15:51:26 +0100 by DataObject generation tool
  *
  * @http://www.projectpier.org/
  */
  class ProjectTaskListTemplate extends BaseProjectTaskListTemplate {
    
    // ---------------------------------------------------
    //  Operations
    // ---------------------------------------------------
    function canView(User $user) {
      if ($user->isAdministrator()) {
        return true; // user is administrator or root
      } // if
      return false; // no no
    }

    function canAdd(User $user, Project $project) {
      if ($user->isAdministrator()) {
        return true; // user is administrator or root
      } // if
      return false; // no no
    }
    function canEdit(User $user) {
      if ($user->isAdministrator()) {
        return true; // user is administrator or root
      } // if
      return false; // no no
    }
 
    /**
    * Check if specific user can delete this list
    *
    * @param User $user
    * @return boolean
    */
    function canDelete(User $user) {
      if ($user->isAdministrator()) {
        return true; // user is administrator or root
      } // if
      return false; // no no
    } // canDelete
    
    // ---------------------------------------------------
    //  URLs
    // ---------------------------------------------------
    
    /**
    * Delete this task list template
    *
    * @param void
    * @return string
    */
    function getDeleteUrl() {
      return get_url('task', 'delete_list_template', array('id' => $this->getId(), 'active_project' => $this->getProjectId()));
    } // getDeleteUrl
    
    // ---------------------------------------------------
    //  System
    // ---------------------------------------------------
    
    /**
    * Validate before save
    *
    * @access public
    * @param array $errors
    * @return null
    */
    function validate(&$errors) {
      if (!$this->validatePresenceOf('name')) {
        $errors[] = lang('task list template name required');
      } // if
    } // validate
    
    /**
    * Delete this task lists
    *
    * @access public
    * @param void
    * @return boolean
    */
    function delete() {
      return parent::delete();
    } // delete
    
    /**
    * Save this list
    *
    * @param void
    * @return boolean
    */
    function save() {
      parent::save();
      
      return true;
    } // save
    
    // ---------------------------------------------------
    //  ApplicationDataObject implementation
    // ---------------------------------------------------
    
    /**
    * Return object type name
    *
    * @param void
    * @return string
    */
    function getObjectTypeName() {
      return lang('task list template');
    } // getObjectTypeName
    
    /**
    * Return object URl
    *
    * @access public
    * @param void
    * @return string
    */
    function getObjectUrl() {
      return '';//$this->getViewUrl();
    } // getObjectUrl
    
  } // ProjectTaskListTemplate 

?>
