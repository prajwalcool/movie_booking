<?php
    session_start();
    include 'dbconnect.php';
    include 'functions.php';
    if(isset($_GET['show']) and isset($_GET['seat'])and isset($_GET['row'])){
    $stmt = $conn->prepare("insert into ticket(show_id,row,seat_no,user_id) values(:show_id,:row,:seat_no,:user_id)");
    $stmt->bindParam(":show_id", $show_id);
    $stmt->bindParam(":row", $row);
    $stmt->bindParam(":seat_no", $seat_no);
    $stmt->bindParam(":user_id", $user_id);
    var_dump($_GET['row']);
    $show_id=test_input($_GET['show'] ?? '');
    $row=test_input($_GET['row'] ?? '');
    $seat_no=test_input($_GET['seat'] ?? '');
    $user_id=test_input($_SESSION['uid'] ?? '');
    $stmt->execute();
    header('location:../cart.php');
    }