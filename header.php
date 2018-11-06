


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





    <nav class="navbar navbar-expand-sm menu text-justify sticky-top " data-spy="affix">
        <!--    <a class="navbar-brand home" href=""><i class="fas fa-home "></i>  &ensp; Home</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#n-c">
            <span class="navbar-toggler-icon text-info text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="n-c">
            <ul class="navbar-nav  nav-pills">
                <li class="nav-item "><a class="home nav-link round-btn" href="#"><i class="fas fa-home "></i>  &ensp; Home</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href=""><i class="fas fa-film"></i> &ensp;  Movies</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href="#"><i class="fa fa-info-circle"></i> &ensp; About</a></li>
                <li class="nav-item "><a class="round-btn nav-link" href=""><i class="fa fa-shopping-cart"></i> &ensp; Cart</a></li>
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

<div class="modal fade" id="sign">
    <div class="modal-dialog cascading-modal ">
        <div class="modal-content">
            <div class="modal-c-tabs">
                <ul class="nav nav-tabs md-tabs cyan tabs-2 darken-3" id="mtab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#signin" role="tab"><i class="fa fa-user mr-1"></i>
                            Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#signup" role="tab"><i class="fa fa-user-plus mr-1"></i>
                            Sign up</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fadeIn show active" id="signin" role="tabpanel">
                        <div class="modal-header">
                            <h4 class="modal-title">Sign in</h4>
                            <button type="button" class=" close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form class="modal-form" action="">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="defaultForm-email" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fa fa-lock prefix grey-text"></i>
                                        <input type="password" id="defaultForm-pass" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                                    </div>
                                    <button type="submit" class="round-btn px-3 py-2"><i class="fas fa-sign-in-alt"></i> &ensp; Sign in</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="close" class="round-btn px-3 py-2" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="signup" role="tabpanel">
                        <div class="modal-header">
                            <h4 class="modal-title">Sign up</h4>
                            <button type="button" class=" close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form class="modal-form" action="">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-user prefix grey-text fa"></i>
                                        <input type="text" id="orangeForm-name" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="orangeForm-email" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fa fa-lock prefix grey-text"></i>
                                        <input type="password" id="orangeForm-pass" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                                    </div>
                                </form>
                            </div>
                            <button type="submit" class="round-btn px-3 py-2"><i class="fas fa-registered"></i> &ensp; Sign Up</button>

                        </div>
                        <div class="modal-footer">
                            <button type="button" id="close" class="round-btn px-3 py-2" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
</div>

