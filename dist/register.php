<?php
include("koneksi/database.php");


if(isset($_POST["register"])){
   $username = $_POST["username"];
   $fullname = $_POST["fullname"];
   $password = $_POST["password"];

    

   $sql_check = "SELECT * FROM users WHERE username='$username'";
   if($koneksi->query($sql_check)){
    $result = $koneksi->query( $sql_check );
    if($result->num_rows>0){
        $data = $result->fetch_assoc();
        echo"<script>
        alert('data sudah ada, gunakan yang lain yaa!!')
        </script>";
   }else{
    $sql="INSERT INTO users (username,fullname,password) VALUES ('$username','$fullname','$password')";
    if($koneksi->query($sql)){
       header("location: login.php");
    }
   }
} $koneksi->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/output.css">
    <title>form register</title>
</head>
<body>
    <!-- membuat form login -->
    <div class="bg-hero bg-center bg-no-repeat bg-cover h-screen pt-40">
        <div class="container">
            <div class="w-4/5 p-4 border backdrop-blur-sm rounded-md mx-auto 
            md:w-2/4 md:p-10
            lg:w-1/4 lg:p-7">
                <div class="heading">
                    <h1 class="text-2xl font-bold text-white text-center">REGISTER</h1>
                </div>
                <form action="register.php" method="POST" class="mt-9 ">
                    <div class="border mb-6 py-[5px] rounded-full px-3 flex items-center">
                        <input type="text" name="fullname" placeholder="Full Name" class="w-full bg-transparent text-white focus:outline-none me-2 p-[3px] tracking-wide placeholder:text-slate-300" required>
                        <span><i class="fa-solid fa-person text-white"></i></span>
                    </div>
                    <div class="border mb-6 py-[5px] rounded-full px-3 flex items-center">
                        <input type="text" name="username" placeholder="Username" class="w-full bg-transparent text-white focus:outline-none me-2 p-[3px] tracking-wide placeholder:text-slate-300" required>
                        <span><i class="fa-solid fa-user text-white"></i></span>
                    </div>
                    <div class="border mb-6 py-[5px] rounded-full px-3 flex items-center">
                        <input type="password" name="password" placeholder="Password" class="w-full bg-transparent text-white focus:outline-none me-2 p-[3px] tracking-wide placeholder:text-slate-300" required>
                        <span><i class="fa-solid fa-lock text-white"></i></span>
                    </div>
                  <button name="register" class="mb-3 w-full bg-slate-600 rounded-full p-2 font-bold transition duration-500 text-white hover:bg-slate-500">
                    Register
                  </button>

                  <p class="text-center text-white font-thin text-sm">Don't have an account? <a href="login.php" class="font-semibold">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>