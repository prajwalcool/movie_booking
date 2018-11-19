<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/13/2018
 * Time: 7:46 PM
 */
require 'dbconnect.php';
include 'functions.php';
if(isset($_POST['act'])) {
    if ($_POST['act'] == 'signup') {
        $stmt = $conn->prepare("insert into customer(name,email,pass) values(:name,:email,:pass)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);
        $name=test_input($_POST['name'] ?? '');
        $email=test_input($_POST['email'] ?? '');
        $pass=md5(test_input($_POST['pass'] ?? ''));
        $stmt->execute();
        unset($_POST['act'],$_POST['email'],$_POST['name'],$_POST['pass']);
        header("location:" . $_SERVER['HTTP_REFERER'] . "?sstatus=1");
    } elseif ($_POST['act'] == 'signin') {
        $stmt = $conn->prepare("select * from customer where email=:email and pass=:pass");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);
        $email = test_input($_POST['email'] ?? '');
        $pass = md5(test_input($_POST['pass'] ?? ''));
        $stmt->execute();
        $result = $stmt->rowCount();
        if ($result > 0){
            unset($_POST['act'],$_POST['email'],$_POST['pass']);
            header("location:" . $_SERVER['HTTP_REFERER'] . "?sstatus=2");
        }else{
            unset($_POST['act'],$_POST['email'],$_POST['pass']);
            header("location:" . $_SERVER['HTTP_REFERER'] . "?sstatus=3");
        }
    }
}
