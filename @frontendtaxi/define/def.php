<?php
  define("_url", "http://hoaipham.com/");
  define("_assets", _url.'assets/');
  define("_theme", _assets."themes/");
  define("_app", _url.'@frontendtaxi/app/');
  define("_process", _app."process/");
  define("_processNews", _process.'news/');
  define("_processOrder", _process.'orders/');
  define("_processTag", _process.'tags/');
  define("_processInfo", _process.'information/');
  define("_views", _app."views/");
  define("_viewsRequire", '@frontendtaxi/app/views/');
  define("_viewNews", _views.'news/');
  define("_viewRequireNews", _viewsRequire."news/");
  define("_viewOrders", _views.'order/');
  define("_viewRequireOrders", _viewsRequire."order/");
  define("_viewLogin", _viewsRequire."login/");
  define("_viewRequireTags", _viewsRequire.'tags/');
  define("_viewTags", _views.'tags/');
  define("_viewRequireInfo", _viewsRequire.'information/');
  define("_viewInfo", _views.'information/');
  define("_viewController", 'app/controllers/');
  define('_imgUpload', _url.'imgUpload/');
  define('_ImgUploadRealPath', _dir_root_."/imgUpload/");
  define('_noImage', _assets.'images/no-image.jpg');
  
  $def = [
    "loginView" => _viewLogin.'index.php',
    "loginProcess" => _processLogin,
    "app" => "app/controllers/app.php",
    'requireTitle' => _viewController.'title.php',
    'requireContent' => _viewController.'content.php',
    'dashboard' => _viewsRequire.'dashboard.php',
    // action
    'actionNews' => 'tin-tuc',
    'actionOrder' => 'dat-xe',
    'actionTags' => 'tag',
    'actionAbout' => 've-chung-toi.html',
    'actionContact' => 'lien-he',
    'actionRegister' => '#', //'dang-ky-tai-xe',
    'actionPolicy' => 'dieu-khoan-su-dung.html',
    'actionResolveComplain' => 'giai-quyet-khieu-nai.html',
    'actionSecure' => 'chinh-sach-bao-mat.html',
    'actionChangePassword' => 'change-password',
    'actionTag' => 'tag',
    
    // require_once
    'requireHome' => _viewsRequire.'home/home.php',
    'requireOrder' => _viewsRequire.'order/order.php',
    'requireOrderDetail' => _viewsRequire.'order/orderDetail.php',
    'requireNews' => _viewsRequire.'news/news.php',
    'requireNewsDetail' => _viewsRequire.'news/newsDetail.php',
    'requirePage' => _viewsRequire.'page/page.php',
    

    // news
    "listNews" => _viewRequireNews.'list.php',
    'imgUploadNews' => _imgUpload.'news/',
    'imgUploadNewsRealPath' => _ImgUploadRealPath.'news/',
    // news detail
    "newsAdd" => _viewNews.'add/',

    // order
    "listOrder" => _viewRequireOrders.'list.php',
    'imgUploadOrder' => _imgUpload.'orders/',
    'imgUploadOrderRealPath' => _ImgUploadRealPath.'orders/',
    'imgUploadCateOrder' => _imgUpload.'cateOrders/',
    'imgUploadCateOrderRealPath' => _ImgUploadRealPath.'cateOrders/',
    // order detail
    "orderAdd" => _viewOrders.'add/',
    
    'idConfig' => 1,
    'perPageOrder' => 12,
    'perPageNews' => 7,
    
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
  $arrayInfo = [$def['actionAbout'], $def['actionPolicy'], $def['actionResolveComplain'], $def['actionSecure']];
