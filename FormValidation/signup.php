<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    font-family: Arial, sans-serif;
    background-color: #fff;
    display: flex;
    justify-content: center;
}

.perant {
    width: 435px;
    min-height: 100vh;
    padding: 20px 25px 15px;
}

.perant h1 {
    text-align: center;
    font-size: 38px;
    color: #111;
    /* margin-bottom: 8px; */
}

.perant > p {
    text-align: center;
    color: #999;
    font-size: 18px;
    /* margin-bottom: 25px; */
}

.perant form {
    display: flex;
    flex-direction: column;
}

.perant label {
    font-size: 18px;
    color: #444;
    /* margin-bottom: 5px; */
}

.perant input {
    width: 100%;
    height: 62px;
    border: 2px solid #e5e5e5;
    border-radius: 5px;
    padding: 0 15px;
    font-size: 18px;
    outline: none;
    /* margin-bottom: 40px; */
}

.perant input:focus {
    border-color: #ff5257;
}

.perant button {
    width: 100%;
    height: 65px;
    border: none;
    border-radius: 35px;
    background-color: #ff5257;
    color: #222;
    font-size: 19px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 5px;
    margin-bottom: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
}

.perant button:hover {
    background-color: #f44348;
}

.perant form > p {
    text-align: center;
    color: #999;
    font-size: 17px;
}

.perant form > p a {
    color: #111;
    font-weight: bold;
    text-decoration: none;
}

.perant form > p a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){

$email = trim($_POST["email"] ?? "");
$number = trim($_POST["number"] ?? "");
$fullname = trim($_POST["fullname"] ?? "");
$date = trim($_POST["date"] ?? "");
$password = trim($_POST["password"] ?? "");
$confirm_password = trim($_POST["confirm_password"] ?? "");

 if ($email === "" || $number === "" || $fullname === "" || $date === "" || $password === "" || $confirm_password === "") {

        echo "All fields are required";
    }
// validete email
 if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Invalid emai";
 }   

//  vaild number 
if (!preg_match("/^[0-9]{14}$/",$number)){
   echo "Mobile must contain exactly 14 digits";
}
}



?>
    <div class="perant">
        <h1>Sign up</h1>
        <p>Create an Account ,its free</p>
        <form  method="POST">
            <label for="">
                Email
            </label>
            <input type="email" name="email" required> <br>
            <label for="">
                Mobile
            </label>
            <input type="text" name="number"  maxlength="14"
            minlength="14"
            pattern="[0-9]{14}" required>
            <label for="">
                Full Name
            </label>
            <input type="text" name="fullname" required>
            <label for="">
                Date of Birth
            </label>
            <input type="date" name="date" required>
            <label for="">
                Password
            </label>
            <input type="password" name="password" required><br>
            <label for="">
                Confirm Password
            </label>
            <input type="password" name="confirm_password" required>
  <button type="submit">Sign up</button>
     <p>Already have an account? <a href="Login.php">Login</a></p>

        </form>

    </div>
</body>
</html>