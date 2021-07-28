<?php
/*
  $server_error_id: server_error.php ver1.0.0 2008-04-09 $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/


 require 'includes/application_top.php';

  require language::map_to_translation('server_error.php');

  require $oscTemplate->map_to_template(__FILE__, 'page');

  require 'includes/application_bottom.php';

