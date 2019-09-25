


<!--<div id="sticker" class="menu container-fluid sticky-top">

    <ul>
        <li><a class="home round-btn" href="#"><i class="fas fa-home "></i>  &ensp; Home</a></li>
        <li><a class="drop-btn round-btn" href="#"><i class="fas fa-city"></i> &ensp; City </a></li>
        <li class="drop">
            <a class="drop-btn round-btn" href="#"><i class="fas fa-film"></i> &ensp;  Movies &ensp; <i class="fas fa-caret-down"></i></a>
            <div class="drop-content">
                <a class="round-btn" href="#">English</a>
                <a class="round-btn" href="#">Kannada</a>
                <a class="round-btn" href="#">Hindi</a>
            </div>
        </li>
        <li>
            <a class="drop-btn round-btn" href="#"><i class="fas fa-language"></i> &ensp; Language</a>
        </li>
        <li class="fright nav"></li>
        <li class="fright"><a class="round-btn" href="#"><i class="fas fa-registered"></i> Sign Up</a></li>
    </ul>
</div>-->




    <div id="header" class="jumbotron py-3 rounded-0 text-center mb-0 text-light ">
        <h1><i class="fa fa-film"></i>Movie Show</h1>
        <p>Book ur Ticket with ease</p>
    </div>





    <nav class="navbar navbar-expand-sm menu text-justify sticky-top " data-spy="">
        <!--    <a class="navbar-brand home" href=""><i class="fas fa-home "></i>  &ensp; Home</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#n-c">
            <span class="navbar-toggler-icon text-info text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="n-c">
            <ul class="navbar-nav  nav-pills">
                <li class="nav-item "><a class="home nav-link round-btn" href="index.php"><i class="fas fa-home "></i>  &ensp; Home</a></li>
                <li class="nav-item "><a class="round-btn nav-link" onclick="" href="index.php"><i class="fas fa-film"></i> &ensp;  Movies</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href="#"><i class="fa fa-info-circle"></i> &ensp; About</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> &ensp; Cart</a></li>
            </ul>

        </div>
        <ul class="navbar-nav  nav-pills position-relative float-right">
            <li class="nav-item ">
                <a class="round-btn nav-link" data-toggle="modal" data-target="#sign" href="">
                    <i class="fas fa-sign-in-alt"></i> &ensp; Sign in/Sign Up
                </a>
            </li>
        </ul>
    </nav>



<?php include 'signupmodal.php'?>