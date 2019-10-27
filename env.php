<?php
  $variables = [
      'X-Auth-Token' => '',
      'X-Api-Key'=> '';
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => '',
      'DB_NAME' => 'th_iedc_events',
      'DB_PORT' => '3306',
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>