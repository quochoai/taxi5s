<?php
  ini_set("default_socket_timeout", 6000);
  ini_set('session.gc_maxlifetime', 28800); // 8 hours
  set_time_limit(1200);
  @session_start();
  ob_start();
  define('INDEX', true);
  define("_dir_root_", __DIR__);
  error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
  // Include required files
  include("define/def.php");
  include("language/vi.php");
  include("../common/functions_mysql.php");  // Mysql functions
  include("../common/functions_common.php");  // Common functions
  include("../common/function.php"); // Functions
  include("../config/db_connection.php");  // DB connections
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $prefixTable = "taxi_";
  $lng = "";
  $lngVi = "";
  $lngEn = "";
