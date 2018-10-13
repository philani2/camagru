
<?php
session_start();

$GLOBALS['config'] = array(
'mysql' => array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '123456',
    'db' => 'camagru'
),
'remember' => array(
    'cookie_name' => 'hash',
'cookie_expiry' => 2592000
),
'session' => array(
    'session_name' => 'user'
)
);
sql_autoload_register(function($class){  
      require_once 'classes/' . $class . '.php';
});
require_once  'functions/sinitize.php';
?>