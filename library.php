<?php
  ini_set("default_socket_timeout", 6000);
  ini_set('session.gc_maxlifetime', 28800); // 8 hours
  set_time_limit(1200);
  @session_start();
  ob_start();
  define('INDEX', true);
  define("_dir_root_", str_replace("\\", "/", __DIR__));
  //define("_dir_root_", __DIR__);
  error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
  // Include required files
  require_once "@frontendtaxi/define/def.php";
  require_once "@frontendtaxi/language/vi.php";
  require_once "@admintaxi/common/functions_mysql.php";  // Mysql functions
  require_once "@admintaxi/common/function.php"; // Functions
  require_once "@admintaxi/config/db_connection.php";  // DB connections
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $prefixTable = "taxi_";
  $lng = "";
  $lngDefault = "";
  $lngEn = "";
  $lngDefaultText = "";
  $lngEnText = "";
