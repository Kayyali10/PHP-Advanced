<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
    if (isset($_GET["url"])){
        $url = trim($_GET["url"]);

        if ($url !== ""){
            header("Location: " . $url);
            exit;
        }
    }
    
    ?>
  <form method="GET" >
    <input type="text" name="url" placeholder="Enter URL">
    <button type="submit">GO</button>
  </form>
   
</body>
</html>