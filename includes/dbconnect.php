<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/13/2018
 * Time: 7:02 PM
 */
require 'config.php';
try{
    $conn = new PDO("mysql:dbname=".DB.";host=".HOST.";charset=utf8",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Connection Failed : ".$e->getMessage();
    die;
}
