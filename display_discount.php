<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $discount =$_POST['discount'];
        $submit = $_POST['submit'];
        $discount_amount = $price * $discount* 0.01;
        $discount_price = $price - $discount_amount;
        echo "<p>Product Description: $product</p>";
        echo "<p>List Price: $price</p>";
        echo "<p>Discount Percent: $discount%</p>";
        echo "<p>Discount Amount: $discount_amount</p>";
        echo "<p>Discount Price: $discount_price</p>";
    }else{
        echo "<p>Invalid request.</p>";
    }
    ?>
    <p><a href="index.php">Back to Input</a></p>
</body>
</html>