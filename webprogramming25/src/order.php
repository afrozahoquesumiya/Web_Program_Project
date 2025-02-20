<?php
require 'includes/db.php';


// Checking dish details are received
if (!isset($_GET['name']) || !isset($_GET['price']) || !isset($_GET['image'])) {
    die("Invalid request.");
}

$dish_name = $_GET['name'];
$dish_price = $_GET['price'];
$dish_image = $_GET['image'];

// order form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = trim($_POST['customer_name']);
    $customer_email = trim($_POST['customer_email']);
    $customer_address = trim($_POST['customer_address']); // Address input
    $quantity = intval($_POST['quantity']);
    $total_price = $dish_price * $quantity;

    // Valid input check
    if (empty($customer_name) || empty($customer_email) || empty($customer_address) || $quantity <= 0) {
        echo "<script>alert('Invalid input! Please enter valid details.'); window.history.back();</script>";
        exit();
    }

    // customer check
    $stmt = $conn->prepare("SELECT id FROM customers WHERE email = ?");
    $stmt->execute([$customer_email]);
    $customer = $stmt->fetch();

    if ($customer) {
        $customer_id = $customer['id'];
    } else {
        $stmt = $conn->prepare("INSERT INTO customers (name, email, address) VALUES (?, ?, ?)");
        $stmt->execute([$customer_name, $customer_email, $customer_address]);
        $customer_id = $conn->lastInsertId();
    }

    // order
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, total_price, status) VALUES (?, ?, 'Pending')");
    $stmt->execute([$customer_id, $total_price]);
    $order_id = $conn->lastInsertId();

    // order items
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, menu_item_id, quantity, subtotal) 
                            VALUES (?, (SELECT id FROM menu_items WHERE name = ?), ?, ?)");
    $stmt->execute([$order_id, $dish_name, $quantity, $total_price]);

    // Redirect to payment page
    header("Location: payment.php?order_id=$order_id&amount=$total_price");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Order Confirmation</h2>

        <div class="card mx-auto" style="width: 400px;">
            <img src="<?= htmlspecialchars($dish_image) ?>" class="card-img-top" alt="<?= htmlspecialchars($dish_name) ?>">
            <div class="card-body">
                <h4 class="card-title"><?= htmlspecialchars($dish_name); ?></h4>
                <p class="card-text">Price per unit: $<?= number_format($dish_price, 2); ?></p>
            </div>
        </div>

        <!-- Order Form -->
        <form id="orderForm" method="POST" class="mt-4">
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type="text" class="form-control" name="customer_name" id="customerName" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="customer_email" id="customerEmail" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Address:</label>
                <input type="text" class="form-control" name="customer_address" id="customerAddress" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity:</label>
                <input type="number" class="form-control" name="quantity" id="quantity" required min="1">
            </div>

            <button type="submit" class="btn btn-success w-100">Confirm Order</button>
        </form>
    </div>

   

    
</body>
</html>
