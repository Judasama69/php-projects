<?php


require_once 'Product.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $safeName = Product::sanitize($_POST['product_name']);
    $safePrice = Product::sanitize($_POST['product_price']);

    $newProduct = new Product($safeName, (float)$safePrice);

    $message = $newProduct->getDisplay();
}
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Product Inventory</title>
</head>
<body>

    <h2>Add New Product</h2>

    <form method="POST" action="index.php">
        <label>Product Name:</label><br>
        <input type="text" name="product_name" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="product_price" required><br><br>

        <button type="submit">Add to Inventory</button>
    </form>

    <hr>

    <?php if ($message !== ""): ?>
        <div style="color: green;">
            <strong>Success!</strong><br>
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

</body>
</html>
