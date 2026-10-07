<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cookie_name = "visitor";

if (isset($_COOKIE[$cookie_name])){
 echo "Welcome back!";
 echo "<br>Number of visitors: " . file_get_contents("visitors.txt");


}else {
    setcookie($cookie_name, "visited", time() + (86400 * 30));

    if (file_exists("visitors.txt")) {
        $count = (int) file_get_contents("visitors.txt");
    } else {
        $count = 0;
    }

    $count++;

    file_put_contents("visitors.txt", $count);

    echo "Welcome! You are a new visitor.";
    echo "<br>Number of visitors: " . $count;
}


?>

    
</body>
</html>