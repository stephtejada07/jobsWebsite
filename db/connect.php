<?php

// DSN: Database Source Name
// Identifies which database to connect to

// DSN for mySQL -> localhost
$dsn = 'mysql:host=localhost;dbname=miempleoo';
$user = 'root';
$pass = 'toor';


// DSN for mySQL -> web hosting
/*
$dsn = 'mysql:host=mysql7.000webhost.com;dbname=a5255800_empleoo';
$user = 'a5255800_juanlui';
$pass = '1newyork';
*/

//PDO: PHP Database Objects
// Create DB connection with PDO
$db = new PDO($dsn, $user, $pass);

?>