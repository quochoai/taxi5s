<?php
  define("_url", "http://localhost/taxi5s/");
  define("_assets", _url.'assets/');
  define("_theme", _assets."themes/");
  define("_tinymce", _url."tinymce/");
  define("_filemanager", _url.'filemanager/');
  define("_urladmin", "http://localhost/taxi5s/@admintaxi/");
  define("_app", _urladmin.'app/');
  define("_process", _app."process/");
  define("_processNews", _process.'news/');
  define("_processLogin", _process.'login/');
  define("_views", _app.'views/');
  define("_viewNews", _views.'news/');
  define("_viewLogin", _views."login/");
  
  $def = [
    "loginView" => _viewLogin."index.php",
    "loginProcess" => _processLogin."index.php",
    "app" => _app."controllers/app.php",
    // news
    // news list
    "listNews" => _viewNews.'list.php',
    "listDataNews" => _viewNews.'data.php',
    "listDataNewsJs" => _viewNews.'data.js',
    "listNewsDeleted" => _viewNews.'listDeleted.php',
    "listDataNewsDeleted" => _viewNews.'dataDeleted.php',
    "listDataNewsDeletedJs" => _viewNews.'dataDeleted.js',

    // news add
    "newsAdd" => _viewNews.'add/',
    "newsAddProcess" => _processNews.'add/',
    // news update
    "newsUpdate" => _viewNews.'update/',
    'newsUpdateProcess' => _processNews.'update/',
    // news delete
    "newsDeleteProcess" => _processNews.'delete/',
    // news approve
    "newsApproveProcess" => _processNews.'approve/',
    // theme
    "themeDist" => _theme.'dist/',
    "themeJs" => _theme.'js/',
    'themePlugins' => _theme.'plugins/',

    // sidebar
    'sidebar' => _views.'sidebar.php',
    'navbar' => _views.'navbar.php',

    // logout
    "logout" => "logout",
  ];
