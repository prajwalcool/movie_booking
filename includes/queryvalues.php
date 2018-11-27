<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/19/2018
 * Time: 12:40 PM
 */
require 'queries.php';
$language=getLanguages();
$movieNames=getMovieNames();
$cert=getCertificate();
$movieNamesByLang=[];
foreach ($language as $lang){
    $movieNamesByLang[$lang]=getMovieNamesByLang($lang);
}

//var_dump($language);
//var_dump($movieNames);
//var_dump($movieNamesByLang['Hindi'][1]);