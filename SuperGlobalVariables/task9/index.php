<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cookie_name = "username";
    $cookie_value = "Ahmad Kayyali";
//  ""      // domain
// false   // secure
// true    // httponly
    setcookie($cookie_name , $cookie_value ,time() + (86400 * 30 ), "/" , "" , false , true);
if (isset($_COOKIE[$cookie_name])){
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}else {
     echo "Cookie named '" . $cookie_name . "' is not set!";

}
    ?>
    
</body>
</html>