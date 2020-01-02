<!DOCTYPE html>
<html id="index" lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Ky's Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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
                <li><a href="robotics.php">Robotics</a></li>
                <li><a href="pictures.php">Pictures</a></li>
                <li><a href="followme.html">Follow Me!</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<h2 style="text-align:center">Picture Gallery</h2>

<div class="container">
    <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="happyseal.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">2 / 6</div>
        <img src="manyshoob.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">3 / 6</div>
        <img src="foodLab.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="matrixBackground.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">5 / 6</div>
        <img src="kineticPenguin.jpg" style="width:100%">
    </div>

    <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="chrome.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <div class="column">
            <img class="demo cursor" src="happyseal.jpg" style="width:100%" onclick="currentSlide(1)" alt="Ky as a Seal">
        </div>
        <div class="column">
            <img class="demo cursor" src="manyshoob.jpg" style="width:100%" onclick="currentSlide(2)" alt="Many Faces of Shoob">
        </div>
        <div class="column">
            <img class="demo cursor" src="foodLab.jpg" style="width:100%" onclick="currentSlide(3)" alt="Me as a Dog">
        </div>
        <div class="column">
            <img class="demo cursor" src="matrixBackground.jpg" style="width:100%" onclick="currentSlide(4)" alt="Matrix Background">
        </div>
        <div class="column">
            <img class="demo cursor" src="kineticPenguin.jpg" style="width:100%" onclick="currentSlide(5)" alt="Robotics Sister Team">
        </div>
        <div class="column">
            <img class="demo cursor" src="chrome.png" style="width:100%" onclick="currentSlide(6)" alt="How this Website was Written">
        </div>
    </div>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
<footer class="container-fluid bg-4 text-center">
    <p>Website by Ky, theme from <a href="https://www.w3schools.com">www.w3schools.com</a></p>
</footer>
</body>
</html>