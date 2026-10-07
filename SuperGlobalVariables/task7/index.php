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
 
    if (isset($_SESSION["count"]) ){
     $_SESSION["count"]++;
    }else {
     $_SESSION["count"] = 1;
    }
        
   echo "Page refreshed : " .  $_SESSION["count"] . "times" ;
    
    ?>
    
</body>
</html>