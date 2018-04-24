<?php

/*
Developer: Ehtesham Mehmood
Site:      PHPCodify.com
Script:    <a href="http://www.phpcodify.com/insert-data-in-php-using-jquery-ajax-without-page-refresh/">Insert Data in PHP using jQuery AJAX without Page Refresh</a>
File:      DB.php
*/

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "admin";
$DB_name = "Gagnagrunnur";

 try
 {
     $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e)
 {
     echo "ERROR : ".$e->getMessage();
 }