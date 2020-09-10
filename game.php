<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="app/assets/css/style.css">
</head>

<body>
    <div class="pl">
        <h1   style="background-color:white;">
       Hi, <?php echo $_POST["name"]; ?>
        </h1>
        
        
    </div>
    <div class="li">
        <h1 id="lives"  style="background-color:white;">
            lives : 3
        </h1>
    </div>
    
    
    <div id="loss-msg">
        <h1>Oops ! You lost !!!</h1>
        <button class="restart-btn">Restart the game</button></br>
        <a href="index.php"><button class="restart-btn">New user?</button></a>
    </div>
    <div id="win-msg">
        <h1>Congratulation ! You win !!!</h1>
        <button class="restart-btn">Restart the game</button>
    </div>
    <script src='app/scripts/stage/GAME.js'></script>
    <script src='all.js'></script>
</body>

</html>
