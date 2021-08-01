<?php
  
//dev environment
/*
  define('DB_HOST', 'localhost');
  define('DB_USER','root');
  define('DB_PASS', '');
  define('DB_NAME', 'notes');
  
  */

  define('DB_HOST', 'remotemysql.com');
  define('DB_USER','VrGkxuBVJo');
  define('DB_PASS', 'NBwGsWBGAn');
  define('DB_NAME', 'VrGkxuBVJo');

  $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

 if(mysqli_connect_errno()){
 	echo "Failed to connect". mysqli_connect_errno();
 }
  
?>
