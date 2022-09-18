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
  define("_processTag", _process.'tags/');
  define("_processInfo", _process.'information/');
  define("_processAdmin", _process.'admins/');
  define("_views", _app."views/");
  define("_viewsRequire", 'app/views/');
  define("_viewNews", _views.'news/');
  define("_viewRequireNews", _viewsRequire."news/");
  define("_viewCateNews", _views.'categoriesNews/');
  define("_viewRequireCateNews", _viewsRequire.'categoriesNews/');
  define("_viewLogin", _viewsRequire."login/");
  define("_viewRequireTags", _viewsRequire.'tags/');
  define("_viewTags", _views.'tags/');
  define("_viewRequireInfo", _viewsRequire.'information/');
  define("_viewInfo", _views.'information/');
  define("_viewRequireAdmin", _viewsRequire.'admins/');
  define("_viewAdmin", _views.'admins/');
  define("_viewController", 'app/controllers/');
  define('_imgUpload', _url.'imgUpload/');
  define('_ImgUploadRealPath', substr(_dir_root_, 0, -10)."imgUpload/");
  
  $def = [
    "loginView" => _viewLogin.'index.php',
    "loginProcess" => _processLogin,
    "app" => "app/controllers/app.php",
    'requireTitle' => _viewController.'title.php',
    'requireContent' => _viewController.'content.php',
    'dashboard' => _viewsRequire.'dashboard.php',
    // action
    'actionNews' => 'news',
    'actionCategoriesNews' => 'categories-news',
    'actionTags' => 'tags',
    'actionInfo' => 'information',
    'actionChangePassword' => 'change-password',
    // news category
    'listCateNews' => _viewRequireCateNews.'list.php',
    "listDataCateNews" => _viewRequireCateNews.'data/',
    "listDataCateNewsJs" => _viewRequireCateNews.'data/data.js',
    "listCateNewsDeleted" => _viewRequireCateNews.'listDeleted.php',
    "listDataCateNewsDeleted" => _viewRequireCateNews.'dataDeleted/',
    "listDataCateNewsDeletedJs" => _viewRequireCateNews.'dataDeleted/dataDeleted.js',
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
    // news category active
    "cateNewsActiveProcess" => _processCateNews.'active/',
    // news category sort
    "cateNewsSortProcess" => _processCateNews.'sort/',
    // news category show hide
    "cateNewsShowHideProcess" => _processCateNews.'show/',
    // news list
    "listNews" => _viewRequireNews.'list.php',
    "listDataNews" => _viewNews.'data/',
    "listDataNewsJs" => _viewNews.'data/data.js',
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
    // news active
    "newsActiveProcess" => _processNews.'active/',
    // news sort
    "newsSortProcess" => _processNews.'sort/',
    // news show/hide
    "newsShowHideProcess" => _processNews.'show/',

    // tags list
    "listTags" => _viewRequireTags.'list.php',
    "listDataTags" => _viewTags.'data/',
    "listDataTagsJs" => _viewTags.'data/data.js',
    "listTagsDeleted" => _viewRequireTags.'listDeleted.php',
    "listDataTagsDeleted" => _viewTags.'dataDeleted.php',
    "listDataTagsDeletedJs" => _viewTags.'dataDeleted.js',
    // tag add
    "tagAdd" => _viewTags.'add/',
    "tagAddProcess" => _processTag.'add/',
    // tag update
    "tagUpdate" => _viewTags.'update/',
    'tagUpdateProcess' => _processTag.'update/',
    // tag delete
    "tagDeleteProcess" => _processTag.'delete/',
    // tag active
    "tagActiveProcess" => _processTag.'active/',

    // information list
    "listInfo" => _viewRequireInfo.'list.php',
    "listDataInfo" => _viewInfo.'data/',
    "listDataInfoJs" => _viewInfo.'data/data.js',
    // information add
    "infoAdd" => _viewInfo.'add/',
    "infoAddProcess" => _processInfo.'add/',
    // information update
    "infoUpdate" => _viewInfo.'update/',
    'infoUpdateProcess' => _processInfo.'update/',
    // information active
    "infoActiveProcess" => _processInfo.'active/',

    // admin list
    "listAdmins" => _viewRequireAdmin.'list.php',
    "listDataAdmins" => _viewAdmin.'data/',
    "listDataAdminsJs" => _viewAdmin.'data/data.js',
    "listAdminsDeleted" => _viewRequireAdmin.'listDeleted.php',
    "listDataAdminsDeleted" => _viewAdmin.'dataDeleted.php',
    "listDataAdminsDeletedJs" => _viewAdmin.'dataDeleted.js',
    // admin add
    "adminAdd" => _viewAdmin.'add/',
    "adminAddProcess" => _processAdmin.'add/',
    // admin update
    "adminUpdate" => _viewAdmin.'update/',
    'adminUpdateProcess' => _processAdmin.'update/',
    // admin delete
    "adminDeleteProcess" => _processAdmin.'delete/',
    // tag active
    "adminActiveProcess" => _processAdmin.'active/',
    // admin change password
    "adminChangePassword" => _viewAdmin.'changePassword/',
    'adminUpdateProcess' => _processAdmin.'changePassword/',

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
