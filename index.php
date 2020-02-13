<?php


session_start();

$_SESSION['score'] = 0;

?>
<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="game.php" >
    <input type="submit" name="startGame" value="START">
</form>
</body>
</html>