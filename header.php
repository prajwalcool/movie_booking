


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





    <nav class="navbar navbar-expand-sm menu text-justify  " data-spy="affix">
        <!--    <a class="navbar-brand home" href=""><i class="fas fa-home "></i>  &ensp; Home</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#n-c">
            <span class="navbar-toggler-icon text-info text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="n-c">
            <ul class="navbar-nav  nav-pills nav-fill">
                <li class="nav-item "><a class="home nav-link round-btn" href="#"><i class="fas fa-home "></i>  &ensp; Home</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href=""><i class="fas fa-film"></i> &ensp;  Movies</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href="#"><i class="fa fa-info-circle"></i> &ensp; About</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href=""><i class="fa fa-shopping-cart"></i> &ensp; Cart</a></li>
                <li class="nav-item "><a class="round-btn nav-link" data-toggle="modal" data-target="#signin" href=""><i class="fas fa-sign-in-alt"></i> &ensp; Sign in</a></li>
                <li class="nav-item "><a class="round-btn nav-link" data-toggle="modal" data-target="#signup" href="#"><i class="fas fa-registered"></i> &ensp; Sign Up</a></li>
            </ul>
        </div>
    </nav>

<div class="modal fade" id="signin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sign in</h4>
                <button type="button" class=" close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="modal-form" action="">
                        <div class="form-group">
                            <label for="uname"><b>User Name</b></label>
                            <input class="form-control" type="text" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Password</b></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="round-btn px-3 py-2"><i class="fas fa-sign-in-alt"></i> &ensp; Sign in</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="round-btn px-3 py-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sign in</h4>
                <button type="button" class=" close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="modal-form" action="">
                        <div class="form-group">
                            <label for="uname"><b>User Name</b></label>
                            <input id="uname" class="form-control" type="text" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>E-Mail</b></label>
                            <input id="email" class="form-control" type="text" placeholder="Enter E-Mail" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Password</b></label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password" required>
                        </div>
                        <button type="submit" class="round-btn px-3 py-2"><i class="fas fa-registered"></i> &ensp; Sign Up</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="round-btn px-3 py-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
