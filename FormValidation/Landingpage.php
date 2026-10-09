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
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fc;
    font-family: Arial, sans-serif;
}

.paernt {
    width: 100%;
    min-height: 750px;
    background-color: white;
    text-align: center;
    padding: 45px 35px 35px;
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);

    display: flex;
    flex-direction: column;
    align-items: center;
}

.paernt h1 {
    font-size: 38px;
    color: #111827;
    margin-bottom: 18px;
}

.paernt p {
    width: 320px;
    font-size: 16px;
    line-height: 1.5;
    color: #8b8f9a;
    margin-bottom: 35px;
}

.paernt img {
    width: 230px;
    height: 230px;
    object-fit: contain;
    margin-bottom: 45px;
}

.paernt button {
    width: 100%;
    height: 65px;
    border: none;
    border-radius: 35px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.paernt .log {
    background-color: #3f5bf6;
    color: white;
    margin-bottom: 20px;
    width: 300px;
}

.paernt .up {
    background-color: #ff5257;
    color: #222;
    width: 300px;
}

.paernt .log:hover {
    background-color: #3048d8;
    transform: translateY(-2px);
}

.paernt .up:hover {
    background-color: #e94348;
    transform: translateY(-2px);
}
      
    </style>
</head>
<body>
<div class="paernt">
   <h1>Hello There</h1>
   <p>Automatic identity verification which enable you to verfiy your identity</p>
   <img src="student.png" alt="whyyyyyyyyyyyy">
   <button class="log">Login</button>
   <button class="up">Sign Up</button>
</div>

    
</body>
</html>