<?php
include 'dbconnect.php';
include 'functions.php';

if (isset($_GET['id'])) {
        $stmt = $conn->prepare("delete from ticket where ticket_id=:id");
        $stmt->bindParam(":id", $id);
        $id=test_input($_GET['id'] ?? '');
        $stmt->execute();
}
header("location:../cart.php");