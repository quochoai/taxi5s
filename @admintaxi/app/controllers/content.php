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
    }
  }
