<!DOCTYPE html>
<html lang="en">
<body>
<?php
include 'head.php';
include 'header.php';
$movie=$_GET['movie'];
$show=$_GET['show'];
$theatre=$_GET['theatre'];
$row='A';
?>

<!--<img class="ssvg" src="img/screen.svg">-->
<div class="screen-container">
    <div class="screen"><br><br>Screen</div>
</div>

<div class="container">
    <div id="seats" class="text-center">
        <div class="seat-title">
            First class - 100 RS
        </div>
        <?php
        for($j=1;$j<=4;$j++){
            echo '<ul>
            <li>'.$row.'</li>';
            for ($i=1;$i<=8;$i++){
                echo '<li><a href="includes/addTicket.php?movie='.$movie.'&theatre='.$theatre.'&show='.$show.'&row='.$row.'&seat='.$i.'">'.$i.'</a> </li>';
            }
            echo '</ul>';
            $row++;
        }
        ?>

        <div class="seat-title">
            Balcony - 120 RS
        </div>
        <?php
        for($j=1;$j<=4;$j++){
            echo '<ul>
            <li>'.$row.'</li>';
            for ($i=1;$i<=8;$i++){
                echo '<li><a href="includes/addTicket.php?movie='.$movie.'&show='.$show.'&row='.$row.'&seat='.$i.'">'.$i.'</a> </li>';
            }
            echo '</ul>';
            $row++;
        }
        ?>



    </div>

</div>



<?php
include 'footer.php';
include 'scripts.php';
?>
</body>
</html>