<?php
    // get user data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    
    // calculate discount amount and discount price
    $discount_amount=$list_price*($discount_percent*.01);
    $discount_price=$list_price-$discount_amount;
    
    // format the numbers
    $list_price_formatted='$'.number_format($list_price, $decimals=2);
    $discount_percent_formatted=$discount_percent.'%';
    $discount_amount_formatted='$'.number_format($discount_amount, $decimals=2);
    $discount_price_formatted='$'.number_format($discount_price, $decimals=2);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_formatted); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_formatted); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($discount_amount_formatted); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($discount_price_formatted); ?></span><br>
    </main>
</body>
</html>