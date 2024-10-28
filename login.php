<?php
session_start();
if(isset($_SESSION['user14'])){
    header("location:welcome.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      background-image: url('background.jpg');
      background-size: 100% 100%;
      height: 16.5em;
      background-repeat: no-repeat;
      top: 0px;
    }

    .logo {
      width: 5em;
      height: 5em;
      margin-top: 2px;
    }

    .header-text {
      color: hsla(268, 100%, 50%, 1);
      font-size: 2.5em;
      text-align: center;
      margin-top: 1px;

    }

    .welcome {
      text-align: center;
      font-size: 1.5em;
      background-color: #BA9B37;
      padding: 0.2em;
    }

    .fail {
      border-radius:5px;
      height: 2.1em;
      display: flex;
      align-items: center;
      justify-content:center;
      background-color: rgba(245, 106, 106, 1);
      color: white;
    }

    .container {
      width: 70%;
      margin: auto;
      margin-top: 20px;
      box-shadow: 2px 2px 20px 2px #888888;
      background-color: white;
      display: flex;
      border-radius: 10px;
      margin-bottom: 3em;
    }

    .container h1 {
      text-align: center;
      font-size: 1.5em;
      padding-top: 0px;
      margin-top: 0px;
      margin-bottom: 1.5em;
    }

    form {
      width: 90%;
      display: flex;
      flex-direction: column;
      padding: 1.5em 1em;
    }

    .input {
      padding: 2%;
      border: 1.5px solid black;
      border-radius: 10px;
      margin: 0.5em 0px;
    }

    .btn {
      background-color: #3867C6;
      color: white;
      padding: 2% 0%;
      border: 1.5px solid black;
      border-radius: 10px;
      text-align: center;
      margin: 1.5em 0;
    }

    .btn a {
      text-decoration: none;
      color: white;
    }

    .remember {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1em 0em;
      margin: 1em 0 0 0;
    }

    .footer {
      text-align: center;
      background-color: black;
      color: white;
      padding: 1px 7px;
      position: relative;
      bottom: 0px;
      width: 100%;
    }

    @media screen and (max-width: 490px) {
      .container {
        width: 90%;
      }
    }
  </style>
</head>

<body>

  <div class="header">
    <h1 class="header-text">BAHAUDDIN ZAKARIA UNIVERSITY MULTAN </h1>
  </div>
  <h1 class="welcome">Welcome to the department of computer engineering login System!</h1><br>
  <div class="container">
    <form action="login.php" method="post">
      <h1>Log in</h1>
    <?php
      if($_SERVER['REQUEST_METHOD']== "POST"){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $hashedpassword=password_hash($password , PASSWORD_DEFAULT);
        require_once('database.php');
        $sql="SELECT * FROM user14 WHERE email = ?";
        $stmt=mysqli_prepare($conn , $sql);
        mysqli_stmt_bind_param($stmt , 's' , $email);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        $users=mysqli_fetch_assoc($result);
        if(!$users){
           echo"<div class='fail' > User account does not exist  </div>";
        }elseif(password_verify($password , $users['password']) ){
                session_start();
                $_SESSION['user14']=$users['email'];
                $_SESSION['user14']=$users['name'];
                if(isset($_POST['remember'])){
                  setcookie('email',$_POST['email'] , time() + (60*60*24));
                  
                }
                header("location:welcome.php");
        }else{
            echo"<div class='fail' > Incorrect password </div>";
        }
      }
    ?>
      
      <label for="email">Email: </label>
      <input type="email" name="email" id="email" class="input" placeholder="Your email" required>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" class="input" placeholder="Password" required>
      <div class="remember">
        <p> <input type="checkbox" name="remember" id="remember" > Remember me</p>
        <p><a href="forgotpassword.php">Forgot password?</a></p>
      </div>
      <button type="submit" value="submit" class="btn">Log in</button>
      <p>Don't have an account ? <a href="signup.php" target="_blank">sign up</a> </p>
    </form>
  </div>
  <footer class="footer">
    <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-O6) , BZU Multan All rights reserved.</p>
  </footer>
</body>
</html>