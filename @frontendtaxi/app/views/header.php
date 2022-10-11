<?php
  if (isset($_REQUEST['pqh'])) {
    $module = trim($_REQUEST['pqh']);
    $mod = explode("/", $module);
    $type_website = 'article';
  } else {
    $module = "";
    $mod = [];
    $type_website = 'website';
  }
  $tableHtml = $prefixTable.$def['tableHtmls'];
  $tableConfig = $prefixTable.$def['tableConfigurations'];
  $tableInfo = $prefixTable.$def['tableInformations'];
  $conf = $h->getById($tableConfig, $def['idConfig']);
  $logo = $h->getById($tableHtml, 1);
  $addressFooter = $h->getById($tableHtml, 4);
  $phoneFooter = $h->getById($tableHtml, 5);
  $emailFooter = $h->getById($tableHtml, 6);
  $fanpage = $h->getById($tableHtml, 7);
  $textFooter = $h->getById($tableHtml, 8);
  if (file_exists(_ImgUploadRealPath.'htmls/'.$logo['content']) && $logo['content'] != '')
    $imgLogo = _imgUpload.'htmls/'.$logo['content'];
  else
    $imgLogo = _assets.'images/logo.png';
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"  lang="vi-vn">
<head>
  <base href="<?php _e(_url) ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <title><?php require "@frontendtaxi/app/module/title.php" ?></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="keywords" content="<?php require_once "@frontendtaxi/app/module/keyw.php" ?>" />
  <meta name="author" content="Taxi3s" />
  <meta name="description" content="<?php require "@frontendtaxi/app/module/desc.php" ?>" />
  <meta name="HandheldFriendly" content="true"/>
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="YES" />
  <meta rel="canonical" href="<?php _e(_url) ?>"/>
  <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="<?php _e($type_website) ?>" />
  <meta property="og:title" content="<?php require "@frontendtaxi/app/module/title.php" ?>" />
  <meta property="og:description" content="<?php require "@frontendtaxi/app/module/desc.php" ?>" />
  <meta property="og:image" content="<?php require_once "@frontendtaxi/app/module/image.php" ?>" />
  <meta property="og:url" content="<?php _e("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" />
  <meta name="twitter:title" content="<?php require "@frontendtaxi/app/module/title.php" ?>" />
  <meta name="twitter:description" content="<?php require "@frontendtaxi/app/module/desc.php" ?>" />
  <meta name="twitter:url" content="<?php _e("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" />
  <meta name="twitter:card" content="summary">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home/banner.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/banner2.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/loadding.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/datetimepicker/jquery.datetimepicker.css"/>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home/init_autocomplete_service.css"/>
  <link rel="stylesheet" href="assets/css/style_index.css">
  <link rel="stylesheet" href="assets/css/slide_index.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home/assets2.css"/>    
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/swiper/swiper.min.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/swiper/swiper.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/index.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/index_set1.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/index_set2.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/owlCarousel/owl.carousel.css"/> 
  <!-- style subpage -->
  <link rel="stylesheet" type="text/css" href="assets/css/home/k2.fonts.css?v2.7.0"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/k2.css?v2.7.0"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/sticky.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/mmenu/jquery.mmenu.all.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/template-blue.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/pattern.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/your_css.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/responsive.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/sjfacebook.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/social_icon.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/sj-listing-tabs.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/rescontent.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/style1.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/youtube.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/columns.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/accordion.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/manific-popup/magnific-popup.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/plugins/carousel/carousel.css"/>    
  <link rel="stylesheet" type="text/css" href="assets/css/home/style2.css"/>        
  <!-- end style subpage -->
  <link rel="stylesheet" type="text/css" href="assets/css/common/common.css"/>      

  <script type="text/javascript" src="assets/js/jquery.min.js"></script>    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/home/jssor.min.js"></script>      
  <script type="text/javascript" src="assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>    
  <script type="text/javascript" src="assets/js/bootstrap-toolkit.js"></script>    
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script type="text/javascript" src="assets/js/home/init_autocomplete_service.js"></script>    
  <script type="text/javascript" src="assets/plugins/owlCarousel/owl.carousel.js"></script>    
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFx3eBmqS9uagtFIG_eq3yjFknZJKr7f4&v=3.exp&libraries=places&language=vi"></script>
  <script type="text/javascript" src="assets/js/jquery.placepicker.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</head>
<body cz-shortcut-listen="true">
  <?php 
    require_once _viewsRequire.'menu.php';
    require_once _viewsRequire.'banner.php';
  ?>