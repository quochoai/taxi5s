<?php
  if (!isset($_REQUEST['action']))
    require_once $def['dashboard'];
  else {
    $action = trim($_REQUEST['action']);
    switch ($action) {
      case $def['actionNews']:
        require_once $def['listNews'];
        break;
      case $def['actionCategoriesNews']:
        require_once $def['listCateNews'];
        break;
      case $def['actionTags']:
        require_once $def['listTags'];
        break;
        case $def['actionInfo']:
          require_once $def['listInfo'];
          break;
      default:
        require_once $def['dashboard'];
        break;
    }
  }
