<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practise.php" method="post">
        <label>Quantity: </label>
        <input type="text" name="Quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
if(isset($_POST["Quantity"])){
   $item = "Pizza";
   $price = 10.99;
   $Quantity = $_POST["Quantity"];
   $total = null;

   $total = $Quantity * $price;

   echo "You have ordered {$Quantity} x {$item}s <br>";
   echo "Your Total is: \$$total";
}
?>