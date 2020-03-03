<?php
# MySQL Config

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'trecoast_trove2');
DEFINE ('DB_USER', 'trecoast_trove2');
DEFINE ('DB_PASS', 'trove2');


$db = @mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME) OR DIE ('Could not connect to MySQL: ' . mysqli_connect_error() );
