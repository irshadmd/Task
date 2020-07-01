<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/login.css">

</head>

<body>
    <div class="site-navbar">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <img alt="WMS" src="asset/img/logo.jpg" width="50px" height="45px">
                    </a>
                </div>
                <p class="navbar-text">Watch Management System</p>
                <p class="navbar-text navbar-right"><a href="signup.php" class="btn btn-primary">Signup</a></p>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="signup-img">
                    <img src="asset/img/login.svg" alt="" srcset="" height="550px" width="300px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="login_data.php" method="POST">
                        <span class="login100-form-logo">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z" />
                            </svg>
                        </span>
                        <br>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Login
                        </span>
                        <br>
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "
									<div class='callout callout-danger text-center mt20'>
									<p style='color:white' >" . $_SESSION['error'] . "</p>
								</div>
								";
                            unset($_SESSION['error']);
                        }
                        ?>
                        <div class="wrap-input100 validate-input" data-validate="Enter Email">
                            <input class="input100" type="text" name="email" required>
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" required>
                            <span class="focus-input100" data-placeholder="Password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" name="login" class="login100-form-btn"> &nbsp Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <div class="watch-footer">
            <p>&copy 2020 Watch Management System | Irshad</p>
        </div>
    </footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="asset/js/login.js"></script>
</body>

</html>