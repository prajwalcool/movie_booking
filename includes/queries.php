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
    $stmt = $conn->query('select DISTINCT language from movie order by language');
    return $stmt->fetchAll(PDO::FETCH_COLUMN,0);
}
function getMovieNamesByLang($language){
    global $conn;
    $stmt = $conn->prepare('select movie_name from movie where language=:lang');
    $stmt->bindParam(':lang', $language);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_COLUMN,0);
}
function getMovieNames(){
    global $conn;
    $stmt = $conn->query('select movie_name from movie');
    return $stmt->fetchAll(PDO::FETCH_COLUMN,0);
}
//var_dump(getMovieNames());
function getCertificate(){
    global $conn;
    $stmt = $conn->query('select movie_name,certificate  from movie');
    return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
}
//var_dump(getCertificate());
function getTrailer(){
    global $conn;
    $stmt = $conn->query('select movie_name,trailer  from movie');
    return  $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
}
function getTheatreName(){
    global $conn;
    $stmt = $conn->query('select m.movie_name,t.name  from movie m,theatre t,show_timings s where s.movie_id=m.movie_id and s.theatre_id=t.theatre_id');
    return  $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
}
function getMovieId(){
    global $conn;
    $stmt = $conn->query('select movie_name,movie_id  from movie');
    return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
}
function getShowTimings($movie){
    global $conn;
    $stmt = $conn->prepare('select s.show_id,t.theatre_id,t.name,s.start_time  from show_timings s,movie m,theatre t where m.movie_id=:movie and s.movie_id=:movie and s.theatre_id=t.theatre_id');
    $stmt->bindParam('movie', $movie);
    $stmt->execute();
    return $stmt->fetchAll();
}
//var_dump(getShowTimings(1));
//var_dump(getDayTimings(getShowTimings(13)));