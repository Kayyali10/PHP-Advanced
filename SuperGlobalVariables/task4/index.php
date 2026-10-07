<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
$list = $_POST["list"];
$task= $list ;
$_SESSION["task"][] = $task ; 

}
?>

<h1>To-Do List</h1>
<form method="POST">
<input type="text" name="list" placeholder="Enter Your Task">
<button type="submit">AddTask</button>
</form>

 <?php
    if (isset($_SESSION["task"])){
        echo "<ul> " ;
        foreach($_SESSION["task"] as $item){
          echo  
               "<li> $item </li>" ; 
        }
        echo "</ul>";
    }
    ?>

</body>
</html>

