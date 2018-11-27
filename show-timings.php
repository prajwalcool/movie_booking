<!DOCTYPE html>
<html lang="en">
<body>
<?php
session_start();
include 'head.php';
include 'header.php';
include 'includes/queries.php';
if (isset($_GET['movie'])){
    $movie=$_GET['movie'];
    $count=count(getDayTimings(getShowTimings($movie)));
    $dates=[];
    echo '<ul class="nav nav-tabs" id="date-tabs" role="tablist">';
    $li='';
    $date= new DateTime(getShowTimings($movie)['0']['start_time']);
    $dates[]=$date->format('d');
    $li.='<li class="nav-item">
             <a class="nav-link active" id="d1-tab" data-toggle="tab" href="#d'.$dates['0'].'" role="tab" aria-controls="d1" aria-selected="true">'.$date->format('d').'<br>'.substr($date->format('D'), 0,3).'</a>
          </li>';
    for ($i=1;$i<$count;$i++){
        $date= new DateTime(getShowTimings($movie)[$i]['start_time']);
        $dates[]=$date->format('d');
        $li.='<li class="nav-item">
             <a class="nav-link" id="d1-tab" data-toggle="tab" href="#d'.$dates[$i].'" role="tab" aria-controls="d1" aria-selected="true">'.$date->format('d').'<br>'.substr($date->format('D'), 0,3).'</a>
          </li>';
    }
    echo $li.'</ul>';

    $show=getDayTimings(getShowTimings($movie));
    $show_count=count($show);
    $k=-1;
    echo '<div class="tab-content" id="myTabContent">';
    foreach ($dates as $val){
        $j=(integer) $val;
        $k++;
        echo '
    <div class="tab-pane fade ';
        if ($k===0){
            echo 'show active';
        }

        echo '" id="d'.$val.'" role="tabpanel" aria-labelledby="home-tab"><!--Table-->
        <table class="table showTimings" >
            <!--Table head-->
            <thead>
            <tr>
                <th style="width: 20%; ">Theatre Name</th>
                <th colspan="5">Timings</th>
            </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>';
        foreach ($show[$j]['theatre_id'] as $i){
            $theatre_name=$show[$j][$i];
            echo '<tr>
                <th scope="row">'.$theatre_name.'</th>';
            $timings_count=count($show[$j][$theatre_name])/2;
            for($k=0;$k<$timings_count;$k++){
                $show_id=$show[$j][$theatre_name][$k];
                $timings=new DateTime($show[$j][$theatre_name][$show_id]);
                echo '<td><a  href="seats.php?movie='.$movie.'&theatre='.$i.'&show='.$show_id.'">'.$timings->format('h:i a').'</a> </td>';
            }
            echo '</tr>';
        }
        echo ' </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
        </div>';
    }
    echo '</div>';

}
?>

<?php
include 'footer.php';
include 'scripts.php';
?>
</body>
</html>