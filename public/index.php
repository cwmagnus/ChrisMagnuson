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

        <div class="container content">
            <h1 class="text-light center-md">Featured Projects</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div id="portfolioCarouselHome" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://via.placeholder.com/850x500" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1 class="text-dark">ERC Training Application</h1>
                                    <p class="text-dark">Training application made for the Air Force Research Laboratory</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pt-4">
                        <div class="col-6 p-3">
                            <img class="d-block w-100" src="https://via.placeholder.com/300">
                        </div>
                        <div class="col-6 p-3">
                            <img class="d-block w-100" src="https://via.placeholder.com/300">
                        </div>
                        <div class="col-6 p-3">
                            <img class="d-block w-100" src="https://via.placeholder.com/300">
                        </div>
                        <div class="col-6 p-3">
                            <img class="d-block w-100" src="https://via.placeholder.com/300">
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-footer">
                <p class="text-light">Want to see all my projects?</p>
                <a type="button" class="btn btn-outline-light" href="/portfolio.php">View Portfolio</a>
            </div>
        </div>

        <div class="contrast-box">
            <div class="container">
                <h1 class="text-light center-md pt-3 pb-1">Skills</h1>
            </div>
        </div>

        <?php include("../include/footer.php"); ?>

        <?php include("../include/scripts.php"); ?>
        <script src="js/sticky.js"></script>
    </body>
</html>
