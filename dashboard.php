<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <p class="navbar-text navbar-right"></p>
            </div>
        </nav>
    </div>


    <div class="container">
        <div class="row">
            <h1>WELCOME</h1>
            <div class="col-md-6">
                <div class="signup-img">
                    <img src="asset/img/dashboard.svg" alt="" srcset="" height="550px" width="300px">
                </div>
            </div>
            <div class="col-md-6">
                <div style="text-align: center;">
                    <h1><?php echo $user['name']; ?></h1>
                    <p><?php echo $user['email']; ?></p>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
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