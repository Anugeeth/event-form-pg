<?php
  if(file_exists('./env.php')) {
      include './env.php';
  }
    function env($key, $default = null)
      {
          $value = getenv($key);
          if ($value === false) {
              return $default;
          }
          return $value;
      }
  
?>
