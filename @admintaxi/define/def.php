<?php
  define("_url", "https://localhost/taxi5s/");
  define("_assets", _url.'assets/');
  define("_theme", _assets."themes/");
  define("_tinymce", _url."tinymce/");
  define("_filemanager", _url.'filemanager/');
  define("_urladmin", "https://localhost/taxi5s/@admintaxi/");
  define("_app", _urladmin.'app/');
  define("_process", _app."process/");
  define("_processNews", _process.'news/');
  define("_processCateNews", _process.'categoriesNews/');
  define("_processLogin", _process.'login/');
  define("_views", _app."views/");
  define("_viewsRequire", 'app/views/');
  define("_viewNews", _views.'news/');
  define("_viewRequireNews", _viewsRequire."news/");
  define("_viewCateNews", _views.'categoriesNews/');
  define("_viewRequireCateNews", _viewsRequire.'categoriesNews/');
  define("_viewLogin", _viewsRequire."login/");
  define("_viewController", 'app/controllers/');
  define('_imgUpload', _url.'imgUpload/');
  define('_ImgUploadRealPath', substr(_dir_root_, 0, -10)."imgUpload/");
  
  $def = [
    "loginView" => _viewLogin.'index.php',
    "loginProcess" => _processLogin.'index.php',
    "app" => "app/controllers/app.php",
    'requireTitle' => _viewController.'title.php',
    'requireContent' => _viewController.'content.php',
    'dashboard' => _viewsRequire.'dashboard.php',
    // news
    'actionNews' => 'news',
    'actionCategoriesNews' => 'categories-news',
    // news category
    'listCateNews' => _viewRequireCateNews.'list.php',
    "listDataCateNews" => _viewRequireCateNews.'data.php',
    "listDataCateNewsJs" => _viewRequireCateNews.'data.js',
    "listCateNewsDeleted" => _viewRequireCateNews.'listDeleted.php',
    "listDataCateNewsDeleted" => _viewRequireCateNews.'dataDeleted.php',
    "listDataCateNewsDeletedJs" => _viewRequireCateNews.'dataDeleted.js',
    'imgUploadCateNews' => _imgUpload.'cateNews/',
    'imgUploadCateNewsRealPath' => _ImgUploadRealPath.'cateNews/',
    // news category add
    "cateNewsAdd" => _viewCateNews.'add/',
    "cateNewsAddProcess" => _processCateNews.'add/',
    // news category update
    "cateNewsUpdate" => _viewCateNews.'update/',
    'cateNewsUpdateProcess' => _processCateNews.'update/',
    // news category delete
    "cateNewsDeleteProcess" => _processCateNews.'delete/',
    // news list
    "listNews" => _viewRequireNews.'list.php',
    "listDataNews" => _viewNews.'data.php',
    "listDataNewsJs" => _viewNews.'data.js',
    "listNewsDeleted" => _viewRequireNews.'listDeleted.php',
    "listDataNewsDeleted" => _viewNews.'dataDeleted.php',
    "listDataNewsDeletedJs" => _viewNews.'dataDeleted.js',
    'imgUploadNews' => _imgUpload.'news/',
    'imgUploadNewsRealPath' => _ImgUploadRealPath.'news/',
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
    'sidebar' => _viewsRequire.'sidebar.php',
    'navbar' => _viewsRequire.'navbar.php',

    // table in database
    "tableAdmin" => "admins",
    "tableAdminRoles" => "admin_roles",
    "tableCategories" => "categories",
    "tableCategoriesNews" => "categories_news",
    'tableConfigurations' => 'configurations',
    'tableDistricts' => 'districts',
    'tableFunctionRoles' => 'function_roles',
    'tableHtmls' => 'htmls',
    'tableInformations' => 'informations',
    'tableNews' => 'news',
    'tableNewsTags' => 'news_tags',
    'tableProvinces' => 'provinces',
    'tableTags' => 'tags',
    'tableWards' => 'wards',

    // logout
    "logout" => "logout",
  ];
