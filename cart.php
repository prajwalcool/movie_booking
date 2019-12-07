<!DOCTYPE html>
<html>
<body>
<?php
//require 'includes/dbconnect.php';
//include 'includes/functions.php';
//include 'includes/queryvalues.php';
// session_start();

include 'head.php';
include'header.php';

?>
<link rel="stylesheet" href="css/cart.css">
<section class="container">
    <h1>Events</h1>
    <?php
    include 'includes/queries.php';
    $tickets=getTicketsByUser($_SESSION['uid']);
    // var_dump($tickets);
    for($i=0;$i<count($tickets);$i=$i+2){
        echo '<div class="row">';
        $st=getShowTimingsbyid($tickets[$i]['show_id']);
        $stdate= new DateTime($st['0']['start_time']);
        $mv=getMoviebyid($st['0']['movie_id'])['0'];
        $th=getTheatrebyid($st['0']['theatre_id'])['0'];
        echo '<article class="card fl-left">
            <section class="date">
                <time datetime="23th feb">
                    <span>'.$stdate->format("d").'</span><span>'.$stdate->format("M").'</span>
                </time>
            </section>
            <section class="card-cont">
                <small>'.$mv['language'].'</small>
                <h3>'.$mv['movie_name'].'</h3>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span>'.$stdate->format("l d F Y").'</span>
                        <span>'.$stdate->format("H:iA").'</span>
                    </time>
                </div>
                <div class="even-date">
                    <i class="fa fa-ticket"></i>
                    <time>
                        <span>'.$tickets[$i]['row'].'-'.$tickets[$i]['seat_no'].'</span>
                    </time>
                </div>
                <div class="even-info">
                    <i class="fa fa-map-marker"></i>
                    <p>
                        ABC Theatre Bangalore 
                        '.$th['name'].'
                    </p>
                </div>
                <a class="cancel" href="includes/tickets.php?id='.$tickets[$i]['ticket_id'].'">cancel</a>
            </section>
        </article>';
        if(isset($tickets[$i+1])){
$st=getShowTimingsbyid($tickets[$i+1]['show_id']);
        $stdate= new DateTime($st['0']['start_time']);
        $mv=getMoviebyid($st['0']['movie_id'])['0'];
        $th=getTheatrebyid($st['0']['theatre_id'])['0'];
        echo '<article class="card fl-left">
            <section class="date">
                <time datetime="23th feb">
                    <span>'.$stdate->format("d").'</span><span>'.$stdate->format("M").'</span>
                </time>
            </section>
            <section class="card-cont">
                <small>'.$mv['language'].'</small>
                <h3>'.$mv['movie_name'].'</h3>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span>'.$stdate->format("l d F Y").'</span>
                        <span>'.$stdate->format("H:iA").'</span>
                    </time>
                </div>
                <div class="even-info">
                    <i class="fa fa-map-marker"></i>
                    <p>
                        ABC Theatre Bangalore 
                        '.$th['name'].'
                    </p>
                </div>
                <a class="cancel" href="includes/tickets.php?id='.$tickets[$i]['ticket_id'].'">Cancel</a>
            </section>
        </article>';
        }
        
    echo '</div>';


    }

    ?>
    
        
    <div class="row">
        <article class="card fl-left">
            <section class="date">
                <time datetime="23th feb">
                    <span>23</span><span>feb</span>
                </time>
            </section>
            <section class="card-cont">
                <small>dj khaled</small>
                <h3>music kaboom festivel</h3>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span>wednesday 28 december 2014</span>
                        <span>08:55pm to 12:00 am</span>
                    </time>
                </div>
                <div class="even-info">
                    <i class="fa fa-map-marker"></i>
                    <p>
                        nexen square for people australia, sydney
                    </p>
                </div>
                <a href="#">booked</a>
            </section>
        </article>
        <article class="card fl-left">
            <section class="date">
                <time datetime="23th feb">
                    <span>23</span><span>feb</span>
                </time>
            </section>
            <section class="card-cont">
                <small>dj khaled</small>
                <h3>hello dubai festivel</h3>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span>wednesday 28 december 2014</span>
                        <span>08:55pm to 12:00 am</span>
                    </time>
                </div>
                <div class="even-info">
                    <i class="fa fa-map-marker"></i>
                    <p>
                        nexen square for people australia, sydney
                    </p>
                </div>
                <a href="#">cancel</a>
            </section>
        </article>
    </div>
</section>
<?php
include 'footer.php';
include 'scripts.php';
?>