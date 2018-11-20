<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/18/2018
 * Time: 12:58 AM
 */
require 'dbconnect.php';
include 'functions.php';

function getLanguages(){
    global $conn;
    $stmt = $conn->prepare("select DISTINCT language from movie order by language");
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_COLUMN,0);
    return $res;
}
function getMovieNamesByLang($language){
    global $conn;
    $stmt = $conn->prepare("select movie_name from movie where language=:lang");
    $stmt->bindParam(":lang", $language);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_COLUMN,0);
    return $res;
}
function getMovieNames(){
    global $conn;
    $stmt = $conn->prepare("select movie_name from movie");
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_COLUMN,0);
    return $res;
}
function getCertificate(){
    global $conn;
    $stmt = $conn->prepare("select movie_name,certificate  from movie");
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    return $res;
}
//var_dump(getCertificate());
function getTrailer(){
    global $conn;
    $stmt = $conn->prepare("select movie_name,trailer  from movie");
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    return $res;
}