<?php
include 'redirectHome.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title>Login</title>
    <?php
    include '../sources.php';
    ?>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Welcome!  <small>Please sign in here.</small></h1>
        <br>
        If you don't have an account, register <a href="./registration.php">here</a>.
    </div>
    <form role="form" id="login">
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="input-small" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="input-small" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-default">Log In</button>
        </fieldset>
    </form>
    <br>
    <div class='alert alert-danger alert-dismissable' id="invalid-alert">
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
            &times;
        </button>
        Invalid username/password combination. Please <a href='registration.php' class='alert-link'>register</a> or try logging in again
    </div>
</div>

<script src="../js/login.js"></script>
</body>