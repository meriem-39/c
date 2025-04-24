<?php
include("config.php");
$msg='';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo "email=$email<br>";
    echo "password=$password<br>";

    $select1="SELECT * FROM `reg` WHERE  email = '$email' AND password = '$password'";
    $select_user = mysqli_query($con,$select1);
    if(mysqli_num_rows($select_user)>0){
        $msg= "user already exist!"; 
    }
    else{
        $insert1="INSERT INTO `reg`(`username`, `email`, `password`) VALUES ('$username', '$email','$password')";
        mysqli_query($con,$insert1);
        header('locaion:log.php');

    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- hhhhhh -->
        <meta charset="UTF-8"/>
        <title>c_strom</title>
        <meta name="description" content="thes my world" />
        
        
        <link rel="stylesheet" href="main.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
            <div class="reg">
                <h1>Registiration </h1>
                <p class="msg"><?  = $msg ?></p>
                    <form action="log.php" method="post">
                         <div class="input-log">
                             <input type="username" name='username' placeholder="username" required />
                             <i class='bx bxs-user' style='color:#ffffff'  ></i>
                        </div>
                         <div class="input-log">
                             <input type="email" name='email' placeholder="Email" required />
                             <i class='bx bxl-google'></i>
                        </div>

                        <div class="input-log">
                            <input type="password" name='password' placeholder="password"  required />
                            <i class='bx bxs-lock-alt'></i>
                        </div>

                        <div class="str">
                            <label><input type="checkbox" />agree to the terms & condition </label>
                        
                        </div>
                        
                            <button type="submit" name="submit" class="btn-log"> register</button>
                            
                        <div class="register">
                            <p>already have an account?<a href="log.html">login</a></p>
                        </div>
                    </form>
            </div>
</body>
