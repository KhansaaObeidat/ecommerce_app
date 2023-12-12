<?php
include './connect.php';
$table='users';
$data=$arrayName = array(
"users_name"=>"Khansaa",
"users_email"=>"khansaaobeidat48@gmail.com",
"users_phone"=>"0799709248",
"users_verifycode"=>"12345"

    
);
$count=insertData($table,$data);

?>