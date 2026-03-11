<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getmethod.php" method="get">
        <label>Username:</label>
        <input type="text" name="Username"><br><br>
        <label>Password:</label>
        <input type="password" name="Password"><br>
        <button>login</button>
    </form>
</body>
</html>
<?php
 echo $_GET["Username"] . "<br>";
 echo $_GET["Password"];
?>