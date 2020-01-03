<?php
    session_start();
    if($_SESSION['AdminLogin'] != 'ncji3857sdiv2l3v-sofj3jvnslifh20v3-fn3kvnu38f'){
        header('Location: noauth.html');
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title> Ky on the Web </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/adminaccessstyles.css"
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <a href="index.html" class="btn btn-default btn-lg">
        Index
    </a>

    <a href="robotics.html" class="btn btn-default btn-lg">
        Robotics
    </a>

    <a href="pictures.html" class="btn btn-default btn-lg">
        Pictures
    </a>

    <a href="followme.html" class="btn btn-default btn-lg">
        Follow Me
    </a>

    <a href="login.php" class="btn btn-default btn-lg">
        Login
    </a>
</body>
</html>