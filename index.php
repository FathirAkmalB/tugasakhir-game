<?php
require 'function.php';
if (isset($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="asset/css/game.css">
</head>

<body>
    <div class="container" id="loby">
        <div class="nama-game">
            <h1 class="tirek">Speedy Tirek</h1>
        </div>

        <div class="card1">
        <p class="player"  id="text">PLAYER : <?php echo $user["fullname"]; ?> # <?php echo $user["id"]; ?></p>
            <div class="warna"><p class="t-warna">Choose Color :</p><input id="color" type="color" style="background-color: transparent; border: none;"></div>
        </div>
        <div class="btn-card"><a href="logout.php" class="log">LOGOUT</a><button onclick="mulai()" class="mulai" style="border: none;">START</button></div>
    </div>

    <div id="game" style="display: none;">
    <p class="usn-game" id="plyr">Player : <?php echo $user["fullname"]; ?> # <?php echo $user["id"]; ?></p>
        <div id="area"></div>
        <div class="btn-game"  id="btn-g" style="display: none;">
        <button onclick="ulang()" class="ulang">Try Again</button> 
        <button onclick="kembali()" class="kembali">Back</button>
        </div>
        </div>

        <footer>
            <h1>Developed By <span>Fathir Akmal</span></h1>
        </footer>


    <script src="asset/javascript/game.js"></script>
</body>


</html>