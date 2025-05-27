<?php

$db_name = 'mysql:host=db;dbname=suyash_game';
$user_name = 'root';
$user_password = file_get_contents('/run/secrets/db_root_password');

$conn = new PDO($db_name, $user_name, $user_password);

?>