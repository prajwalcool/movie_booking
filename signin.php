<?php
include 'head.php';
?>
<!-- Default form login -->
<form class="text-center border border-light p-5 w-25 mx-auto mt-5" action="includes/signup.php" method="post">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" name="pass" class="form-control mb-4" placeholder="Password">


    <!-- Sign in button -->
    <input class="btn btn-info btn-block my-4" type="submit" name="submit" value="signin">Sign in</input>


   
</form>
<!-- Default form login -->
<?php
include 'scripts.php';
?>