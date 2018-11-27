<!DOCTYPE html>
<html>
<body>
<?php
//require 'includes/dbconnect.php';
//include 'includes/functions.php';
//include 'includes/queryvalues.php';
session_start();
?>
<?php
include 'head.php';
include'header.php';
include 'cars.php';
//include 'flexslider.php';
//include 'movie.php';
include 'footer.php';
include 'scripts.php';
?>
<?php
if (is_get_request()){
    $a=$_GET['sstatus'] ?? '';
    if ($a == 1){
        echo session_id();
        echo $a;

        echo <<<END1
        <p>Hello</p>
        <script>$("#sup-success").modal("show");</script>
END1;
    }elseif ($a == 2){
        echo $a;

        echo <<<END2
<script>$("#si-success").modal("show");</script>
END2;
    }elseif ($a == 3){
        echo $a;

        echo <<<END3
        <script>$("#si-failure").modal("show");</script>
END3;
    }
    unset($a,$_GET['sstatus']);
}
?>
</body>
</html>
