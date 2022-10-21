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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Index</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .float {
      left: 1050px
    }
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            're-blue': '#686185',
            're-tir': '#dda0dd',
          },
        }
      }
    }
  </script>
</head>

<body class="bg-slate-800">
  <div id="card" class="rounded-xl bg-blue-200 w-4/5 h-80 m-auto mt-24">
    <h1 class="text-center font-bold text-2xl pt-4">Lobby</h1>
    <p class="font-bold ml-16 absolute mt-20">Username : <?php echo $user["fullname"]; ?> # <?php echo $user["id"]; ?></p>
    <p class="flex mt-32 ml-16 absolute">
      <label for="">Pilih Warna :</label>
      <input type="color" id="setcolor" style="border: none;">
    </p>
    <a href="logout.php" class="ml-16 absolute mt-44 bg-re-blue p-2 rounded-lg">Logout</a>
    <button class=" float absolute mt-44 bg-re-blue p-2 rounded-lg" onclick="start()">Start</button>
  </div>

  <div id="game" class="hidden w-96 h-96 bg-slate-400">

  </div>
  <script>
    function start() {
      console.log("oi")
      document.getElementById('card').style.display = "none"
      document.getElementById('game').style.display = "block"
      startGame();

    }
    var myGamePiece;

    function startGame() {
      myGameArea.start();
      myGamePiece = new component(30, 30, "red", 10, 120);
    }

    var myGameArea = {
      canvas: document.createElement("canvas"),
      start: function() {
        this.canvas.width = 580;
        this.canvas.height = 370;
        this.context = this.canvas.getContext("2d");
        document.getElementById('game').insertBefore(this.canvas, document.getElementById('game').childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function(e) {
          myGameArea.keys = (myGameArea.keys || []);
          myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
        window.addEventListener('keyup', function(e) {
          myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
      },
      clear: function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
      }
    }

    function component(width, height, color, x, y) {
      this.gamearea = myGameArea;
      this.width = width;
      this.height = height;
      this.speedX = 0;
      this.speedY = 0;
      this.x = x;
      this.y = y;
      this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
      }
      this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;
      }
    }

    function updateGameArea() {
      myGameArea.clear();
      myGamePiece.speedX = 0;
      myGamePiece.speedY = 0;
      if (myGameArea.keys && myGameArea.keys[37]) {
        myGamePiece.speedX = -1;
      }
      if (myGameArea.keys && myGameArea.keys[39]) {
        myGamePiece.speedX = 1;
      }
      if (myGameArea.keys && myGameArea.keys[38]) {
        myGamePiece.speedY = -1;
      }
      if (myGameArea.keys && myGameArea.keys[40]) {
        myGamePiece.speedY = 1;
      }
      myGamePiece.newPos();
      myGamePiece.update();
    }
  </script>
  <script src="asset/game.js"></script>
</body>

</html>