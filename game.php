<?php
require 'player.php';



if (!isset($_SESSION['player'])) {

    $_SESSION['player'] = new Blackjack(0);
}

if (!isset($_SESSION['dealer'])) {
    $_SESSION['dealer'] = new Blackjack(0);
}

if(isset($_POST['hit'])) {
    echo($_SESSION['player']->hit());
}
if(isset($_POST['stand'])) {
    echo($_SESSION['dealer']->stand());
}
if(isset($_POST['surrender'])) {
    echo( $_SESSION['player']->surrender());
}
?>
<form method="POST" action="game.php" >
    <input type="submit" value="HIT ME" name="hit">
    <input type="submit" value="STAND" name="stand">
    <input type="submit" value="SURRENDER" name="surrender">
</form>