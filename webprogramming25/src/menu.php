<?php 
include("includes/db.php");
include 'header.php';

$sql = "INSERT INTO menu_items (id,name, category,description, price,image_url) 
VALUES(11, 'Pizzetta', 'Pizza', 'It is a mini pizza, perfect for one, with a crispy crust, tomato sauce, cheese, and customizable toppings.', 8.99, './pizza images/Pizzetta.jpg'),
(12, 'Blancmange vanila', 'Desserts', 'Blancmange Vanilla is a silky, creamy dessert with a delicate vanilla flavor, often served chilled.', 5.99, './desert images/Blancmange vanila.jpg'),
(13, 'Bombolone Pistacchio', 'Desserts', 'Bombolone Pistacchio is a soft, sugar-dusted Italian doughnut filled with rich pistachio cream.', 6.99, './desert images/Bombolone Pistacchio.jpg'),
(14, 'Delizia al limone', 'Desserts', 'Delizia al Limone is a zesty lemon-infused sponge cake filled with citrus cream, a specialty of Italy is Amalfi Coast.', 7.99, './desert images/Delizia al limone.jpg'),
(15, 'Maritozzo alla panna', 'Desserts', 'Maritozzo alla Panna is a sweet brioche bun generously filled with fluffy whipped cream.', 8.99, './desert images/Maritozzo alla panna.jpeg'),
(16, 'Panna cotta', 'Desserts', 'Panna Cotta is a smooth, creamy custard-like dessert, often topped with fruit or caramel.', 9.99, './desert images/Panna cotta.jpeg'),
(17, 'Sicilian Ricotta Cannoli', 'Desserts', 'Sicilian Ricotta Cannoli are crispy pastry shells filled with sweet, creamy ricotta, often garnished with chocolate or candied fruit.', 10.99, './desert images/Sicilian Ricotta Cannoli.jpg')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - Name: " . $row["name"]. "category " . $row["category"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }

 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<section class="container py-5" id="menu">
    <h2 class="text-center mb-4">Our Menu</h2>
    <!-- Pasta Section -->
    <div class="mb-5">
            <h3 class="mb-4">Pasta</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pasta images/Agnolini pasta.jpg" class="card-img-top" alt="Pasta Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Agnolini pasta</h5>
                            <p class="card-text">Rich and creamy Alfredo sauce with fettuccine pasta.</p>
                            <p class="card-text">Price: $12.99</p>
                            <!-- Order Form -->
                        <form method="GET" action="order.php">
                            <input type="hidden" name="name" value="Agnolini pasta">
                            <input type="hidden" name="price" value="12.99">
                            <input type="hidden" name="image" value="./pasta images/Agnolini pasta.jpg">
                            <button type="submit" class="btn btn-primary">Order Now</button>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pasta images/Casarecce Pasta With Broccoli and Tuna.jpg" class="card-img-top " alt="Pasta Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Casarecce pasta With Broccoli and Tuna</h5>
                            <p class="card-text">A flavorful dish combining tender pasta, fresh broccoli, and savory tuna, infused with garlic and olive oil. Topped with Parmesan and a squeeze of lemon.</p>
                            <p class="card-text">Price: $14.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pasta images/linguine puttanesca.jpg" class="card-img-top" alt="Pasta Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">linguine puttanesca</h5>
                            <p class="card-text">Linguine Puttanesca is a bold and savory pasta dish featuring olives, capers, anchovies, and tomatoes, creating a tangy, umami-packed sauce.</p>
                            <p class="card-text">Price: $13.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pasta images/Pasta alla Norma.jpg" class="card-img-top" alt="Pasta Dish 4">
                        <div class="card-body">
                            <h5 class="card-title">Pasta alla Norma</h5>
                            <p class="card-text">Pasta alla Norma is a classic Sicilian recipe with tender eggplant, rich tomato sauce, and a sprinkle of ricotta salata for a hearty and flavorful vegetarian dish.</p>
                            <p class="card-text">Price: $15.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pasta images/Rigatoni all'Amatriciana.webp" class="card-img-top" alt="Pasta Dish 5">
                        <div class="card-body">
                            <h5 class="card-title">Rigatoni all'Amatriciana</h5>
                            <p class="card-text">Fresh basil pesto tossed with penne pasta and cherry tomatoes.</p>
                            <p class="card-text">Price: $16.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pizza Section -->
        <div class="mb-5">
            <h3 class="mb-4">Pizza</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Margheritapizza.avif" class="card-img-top" alt="Pizza Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Margherita</h5>
                            <p class="card-text"> It is a timeless favorite, combining a simple tomato base with mozzarella and fresh basil for a classic taste.</p>
                            <p class="card-text">Price: $10.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Pizza ai frutti di mare.webp" class="card-img-top" alt="Pizza Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Pizza ai frutti di mare</h5>
                            <p class="card-text">Pizza ai Frutti di Mare is a seafood lover's delight, topped with a mix of fresh mussels, shrimp, and clams on a tomato base.</p>
                            <p class="card-text">Price: $14.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Pizza caprese.jpg" class="card-img-top" alt="Pizza Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza caprese</h5>
                            <p class="card-text">Pizza Caprese is a refreshing choice, featuring tomatoes, mozzarella, fresh basil, and a drizzle of olive oil.</p>
                            <p class="card-text">Price: $12.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Pizza capricciosa.webp" class="card-img-top" alt="Pizza Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza capricciosa</h5>
                            <p class="card-text">A melody of classic Italian pizza loaded with ham, mushrooms, artichokes, olives, and mozzarella.</p>
                            <p class="card-text">Price: $15.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Pizza quattro stagioni.jpg" class="card-img-top" alt="Pizza Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizza quattro stagioni</h5>
                            <p class="card-text">Pizza that represents the four seasons with sections of artichokes, mushrooms, ham, and olives on a single pizza.</p>
                            <p class="card-text">Price: £16.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./pizza images/Pizzetta.jpg" class="card-img-top" alt="Pizza Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Pizzetta</h5>
                            <p class="card-text">It is a mini pizza, perfect for one, with a crispy crust, tomato sauce, cheese, and customizable toppings.</p>
                            <p class="card-text">Price: $8.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desserts Section -->
        <div>
            <h3 class="mb-4">Desserts</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Blancmange vanila.jpg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Blancmange vanila</h5>
                            <p class="card-text">Blancmange Vanilla is a silky, creamy dessert with a delicate vanilla flavor, often served chilled.</p>
                            <p class="card-text">Price: $5.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Bombolone Pistacchio.jpg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Bombolone Pistacchio</h5>
                            <p class="card-text">Bombolone Pistacchio is a soft, sugar-dusted Italian doughnut filled with rich pistachio cream.</p>
                            <p class="card-text">Price: $6.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Delizia al limone.jpg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Delizia al limone</h5>
                            <p class="card-text">Delizia al Limone is a zesty lemon-infused sponge cake filled with citrus cream, a specialty of Italy's Amalfi Coast.</p>
                            <p class="card-text">Price: $7.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Maritozzo alla panna.jpeg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Maritozzo alla panna</h5>
                            <p class="card-text">Maritozzo alla Panna is a sweet brioche bun generously filled with fluffy whipped cream.</p>
                            <p class="card-text">Price: $8.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Panna cotta.jpeg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Panna cotta</h5>
                            <p class="card-text">Panna Cotta is a smooth, creamy custard-like dessert, often topped with fruit or caramel.</p>
                            <p class="card-text">Price: $9.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./desert images/Sicilian Ricotta Cannoli.jpg" class="card-img-top" alt="Dessert Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Sicilian Ricotta Cannoli</h5>
                            <p class="card-text">Sicilian Ricotta Cannoli are crispy pastry shells filled with sweet, creamy ricotta, often garnished with chocolate or candied fruit.</p>
                            <p class="card-text">Price: $10.99</p>
                            <button type="button" class="btn btn-primary">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php include 'footer.php'; ?>