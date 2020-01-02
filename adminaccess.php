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
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #3D3634;
        }
    </style>
</head>
<body>
<div class="active">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Ky's Website</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutKy.html">About Ky</a></li>
                <li><a href="contactKy.php">Contact Ky</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="left">
    <form method='post' action="loginaction.php">
        <fieldset style="width:35px">
            <legend>Add Login:</legend>
            <input type="text" name="useradd" placeholder="Username" required>
            <br>
            <input type="Password" name="pwdadd" placeholder="Password" required>
            <br>
            <input type="text" name="dir" placeholder="Directory" required>
            <br>
            <input type="submit" class="btn" > </input>
        </fieldset>
    </form>
</div>
</body>
</html>