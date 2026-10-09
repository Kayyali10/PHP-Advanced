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
    background-color: #fff;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
}

.perant {
    width: 440px;
    min-height: 100vh;
    padding: 105px 35px 30px;
}

.perant h1 {
    text-align: center;
    font-size: 38px;
    color: #111;
    margin-bottom: 28px;
}

.perant > p:first-of-type {
    text-align: center;
    color: #999;
    font-size: 18px;
    margin-bottom: 45px;
}

.perant label {
    display: block;
    font-size: 18px;
    color: #444;
    margin-bottom: 10px;
}

.perant input {
    width: 100%;
    height: 63px;
    border: 2px solid #e5e5e5;
    border-radius: 5px;
    padding: 0 15px;
    font-size: 18px;
    outline: none;
    margin-bottom: 40px;
}

.perant input:focus {
    border-color: #3f5bf6;
}

.perant button {
    width: 100%;
    height: 65px;
    border: none;
    border-radius: 35px;
    background-color: #3f5bf6;
    color: white;
    font-size: 19px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 5px;
    margin-bottom: 30px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.perant button:hover {
    background-color: #3048d8;
}

.perant p:last-child {
    text-align: center;
    color: #999;
    font-size: 17px;
}

.perant p:last-child a {
    color: #111;
    font-weight: bold;
    text-decoration: none;
    margin-left: 3px;
}

.perant p:last-child a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
<div class="perant">
    <h1>Login</h1>
    <p>Welcome back ! Login with your credentials</p>
    <label for="">
        Email
    </label>
    <input type="email" name="email" required> <br>
    <label for="">
        Password
    </label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
    <p>Don`t have an account?<a href="signup.php">Sign up</a></p>

</div>    

</body>
</html>