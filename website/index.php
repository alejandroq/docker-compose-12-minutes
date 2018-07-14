<html>
    <head>
        <title>My Shop</title>
    </head>
    <body>
        <?php
            $json = file_get_contents('http://product-service');
            $obj = json_decode($json);

            $products = $obj->product;
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }
        ?>        
    </body>
</html>