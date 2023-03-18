<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Aboreto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>EndlessDraws</title>
</head>

<body>
    <!-- This is the nav bar that holds the title and list of links. It is made up of rows and columns. -->
    <nav class="container-fluid text-center">
        <!-- The first row holds a crousel of images with the header overlayed on top -->
        <div class="row">
            <div class="container-fluid position-relative w-100 p-0">
                <h1 class="fw-bold display-1 position-absolute start-50 translate-middle-x z-index-1 w-100 h-100" id="header1">EndlessDraws</h1>
                <h1 class="fw-bold position-absolute top-50 start-50 translate-middle-x z-index-1 w-100" id="header2">Artist and Illustrator </h1>
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/Mouse.jpg" class="object-fit-cover w-100" height="200px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/AngelBoy.jpg" class="object-fit-cover w-100" height="200px">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Navi.jpg" class="object-fit-cover w-100" height="200px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>

        </div>
        <!-- The second row is for the list of anchor tags -->
        <div class="row" id="navList">
            <ul class="d-flex justify-content-evenly list-unstyled pt-2">
                <li><a href="index.php?gallery=true" class="text-reset text-decoration-none fs-5">Gallery</a></li>
                <li><a href="index.php?about=true" class="text-reset text-decoration-none fs-5">About</a></li>

                <!-- Existing list item for Shop -->
                <li class="custom-dropdown">
                <a href="#" class="text-reset text-decoration-none fs-5">Shop</a>
                <div class="custom-dropdown-menu">
                    <a href="https://www.fiverr.com/your_username">Fiverr</a>
                    <a href="index.php?commissions=true">Commissions</a>
                </div>
                </li>
            </ul>
        </div>
    </Nav>


    <div class="about container p-5 h-100%">

    <?php
        if (isset($_GET['gallery'])) {
        // Display example page
        include('gallery.php');
        }
        else if(isset($_GET['about'])){
            include('about.php');
        }
        else{
            include('gallery.php');
        }
    ?>


</div>


    
    <script src="javascript/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>