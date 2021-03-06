<?php

session_start();
echo "<h1>Visitor: ". session_id(). "</h1>";

$_SESSION['page_count'] = $_SESSION['page_count'] ?? 0;
$_SESSION['page_count']++;

if ($_SESSION['page_count'] > 10){
    echo "<br>";
    echo "Thank you for visiting our website 10 times";
    session_unset();
    session_destroy();
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>This page visited: <?php echo $_SESSION['page_count'] ?? 0 ?> times</h1>
</body>

</html>
