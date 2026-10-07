<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if ($email === "" || $password === "") {

        echo "All fields are required";

    } else {

        echo "Data was sent using POST";
        echo "<br>Email: " . htmlspecialchars($email);
        echo "<br>Password: " . htmlspecialchars($password);
    }

} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {

    $email = trim($_GET["email"] ?? "");
    $password = trim($_GET["password"] ?? "");

    echo "Data was sent using GET";
}
?>

    
</body>
</html>