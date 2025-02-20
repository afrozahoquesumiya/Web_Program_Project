<?php
    include 'header.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Bella Cucina</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    

<!-- Hero Section -->
<section id="home" class="vh-100 d-flex align-items-center bg-white text-dark">
    <div class="container">
        <div class="row align-items-center">
            <!-- Hero Text -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                <h1 class="display-4 fw-bold">Welcome to Authentic Italian Cuisine Restaurant</h1>
                <p class="lead">Discover exquisite flavors, exceptional dining, and unforgettable moments.</p>
                
            </div>
            <!-- Carousel -->
            <div class="col-lg-6">
                <div id="heroCarousel" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="./images/chef.jpeg" class="d-block w-100" alt="Dish 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/pastachef.jpg" class="d-block w-100" alt="Dish 2">
                        </div>
                        <div class="carousel-item">
                           <img src="./images/GreatPastryChef.jpg" class="d-block w-100" alt="Dish 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section> 
  <!-- About Us Section -->
  <section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>About Us</h2>
                <p class="lead">
                    Welcome to La Bella Cucina, where we bring the heart of Italy to your table. Our restaurant is dedicated
                     to serving authentic Italian dishes crafted with love, tradition, and the freshest ingredients. From our 
                     homemade pasta and wood-fired pizzas to our delightful desserts, every bite is a celebration of Italian culture and flavor. 
                     Buon appetito!
                </p>
                <!--  Our Story -->
                <section id="our-story" class="py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h2>Our Story</h2>
                                <p class="lead">
                <p>
                    La Bella Cucina was born from a deep passion for the culinary traditions of Italy, passed down through generations 
                    of our family. Our journey began in a small Tuscan village, where the aroma of freshly baked bread and simmering sauces 
                    filled the air. Inspired by these memories, we set out to create a place where guests could experience the warmth and
                     authenticity of Italian dining. At La Bella Cucina, every dish tells a story — from our handmade pasta and wood-fired 
                      pizzas to our rich, velvety desserts. We pride ourselves on using only the freshest ingredients, sourced locally and 
                      from Italy, to ensure that every bite is a celebration of flavor and tradition. Join us to savor the true taste of Italy, 
                      where every meal feels like coming home.
                </p>
                <a href="#contact" class="btn btn-primary">Contact Us</a>
            </div>
            <div class="col-lg-6">
                <img src="images/interior.jpg" alt="About Us" class="img-fluid rounded ">
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
