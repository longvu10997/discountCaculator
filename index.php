<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="display_discount.php" method="post">
        Product Description: <br>
        <input type="text" name="product" placeholder="Product Description"> <br>
        List Price: <br>
        <input type="number" name="price" placeholder="Price"> <br>
        Discount Percent: <br>
        <input type="number" name="discount" placeholder="Discount"> <br>
        <input type="submit" name="submit" value="Calculate Discount">
    </form>
</body>
</html>