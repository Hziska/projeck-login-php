<?php
include("koneksi/database.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result  = $koneksi ->query($sql);
    if($result-> num_rows > 0 ){
        $data = $result->fetch_assoc();
        header("location: index.html");
    }else{
        echo"<script>
        alert('login gagal, jika tidak punya akun silahkan regist dulu')
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/output.css">
    <title>form login</title>
</head>
<body>
    <!-- membuat form login -->
    <div class="bg-hero bg-center bg-no-repeat bg-cover h-screen pt-40">
        <div class="container">
            <div class="w-4/5 p-4 border backdrop-blur-sm rounded-md mx-auto 
            md:w-2/4 md:p-10
            lg:w-1/4 lg:p-7">
                <div class="heading">
                    <h1 class="text-2xl font-bold text-white text-center">LOGIN</h1>
                </div>
                <form action="login.php" method="POST" class="mt-9 ">
                    <div class="border mb-6 py-[5px] rounded-full px-3 flex items-center">
                        <input type="text" placeholder="Username" name="username" class="w-full bg-transparent text-white focus:outline-none me-2 p-[3px] tracking-wide placeholder:text-slate-300" required>
                        <div><i class="fa-solid fa-user text-white"></i></div>
                    </div>
                    <div class="border mb-6 py-[5px] rounded-full px-3 flex items-center">
                        <input type="password" placeholder="Password" name="password" class="w-full bg-transparent text-white focus:outline-none me-2 p-[3px] tracking-wide placeholder:text-slate-300" required>
                        <div><i class="fa-solid fa-lock text-white"></i></div>
                    </div>
                  <button class="mb-3 w-full bg-slate-600 rounded-full p-2 font-bold transition duration-500 text-white hover:bg-slate-500" name="login">
                    Login
                  </button>

                  <p class="text-center text-white font-thin text-sm">Don't have an account? <a href="register.php" class="font-semibold">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>