<?php
$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

try 
{
    $connection = new PDO($dsn, DB_USER, DB_PASS, DB_OPTIONS);
} 
catch(PDOException $e) 
{

}