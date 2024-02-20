<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:home.php");
	exit;
}?>
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
      <a href="index1.php"><img class="h-8 w-auto" src="uc.png" alt="UC LOGO"> </a>
    </div>
    <div class="hidden sm:ml-6 sm:block">
      <div class="flex space-x-4">
        <a href="#"
          class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">HOME</a>
        <a href="about.php"
          class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT</a>
        <a href="#"
          class="bg-gray-500 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium "
          aria-current="page">LOGIN</a>
      </div>
    </div>
  </div>
  <div class="bg-[#f1f5f9] flex items-center justify-center ">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
      <h2 class="text-2xl font-semibold text-center mb-4 dark:text-slate-400">Login</h2>
      <form method="POST">
        <div class="mb-4">
          <label for="username" class="block text-gray-700 mb-2 text-gray-300">email</label>
          <input type="email" id="email" name="email"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
            placeholder="Enter your email">
        </div>
        <div class="mb-6">
          <label for="password" class="block text-gray-700  mb-2 text-gray-300">Password</label>
          <input type="password" id="password" name="password"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
            placeholder="Enter your password">
        </div>
        <div class="flex justify-center">
          <button type="submit" value="login"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">Login</button>
        </div>
        <?php 
                include("connect.php");

                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    if (!empty($email) && !empty($password)) {
                        $query = "SELECT * FROM student WHERE email = '$email' LIMIT 1";
                        $result = mysqli_query($con, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $user_data = mysqli_fetch_assoc($result);
                            if ($user_data['password'] == $password) {
                                $_SESSION['user_id'] = $user_data['id'];
                                $_SESSION["login"] = true;
                                header("Location: home.php");
                                die;
                            }
                        }
                        echo '<div class="flex justify-center">Wrong username or password!</div>';
                    } else {
                        echo '<div class="flex justify-center">Enter username or password!</div>';
                    }
                }
            ?>
        <p class="text-center">If you don't have an account <a href="Register.php"
            class="text-blue-500 hover:underline"> Register</a></p>
      </form>
    </div>
  </div>

  <body>

</html>