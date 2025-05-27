<?php

$db_name = 'mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'];
$user_name = $_ENV['DB_USER'];
$user_password = $_ENV['DB_PASSWORD'];

$conn = new PDO($db_name, $user_name, $user_password);

?>