<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/slider.css">
</head>
<body>

<div id="myCarousel" class="carousel slide">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="image/img13.jpg" alt="First slide" class="img-responsive">
        </div>
        <div class="item">
            <img src="image/img1.jpg" alt="Second slide" class="img-responsive" style="height: 600px; width:100% ">
        </div>
        <div class="item">
            <img src="image/img2.jpg" alt="Third slide" class="img-responsive" style="height: 600px; width:100% ">
        </div>
    </div>
    <!-- Carousel nav -->

    <a class="carousel-control left arrow" href="#myCarousel"
       data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right arrow" href="#myCarousel"
       data-slide="next">&rsaquo;</a>

</div>

<script src="js/app.js" ></script>
</body>
</html>