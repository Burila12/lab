<?php
session_start();
if(!isset($_SESSION['login'])){
    header("location:Login.php");
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f1f5f9]">
    <div class="flex justify-center m-10 bg-white rounded-xl shadow-lg h-18 p-5">
        <div class="flex flex-shrink-0 items-center">
            <a href href="#"><img class="h-8 w-auto" src="uc.png" alt="UC LOGO"> </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
                <a href="#"
                class="bg-gray-500 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium "
          aria-current="page">HOME</a>
                <a href="about.php"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT</a>
                <a href="logout.php"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">LOGOUT</a>

            </div>
        </div>
    </div>