<?php
  define("_url", "http://hoaipham.com/");
  define("_assets", _url.'assets/');
  define("_theme", _assets."themes/");
  define("_tinymce", _url."tinymce/");
  define("_filemanager", _url.'filemanager/');
  define("_urladmin", "http://hoaipham.com/@admintaxi/");
  define("_app", _urladmin.'app/');
  define("_process", _app."process/");
  define("_processNews", _process.'news/');
  define("_processCateNews", _process.'categoriesNews/');
  define("_processOrder", _process.'orders/');
  define("_processCateOrder", _process.'categoriesOrders/');
  define("_processLogin", _process.'login/');
  define("_processTag", _process.'tags/');
  define("_processInfo", _process.'information/');
  define("_processAdmin", _process.'admins/');
  define("_processRole", _process.'role/');
  define("_processFunctionRole", _process.'frole/');
  define("_processHtml", _process.'htmls/');
  define("_processConfig", _process.'configuration/');
  define("_views", _app."views/");
  define("_viewsRequire", 'app/views/');
  define("_viewNews", _views.'news/');
  define("_viewRequireNews", _viewsRequire."news/");
  define("_viewCateNews", _views.'categoriesNews/');
  define("_viewRequireCateNews", _viewsRequire.'categoriesNews/');
  define("_viewCateOrders", _views.'categoriesOrders/');
  define("_viewRequireCateOrders", _viewsRequire.'categoriesOrders/');
  define("_viewOrders", _views.'orders/');
  define("_viewRequireOrders", _viewsRequire."orders/");
  define("_viewLogin", _viewsRequire."login/");
  define("_viewRequireTags", _viewsRequire.'tags/');
  define("_viewTags", _views.'tags/');
  define("_viewRequireInfo", _viewsRequire.'information/');
  define("_viewInfo", _views.'information/');
  define("_viewRequireAdmin", _viewsRequire.'admins/');
  define("_viewAdmin", _views.'admins/');
  define("_viewRequireHtml", _viewsRequire.'htmls/');
  define("_viewHtml", _views.'htmls/');
  define("_viewRequireConfiguration", _viewsRequire.'configuration/');
  define("_viewConfiguration", _views.'configuration/');
  define("_viewRequireRole", _viewsRequire.'role/');
  define("_viewRole", _views.'role/');
  define("_viewRequireFunctionRole", _viewsRequire.'frole/');
  define("_viewFunctionRole", _views.'frole/');
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
    'actionOrder' => 'orders',
    'actionCategoriesOrder' => 'categories-orders',
    'actionTags' => 'tags',
    'actionInfo' => 'information',
    'actionChangePassword' => 'change-password',
    'actionHtml' => 'htmls',
    'actionConfig' => 'configurations',
    'actionAdmin' => 'admin',
    'actionRole' => 'role',
    'actionRoleFunction' => 'function-role',
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

    // orders category
    'listCateOrders' => _viewRequireCateOrders.'list.php',
    "listDataCateOrder" => _viewRequireCateOrders.'data/',
    "listDataCateOrderJs" => _viewRequireCateOrders.'data/data.js',
    "listCateOrderDeleted" => _viewRequireCateOrders.'listDeleted.php',
    "listDataCateOrderDeleted" => _viewRequireCateOrders.'dataDeleted/',
    "listDataCateOrderDeletedJs" => _viewRequireCateOrders.'dataDeleted/dataDeleted.js',
    'imgUploadCateOrder' => _imgUpload.'cateOrders/',
    'imgUploadCateOrderRealPath' => _ImgUploadRealPath.'cateOrders/',
    // orders category add
    "cateOrderAdd" => _viewCateOrders.'add/',
    "cateOrderAddProcess" => _processCateOrder.'add/',
    // order category update
    "cateOrderUpdate" => _viewCateOrders.'update/',
    'cateOrderUpdateProcess' => _processCateOrder.'update/',
    // order category delete
    "cateOrderDeleteProcess" => _processCateOrder.'delete/',
    // order category active
    "cateOrderActiveProcess" => _processCateOrder.'active/',
    // news category sort
    "cateOrderSortProcess" => _processCateOrder.'sort/',
    // order list
    "listOrder" => _viewRequireOrders.'list.php',
    "listDataOrder" => _viewOrders.'data/',
    "listDataOrderJs" => _viewOrders.'data/data.js',
    "listOrderDeleted" => _viewRequireOrders.'listDeleted.php',
    "listDataOrderDeleted" => _viewOrders.'dataDeleted.php',
    "listDataOrderDeletedJs" => _viewOrders.'dataDeleted.js',
    'imgUploadOrder' => _imgUpload.'orders/',
    'imgUploadOrderRealPath' => _ImgUploadRealPath.'orders/',
    // order add
    "orderAdd" => _viewOrders.'add/',
    "orderAddProcess" => _processOrder.'add/',
    // order update
    "orderUpdate" => _viewOrders.'update/',
    'orderUpdateProcess' => _processOrder.'update/',
    // order delete
    "orderDeleteProcess" => _processOrder.'delete/',
    // order active
    "orderActiveProcess" => _processOrder.'active/',
    // order sort
    "orderSortProcess" => _processOrder.'sort/',

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

    // admin list
    "listAdmin" => _viewRequireAdmin.'list.php',
    "listDataAdmin" => _viewAdmin.'data/',
    "listDataAdminJs" => _viewAdmin.'data/data.js',
    "listAdminDeleted" => _viewRequireAdmin.'listDeleted.php',
    "listDataAdminDeleted" => _viewAdmin.'dataDeleted.php',
    "listDataAdminDeletedJs" => _viewAdmin.'dataDeleted.js',
    'imgUploadAdmin' => _imgUpload.'admins/',
    'imgUploadAdminRealPath' => _ImgUploadRealPath.'admins/',
    // admin add
    "adminAdd" => _viewAdmin.'add/',
    "adminAddProcess" => _processAdmin.'add/',
    // admin update
    "adminUpdate" => _viewAdmin.'update/',
    'adminUpdateProcess' => _processAdmin.'update/',
    'adminUpdateProcessSelf' => _processAdmin.'updateself/',
    // admin delete
    "adminDeleteProcess" => _processAdmin.'delete/',
    // admin active
    "adminActiveProcess" => _processAdmin.'active/',
    // admin change password
    "adminChangePassword" => _viewAdmin.'changePassword/',
    'adminChangePasswordProcess' => _processAdmin.'changePassword/',
    // admin change info self
    'adminChangeInfoSelf' => _viewAdmin.'updateself/',
    'adminUpdateProcessSelf' => _processAdmin.'updateself/',

    // Role list
    "listRole" => _viewRequireRole.'list.php',
    "listDataRole" => _viewRole.'data/',
    "listDataRoleJs" => _viewRole.'data/data.js',
    "listRoleDeleted" => _viewRequireRole.'listDeleted.php',
    "listDataRoleDeleted" => _viewRole.'dataDeleted.php',
    "listDataRoleDeletedJs" => _viewRole.'dataDeleted.js',
    // Role add
    "roleAdd" => _viewRole.'add/',
    "roleAddProcess" => _processRole.'add/',
    // Role update
    "roleUpdate" => _viewRole.'update/',
    'roleUpdateProcess' => _processRole.'update/',
    // Role delete
    "roleDeleteProcess" => _processRole.'delete/',

    // Role function list
    "listFunctionRole" => _viewRequireFunctionRole.'list.php',
    "listDataFunctionRole" => _viewFunctionRole.'data/',
    "listDataFunctionRoleJs" => _viewFunctionRole.'data/data.js',
    "listFunctionRoleDeleted" => _viewRequireFunctionRole.'listDeleted.php',
    "listDataFunctionRoleDeleted" => _viewFunctionRole.'dataDeleted.php',
    "listDataFunctionRoleDeletedJs" => _viewFunctionRole.'dataDeleted.js',
    // Role function add
    "functionRoleAdd" => _viewFunctionRole.'add/',
    "functionRoleAddProcess" => _processFunctionRole.'add/',
    // Role function update
    "functionRoleUpdate" => _viewFunctionRole.'update/',
    'functionRoleUpdateProcess' => _processFunctionRole.'update/',
    // Role function delete
    "functionRoleDeleteProcess" => _processFunctionRole.'delete/',

    // Html list
    "listHtml" => _viewRequireHtml.'list.php',
    'listDataHtml' => _viewHtml.'data/',
    'listDataHtmlJs' => _viewHtml.'data/data.js',
    'imgUploadHtml' => _imgUpload.'htmls/',
    'imgUploadHtmlRealPath' => _ImgUploadRealPath.'htmls/',
    // Html add
    "htmlAdd" => _viewHtml.'add/',
    "htmlAddProcess" => _processHtml.'add/',
    // Html update
    "htmlUpdate" => _viewHtml.'update/',
    'htmlUpdateProcess' => _processHtml.'update/',

    // Config list
    "listConfig" => _viewRequireConfiguration.'list.php',
    'listDataConfig' => _viewConfiguration.'data/',
    'listDataConfigJs' => _viewConfiguration.'data/data.js',
    // Config add
    "configAdd" => _viewConfiguration.'add/',
    "configAddProcess" => _processConfig.'add/',
    // Config update
    "configUpdate" => _viewConfiguration.'update/',
    'configUpdateProcess' => _processConfig.'update/',

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
    "tableCategoriesOrders" => 'categories_orders',
    'tableConfigurations' => 'configurations',
    'tableDistricts' => 'districts',
    'tableFunctionRoles' => 'function_roles',
    'tableHtmls' => 'htmls',
    'tableInformations' => 'informations',
    'tableNews' => 'news',
    "tableOrders" => "orders",
    'tableNewsTags' => 'news_tags',
    'tableProvinces' => 'provinces',
    'tableTags' => 'tags',
    'tableWards' => 'wards',

    // logout
    "logout" => "logout",
  ];
