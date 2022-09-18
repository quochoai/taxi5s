<?php
  if (!isset($_REQUEST['action']))
    $title = $lang['admin_title'];
  else {
    $action = trim($_REQUEST['action']);
    switch ($action) {
      case $def['actionNews']:
        $title = $lang['manageNews'];
        break;
      case $def['actionCategoriesNews']:
        $title = $lang['manageCategoryNews'];
        break;
      case $def['actionTags']:
        $title = $lang['manageTags'];
        break;
      default:
        $title = $lang['admin_title'];
        break;
    }
  }
  echo $title;