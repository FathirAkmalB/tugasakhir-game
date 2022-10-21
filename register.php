<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <style>
      /* #vd {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
} */
    .OT{
      outline: transparent;
    }
    .OT:focus{
      outline: 1px rgb(234, 179 ,8) Solid;
    }
    
    .h{
      height: 2px;
    }
    </style>

      <script src="https://cdn.tailwindcss.com"></script>

  <!-- <video width="320" height="240" controls autoplay loop class="bg-" id="vd">
    <source src="cod.mp4" type="video/mp4">
  </video>   -->
</head>
<body class="bg-cover" style="background-image: url(fire.jpg)">
    <div class="mt-36 mr-36 px-5 py-5 rounded-2xl float-right bg-black bg-opacity-20 w-72">
      <h2 class="text-center mb-2  text-white text-xl">Register</h2>
      <div class="h w-auto bg-yellow-500 mb-4"></div>
      <form autocomplete="off" action="" method="post">
        <input type="hidden" id="action" value="register">
        <input type="text" placeholder="YourName" id="name" value="" class="placeholder-slate-400 text-center OT text-sm rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 "> <br>
        <input type="text" placeholder="Username" id="username" value="" class="placeholder-slate-400 text-center OT text-sm rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-3 "> <br>
        <input type="password" placeholder="Password" id="password" value="" class="placeholder-slate-400 text-center OT text-sm rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-3 "> <br>
        <button type="button" onclick="submitData();" class=" mt-3 bg-amber-500 rounded w-36 h-9 ml-12 text-base text-white font-semibold">Register Now!</button>
      </form>
      <br>
      <a href="login.php" class="text-white ml-20 text-xs">Already Account?</a>
    </div>
    <?php require 'script.php'; ?>
</body>
</html>