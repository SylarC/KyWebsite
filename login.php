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
</nav>

<div class="center">
    <form method='post' action="loginaction.php">
        <fieldset style="width:35px">
        <legend>Login Here</legend>
        <input type="text" name="user" placeholder="Username" required>
        <br>
        <input type="Password" name="pwd" placeholder="Password" required>
        <br>
        <br>
        <input type="submit" class="btn" > </input>
        </fieldset>
    </form>
</div>


</body>
</html>