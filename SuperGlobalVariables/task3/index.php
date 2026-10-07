<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    

    if ($operator === "+"){

    $result = $num1 + $num2 ;

    } else if ($operator === "-"){

    $result = $num1 - $num2 ; 

    } else if ($operator === "*"){

    $result = $num1 * $num2 ; 

    } else if ($operator === "/") {
        if ($num2 === 0){
            $result = "Cannot divide by zero";
        } else {
            $result = $num1 / $num2 ;
        }

    }


}


?>
    <form method="POST">
        <input type="number" name="num1" placeholder="First number">
        <select name="operator" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        <input type="number" name="num2" placeholder="second number">
        <button type="submit">Caluculate</button>
        </select>
    </form>

    <?php
    if (isset($result)){
        echo "result : " . $result ; 
    }
    ?>
</body>
</html>