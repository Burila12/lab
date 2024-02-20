<?php
session_start();
if(isset($_SESSION['login'])){
    header("location:home.php");
	exit;
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
      <a href="index1.php"><img class="h-8 w-auto" src="uc.png" alt="UC LOGO"> </a>
    </div>
    <div class="hidden sm:ml-6 sm:block">
      <div class="flex space-x-4">
        <a href="#"
          class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">HOME</a>
        <a href="about.php"
          class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ABOUT</a>
        <a href="login.php"
          class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">LOGIN</a>

      </div>
    </div>
  </div>
  <div class="bg-[#f1f5f9]">
    <div class="container mx-auto py-12">
      <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4">
          <h2 class="text-2xl font-semibold text-center mb-4 dark:text-slate-400">Register</h2>
          <form action="#" method="POST">
            <div div class="grid grid-cols-1 md:grid-cols-5 gap-4 ">
              <div class="input-container col-span-5 relative">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label for="email" class="block text-gray-300 font-medium">Email</label>
                    <input type="email" id="email" name="email"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your email"
                      required>
                  </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label for="firstname" class="block text-gray-300 font-medium">First Name</label>
                    <input type="text" id="firstname" name="firstname"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your firstname"
                      required>
                  </div>
                  <div>
                    <label for="lastname" class="block text-gray-300 font-medium">Last Name</label>
                    <input type="text" id="lastname" name="lastname"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your lastname"
                      required>
                  </div>
                  <div>
                    <label for="middlename" class="block text-gray-300 font-medium">Middle Name</label>
                    <input type="text" id="middlename" name="middlename"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md"
                      placeholder="Enter your middlename" required>
                  </div>
                  <div>
                    <label for="age" class="block text-gray-300 font-medium">Age</label>
                    <input type="number" id="age" name="age"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your age"
                      required>
                  </div>
                  <div>
                    <label for="gender" class="block text-gray-300 font-medium">Gender</label>
                    <select id="gender" name="gender" class="form-select mt-1 block w-full border rounded-lg border-gray-300 rounded-md"
                      required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label for="address" class="block text-gray-300  font-medium">Address</label>
                  <textarea id="address" name="address" rows="3"
                    class="form-textarea mt-1 block w-full border rounded-lg border rounded-lg border-gray-300 rounded-md" required></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <div>
                    <label for="phone" class="block text-gray-300 font-medium">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md"
                      placeholder="Enter your phonenumber" required>
                  </div>
                  <div>
                    <label for="idno" class="block text-gray-300 font-medium">ID Number</label>
                    <input type="text" id="idno" name="idno"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your idnumber"
                      required>
                  </div>
                  <div>
                    <label for="password" class="block text-gray-300 font-medium">Password</label>
                    <input type="password" id="password" name="password"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md" placeholder="Enter your passwprd"
                      required>
                  </div>
                  <div>
                    <label for="confirm_password" class="block text-gray-300 font-medium">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                      class="form-input mt-1 block w-full border rounded-lg border-gray-300 rounded-md"
                      placeholder="Enter your match password" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex justify-center p-5">
              <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-100">Register</button>
            </div>
            <?php
            include("connect.php");
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $email = $_POST['email'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $middlename = $_POST['middlename'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $idno = $_POST['idno'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
            
                if (!empty($email) && !empty($phone) && !empty($firstname) && !empty($lastname) && !empty($address) && !empty($password) && ($password == $confirm_password)) {
                    $checkQuery = "SELECT * FROM student WHERE email = '$email'";
                    $checkResult = mysqli_query($con, $checkQuery);
            
                    if (mysqli_num_rows($checkResult) > 0) {
                        $message = "email already exists. Please use a different email.";
                        $class = "error-message";
                    } else {
                      $insertQuery = "INSERT INTO student (firstname, lastname, middlename, email, age, gender, address, phone, idno, password) VALUES ('$firstname', '$lastname', '$middlename', '$email', '$age', '$gender', '$address', '$phone', '$idno', '$password')";
                        $insertResult = mysqli_query($con, $insertQuery);
            
                        if ($insertResult) {
                            $message = "Registration successful!";
                            $class = "success-message";
                        } else {
                            $message = "Error in registration. Please try again.";
                            $class = "error-message";
                        }
                    }
                } else {
                    $message = "All fields are required and passwords must match!";
                    $class = "error-message";
                }
            }
            ?>
            <?php
                  if (isset($message)) { 
                    echo "<div class='flex justify-center text-gray-300 $class'><strong>$message</strong></div>";}
            ?>
            
            <p class="text-center">If you have an account <a href="Login.php" class="text-blue-500 hover:underline">
                Login</a></p>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

</html>