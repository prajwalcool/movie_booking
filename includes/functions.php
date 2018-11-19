<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/13/2018
 * Time: 4:26 PM
 */
include_once 'config.php';

function h($str) {
    return htmlspecialchars($str);
}
function rawR($str) {
    return rawurlencode($str);
}
function rawD($str) {
    return rawurldecode($str);
}
function urlE($str) {
    return urlencode($str);
}
function urlD($str) {
    return urldecode($str);
}
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}
function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function getSanitizeName($name) {
    $name=strtolower($name);
    $name=str_replace(" ","-",$name);
    return $name;
}