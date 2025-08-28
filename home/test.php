<!DOCTYPE html>
<html>
<head>
    <title>Sample E-Commerce Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to our E-Commerce Store</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="products">
        <?php
        // Sample product data
        $products = [
            ['name' => 'Product 1', 'price' => 19.99, 'image' => 'product1.jpg'],
            ['name' => 'Product 2', 'price' => 29.99, 'image' => 'product2.jpg'],
            ['name' => 'Product 3', 'price' => 39.99, 'image' => 'product3.jpg'],
        ];

        // Display products
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="images/' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<h2>' . $product['name'] . '</h2>';
            echo '<p>$' . $product['price'] . '</p>';
            echo '<button>Add to Cart</button>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2023 Sample E-Commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>
