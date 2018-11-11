<!DOCTYPE html>
<html lang="en">
<body>
<?php
include ('head.php');
include('header.php');?>




<ul class="nav nav-tabs" id="date-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="d1-tab" data-toggle="tab" href="#d1" role="tab" aria-controls="d1" aria-selected="true">15<br>Tod</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="d2-tab" data-toggle="tab" href="#d2" role="tab" aria-controls="d2" aria-selected="false">16<br>Tom</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="d3-tab" data-toggle="tab" href="#d3" role="tab" aria-controls="d2" aria-selected="false">17<br>Sat</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="d1" role="tabpanel" aria-labelledby="home-tab"><!--Table-->
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
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table--></div>
    <div class="tab-pane fade" id="d2" role="tabpanel" aria-labelledby="profile-tab"><!--Table-->
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
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table--></div>
    <div class="tab-pane fade" id="d3" role="tabpanel" aria-labelledby="contact-tab"><!--Table-->
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
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>
                <td><a  href="seats.php">1:45 PM</a> </td>

            </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table--></div>
</div>






<?php
include ('footer.php');
include ('scripts.php');
?>
</body>
</html>