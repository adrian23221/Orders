<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Order</title>
</head>
<body>
    <?php
    $cakes = $_POST['cakes'];
    $coffee = $_POST['coffee'];
    $SUM = 0.99 * $cakes + 1.50 * $coffee;

    echo <<<END

      <h2>Order Summary</h2>;
     <table border= "1" cellpadding= "10"cellspacing= "0">;
    <tr>
    <td>Cakes(0.99 GBP/each)</td><td>$cakes</td>
    </tr>
    <tr>
    <td>Coffee(1.50 GBP/each)</td><td>$coffee</td>
    </tr>
    <tr>
    <td>SUMA</td><td>$SUM GBP</td>
    </tr>
    </table> 
    <br>
    <a href="index.php">Back to the Order Page</a>

END;
    ?>
</body>
</html>