<?php
// index.php - Display products from the database

// Include the database connection
include('db.php');

// Fetch products from the database
$query = "SELECT * FROM products ORDER BY created_at DESC";
$stmt = $pdo->query($query);

// Start HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file here -->
</head>
<body>
    <header>
        <h1>Welcome to Our Shoe Store</h1>
    </header>

    <main>
        <h2>Our Latest Products</h2>
        <div class="product-list">
            <?php
            // Loop through each product and display
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="product-item">
                    <img src="<?php echo $row['product_image']; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="product-image">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <p><strong>Price:</strong> $<?php echo number_format($row['price'], 2); ?></p>
                    <a href="product_details.php?id=<?php echo $row['product_id']; ?>" class="btn">View Details</a>
                </div>
                <?php
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Shoe Store. All rights reserved.</p>
    </footer>
</body>
</html>
