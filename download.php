<?php
    session_start();
    if($_SESSION['DownloadLogin'] != 'asdjkfj37y94848ghsldkvbowiehlskdnfb3kif'){
        header('Location: noauth.html');
    }
?>

<!DOCTYPE html>
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Ky's Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/downloadstyles.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="active">
    <nav class="navbar navbar-default">
        <div class="container-">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Ky's Website</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="robotics.html">Robotics</a></li>
                <li><a href="pictures.html">Pictures</a></li>
                <li><a href="followme.html">Follow Me!</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-fluid bg-1 text-center">
    <a href="images/birthdayCard.jpg" download="birthdayCard.jpg">
        <img src="images/birthdayCardLogo.jpg" alt="BirthdayCardBa2019" width="400">
    </a>
</div>

<footer class="container-fluid bg-4 text-center">
    <p>Website by Ky, theme from <a href="https://www.w3schools.com">www.w3schools.com</a></p>
</footer>


</body>
</html>
