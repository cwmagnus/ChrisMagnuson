<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("../include/header.php"); ?>

        <title>Chris Magnuson - Home</title>

        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <div class="about-me">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img class="profile-img" src="img/Profile.jpg">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="about-heading center-md">Chris Magnuson</h1>
                        <h4 class="about-sub-heading center-md">Software Developer</h4>
                        <p class="about-content center-md">About me!</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include("../include/navigation.php"); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="portfolioCarouselHome" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="..." alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="..." alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>

        <?php include("../include/scripts.php"); ?>
        <script src="js/sticky.js"></script>
    </body>
</html>
