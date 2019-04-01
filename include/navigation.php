<?php 

// Returns active tag if the script name is equal to the address
function getActive($address) {
    if ($_SERVER["REQUEST_URI"] == $address) {
        echo "active";
    }
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Chris Magnuson</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item <?php getActive("/") ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?php getActive("/portfolio.php") ?>">
                    <a class="nav-link" href="/portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item <?php getActive("/skills.php") ?>">
                    <a class="nav-link" href="/skills.php">Skills</a>
                </li>
                <li class="nav-item <?php getActive("/contact.php") ?>">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
