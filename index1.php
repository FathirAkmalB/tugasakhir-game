<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
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
    <link rel="stylesheet" href="asset/style.css">
    <title>Login</title>
</head>

<body class="bg-slate-800">
    <p class="absolute font-sans text-re-tir text-xs font-thin develop" >Develop By <span class="text-white">Fathir Akmal B</span></p>
    <img src="bg 1.png" alt="background-image" class="h-1/3 w-1/3 float-right mr-20 mt-20">
    <img src="Ellipse 1.png" alt="" class="  img  mr-20 mt-0 absolute">

    
    <div id="main1">

        <div
            class="w-2/4 h-96 mt-44 bg-transparent border-solid border-2 border-b-transparent border-r-white border-t-transparent border-l-transparent ">
            <main autocomplete="off" action="" method="post" class="mt-10">
                <h2 class="text-right text-white text-3xl mr-9 -mb-3 log p-1 font-bold">Log <span
                        class="text-re-blue font-bold">In</span></h2> <br>
                <div class="w-56 ml-3 bg-dakr opacity-95 rounded"></div>

                <div class="text-sm text-right mr-2 ">

                    <input type="hidden" id="action" value="login" class="">

                    <input type="text" id="username2" value=""
                        class="rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-8 text-right outline-none text-base ani"
                        placeholder="Username" onkeyup="keynameLog()">
                    <br>

                    <p id="hasil-1" class="mr-8 text-sm text-red-400"></p>

                    <input type="password" id="password2" value=""
                        class="rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-8 text-right outline-none text-base matio"
                        placeholder="Password" onkeyup="keypassLog()">
                    <br>

                    <p id="hasil-2" class="mr-8 text-sm text-red-400"></p>

                    <button type="button"
                        class="mt-8 bg-re-blue rounded w-32 h-9 ml-0 mr-7 text-lg text-white font-semibold btn hover:bg-re-tir"
                        onclick="submitDataLog();">Log in</button>
                    <br> <br>
                    <p><a class="text-white text-xs btn mr-7 " onclick="reg()">Already Have Account? <span
                                class="text-re-blue btn">Regist Here</span></a></p>
                </div>

            </main>
        </div>
    </div>
 
    <div id="main2" style="display: none;"
        class="w-2/4 h-96 mt-44 bg-transparent border-solid border-2 border-b-transparent border-r-white border-t-transparent border-l-transparent">
        <main autocomplete="off" action="" method="post" class="mt-10">
            <h2 class="text-right text-white text-3xl mr-9 -mb-8 log p-1 font-bold">Sign <span
                    class="text-re-blue font-bold">Up</span></h2> <br>
            <div class="w-56 ml-3 bg-dakr opacity-95 rounded"></div>

            <div class="text-sm text-right mr-2 ">

                <input type="hidden" id="action" value="register" class="">

                <input type="text" id="fullname" value=""
                    class="rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-8 text-right outline-none text-base ani"
                    placeholder="Full Name" onkeyup="keynameReg()">
                <br>

                <p id="hasil-1" class="mr-8 text-sm text-red-400"></p>

                <input type="password" id="password" value=""
                    class="rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-8 text-right outline-none text-base matio"
                    placeholder="Password" onkeyup="keypassReg()">
                <br>

                <input type="text" id="username" value=""
                    class="rounded-sm bg-transparent text-white w-60 h-8 py-4 px-8 mt-8 text-right outline-none text-base matio"
                    placeholder="Username" onkeyup="keyuserReg()">
                <br>

                <p id="hasil-2" class="mr-8 text-sm text-red-400"></p>

                <button type="button"
                    class="mt-8 bg-re-blue rounded w-32 h-9 ml-0 mr-7 text-lg text-white font-semibold btn hover:bg-re-tir"
                    onclick="submitData();">Regist</button>
                <br> <br>
                <p><a class="text-white text-xs btn mr-7 " onclick="log()">Not Have Account? <span
                            class="text-re-blue btn">Login Here</span></a></p>
            </div>

        </main>
    </div>
    <script src="asset/switch.js"></script>
</body>

</html>