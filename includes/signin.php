<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/13/2018
 * Time: 8:24 PM
 */
session_start();
require 'dbconnect.php';
include 'functions.php';
if(is_post_request()) {
    $stmt = $conn->prepare("select * from customer where email=:email and pass=:pass");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pass", $pass);
    $email = test_input($_POST['email'] ?? '');
    $pass = md5(test_input($_POST['pass'] ?? ''));
    $stmt->execute();
    $result = $stmt->rowCount();
    $user=$stmt->fetch();
    var_dump($user);
    if ($result = 1){
        unset($_POST['act'],$_POST['email'],$_POST['pass']);
        $_SESSION['uname']=$user['name'];
        $_SESSION['uid']=$user['user_id'];
        // header("location:index.php");
    }else {
        unset($_POST['act'], $_POST['email'], $_POST['pass']);
        // header("location:" . $_SERVER['HTTP_REFERER']);
    }
}