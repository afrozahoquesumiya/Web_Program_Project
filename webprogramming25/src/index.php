<?php include 'header.php'; ?>

<!-- Hero Section -->
<header class="hero bg-primary text-white text-center py-5" id="home">
    <div class="container">
        <h1 class="display-4">Welcome to Our Restaurant</h1>
        <p class="lead">Serving the finest food in town, come enjoy your meal with us!</p>
        <a href="menu.php" class="btn btn-light btn-lg">Browse the Menu</a>
        <a href="about.php" class="btn btn-light btn-lg">About Us</a>
        <a href="contact.php" class="btn btn-light btn-lg">Contact Us</a>
    </div>
</header>


<!-- Customer Reviews Section -->
<section class="container py-5" id="reviews">
    <h2 class="text-center mb-4">Customer Reviews</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">"The best dining experience I've ever had! The food was fantastic, and the atmosphere was cozy and inviting. Highly recommend!"</p>
                    <div class="d-flex justify-content-start">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
