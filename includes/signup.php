<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/13/2018
 * Time: 7:46 PM
 */
session_start();
require 'dbconnect.php';
include 'functions.php';
if(isset($_POST['submit'])) {
    if ($_POST['submit'] == 'signup') {
        $stmt = $conn->prepare("insert into customer(name,email,pass) values(:name,:email,:pass)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);
        $name=test_input($_POST['name'] ?? '');
        $email=test_input($_POST['email'] ?? '');
        $pass=md5(test_input($_POST['pass'] ?? ''));
        $stmt->execute();
        unset($_POST['submit'],$_POST['email'],$_POST['name'],$_POST['pass']);
        header("location:../signin.php");
    } elseif ($_POST['submit'] == 'signin') {
        $stmt = $conn->prepare("select * from customer where email=:email and pass=:pass");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);
        $email = test_input($_POST['email'] ?? '');
        $pass = md5(test_input($_POST['pass'] ?? ''));
        $stmt->execute();
        $result = $stmt->rowCount();
        $user=$stmt->fetch();
        // var_dump($result,$user);
        if ($result == 1){
            unset($_POST['submit'],$_POST['email'],$_POST['pass']);
            $_SESSION['uname']=$user['name'];
            $_SESSION['uid']=$user['user_id'];
            header("location:../index.php");
        }else{
            unset($_POST['submit'],$_POST['email'],$_POST['pass']);
            header("location:../signin.php");
        }
    }
    // var_dump($_SESSION);
}
