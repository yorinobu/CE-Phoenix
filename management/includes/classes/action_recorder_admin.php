<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

  class actionRecorderAdmin extends actionRecorder {

    function __construct($module, $user_id = null, $user_name = null) {
      $module = tep_sanitize_string(str_replace(' ', '', $module));

      if (!defined('MODULE_ACTION_RECORDER_INSTALLED')
        || !tep_not_null(MODULE_ACTION_RECORDER_INSTALLED)
        || !tep_not_null($module)
        || !in_array("$module.php", explode(';', MODULE_ACTION_RECORDER_INSTALLED))
        || !class_exists($module))
      {
        return false;
      }

      $this->_module = $module;

      if (!empty($user_id) && is_numeric($user_id)) {
        $this->_user_id = $user_id;
      }

      if (!empty($user_name)) {
        $this->_user_name = $user_name;
      }

      $GLOBALS[$this->_module] = new $module();
      $GLOBALS[$this->_module]->setIdentifier();
    }

  }
