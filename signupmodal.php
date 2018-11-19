<div class="modal fade" id="sign" >
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
                                <form class="modal-form" action="includes/signup.php" method="post">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="defaultForm-email" name="email"  class="form-control validate " required maxlength="40">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fa fa-lock prefix grey-text"></i>
                                        <input type="password" id="defaultForm-pass" name="pass" class="form-control validate" required minlength="6">
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                                    </div>
                                    <input type="hidden" name="act" value="signin">
                                    <button type="submit" name="submit" value="signin" class="round-btn px-3 py-2"><i class="fas fa-sign-in-alt"></i> &ensp; Sign in</button>
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
                            <form class="modal-form" action="includes/signup.php" method="post">

                                <div class="container">
                                    <div class="md-form mb-5">
                                        <i class="fa fa-user prefix grey-text fa"></i>
                                        <input type="text" id="orangeForm-name" name="name" class="form-control validate" required maxlength="20">
                                        <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                                    </div>
                                    <div class="md-form mb-5">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="email" id="orangeForm-email" name="email" class="form-control validate" required maxlength="40">
                                        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <i class="fa fa-lock prefix grey-text"></i>
                                        <input type="password" id="orangeForm-pass" name="pass" class="form-control validate" required minlength="6">
                                        <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                                    </div>
                                </div>
                                <input type="hidden" name="act" value="signup">
                                <button type="submit" name="submit" value="signup"  class="round-btn px-3 py-2"><i class="fas fa-registered"></i> &ensp; Sign Up</button>
                            </form>
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
<div class="modal fade" id="sup-failure" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Your Sign Up was unsuccessful!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Try Again!</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-success" id="sup-success" tabindex="-1"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title" id="myModalLabel">Thank you for Signing Up!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>You can login Now!</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-success" id="si-success" tabindex="-1"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">You have Signed in!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>You can Book Movie Tickets Now!</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-warning" id="si-failure" tabindex="-1"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title" id="myModalLabel">Sorry Sign in was unsuccessful!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Please try again!</p>
            </div>
        </div>
    </div>
</div>