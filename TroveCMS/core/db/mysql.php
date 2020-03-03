<?php
# MySQL Config

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'databasename');
DEFINE ('DB_USER', 'databaseuser');
DEFINE ('DB_PASS', 'password');


$db = @mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME) OR DIE ('Could not connect to MySQL: ' . mysqli_connect_error() );
