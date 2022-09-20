<?php
  if (!isset($_REQUEST['action']))
    $title = $lang['admin_title'];
  else {
    $action = trim($_REQUEST['action']);
    switch ($action) {
      case $def['actionOrder']:
        $title = $lang['manageOrders'];
        break;
      case $def['actionCategoriesOrder']:
        $title = $lang['manageCategoryOrders'];
        break;
      case $def['actionNews']:
        $title = $lang['manageNews'];
        break;
      case $def['actionCategoriesNews']:
        $title = $lang['manageCategoryNews'];
        break;
      case $def['actionTags']:
        $title = $lang['manageTags'];
        break;
      case $def['actionInfo']:
        $title = $lang['manageInformation'];
        break;
      default:
        $title = $lang['admin_title'];
        break;
    }
  }
  echo $title;