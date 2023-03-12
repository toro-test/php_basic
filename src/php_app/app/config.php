<?php

session_start();

define('DSN', 'mysql:host=mysql;dbname=mydb;charset=utf8mb4');
define('DB_USER', 'root');
define('DB_PASS', 'secret');
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . "/public");


spl_autoload_register(function ($class){

  $prefix = 'MyApp\\';

  if(strpos($class,$prefix) == 0) {
    $fileName = sprintf(__DIR__ . '/%s.php',substr($class, strlen($prefix)));

    if(file_exists($fileName)){
      require($fileName);
    }else {
      echo 'File not found: ' . $fileName;
      exit;
    }
  }


});
