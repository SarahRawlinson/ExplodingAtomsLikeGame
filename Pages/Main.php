﻿<?php
require_once "include.php";
if(isset($_SESSION['game_data']))
{
    $_SESSION['game_data']->Reset();
}
else
{
    $_SESSION['game_data'] = new GameData();    
}
$_SESSION['csv_writer'] = new CSVWriter();
$_SESSION['player'] = new Player('#00FFFF', 'player', 'ai');
$_SESSION['ai'] = new Player('#DC143C', 'ai', 'player');
$_SESSION['started'] = null;
?>
<!DOCTYPE html>
<html lang="en">
<head><title>My Game</title>
    <link rel="stylesheet" href="../CSS/GAME.css" type="text/css">
</head>

<body>
<h1>Exploding Atoms</h1><br>
<a href="settings.php">settings</a><br><br>
<form action="Play.php" method="post"> 
    <?php

    GamePlay::GenerateCells();
    echo TableGenerator::GenerateTable(true);
    ?>       
    
    
</form>

</body>

</html>