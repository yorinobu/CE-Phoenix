<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

  require 'includes/application_top.php';

  require 'includes/system/segments/checkout/pipeline.php';

  if (isset($_POST['comments']) && !Text::is_empty($_POST['comments'])) {
    $_SESSION['comments'] = Text::input($_POST['comments']);
  } elseif (!isset($_SESSION['comments']) && !array_key_exists('comments', $_SESSION)) {
    $_SESSION['comments'] = null;
  }

  require language::map_to_translation('checkout_confirmation.php');

  require $oscTemplate->map_to_template(__FILE__, 'page');

  require 'includes/application_bottom.php';
