<?php
include 'head.php';
?>
<!-- Default form register -->
<form class="text-center border border-light p-5 w-25 mx-auto mt-5" action="includes/signup.php" method="post">

    <p class="h4 mb-4">Sign up</p>

    <input type="text" id="defaultRegisterFormFirstName"  name="name" class="form-control mb-4" placeholder="Name">
      

    <!-- E-mail -->
    <input type="email" id="defaultForm-email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" name="pass" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters
    </small>


    <!-- Sign up button -->
    <input class="btn btn-info my-4 btn-block" type="submit" name="submit" value="signup">Sign in</input>

    <hr>

    
</form>
<!-- Default form register -->
<?php
include 'scripts.php';
?>