
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <style>
       *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
          height: 100%;
        }
    
        .header{
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          background-image: url('background.jpg');
          background-size: 100% 100%;
          height: 16.5em;
          background-repeat: no-repeat;
          
        }
        .logo{
          width:5em;
          height:5em;
          margin-top: 2px;
        }
        .header-text{
          color: hsla(268, 100%, 50%, 1);
          font-size: 2.5em;
          text-align: center;
          margin-top:1px;
        }
        .welcome{
          text-align: center;
          font-size: 1.5em;
          background-color: #BA9B37;
          padding: 0.2em;
        } 
        .container{
            width: 70%;
            margin: auto;
            margin-top: 20px;
            box-shadow: 2px 2px 20px 2px #888888;
            background-color: white;
            display: flex;
            justify-content: center;
            border-radius: 10px;
            margin-bottom: 3em;
        }
        .container h1{
            text-align:center;
            font-size: 1.5em;
            padding-top: 0px;
            margin-top:0px;
        }
        form{
            width: 90%;
            display: flex;
            flex-direction: column;
            padding:1.5em 1em ;
        }
        .input{
            padding: 2%;
            border: 1.5px solid black;
            border-radius: 10px;
            margin: 0.5em 0px;
        }
        .err{
            color: red;
        }
        .btn-container{
            display: flex;
            
            margin-top: 3%;
        }
        .btn{
            background-color:#3867C6;
            color : white ;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2%;
            border: 1.5px solid black ;
            border-radius: 10px;
        }
        .fail , .exist{
            border-radius:10px;
            height:2em;
            display:flex;
            justify-content:center;
            align-items:center;
            background-color: rgba(217, 132, 132, 1);
            color: white;
        }
         .success{
            border-radius:10px;
            height:2em;
            margin-top:2em;S
            display:flex;
            align-items:center;
            justify-content:center;
            background-color: rgba(115, 169, 89, 1);
            color: white;
        }
        .footer{
          text-align: center;
          background-color: black;
          color : white;
          padding: 1px 7px;
          position: relative;
          bottom: 0px;
          width:100%;
        }
        @media screen and (max-width: 490px){
            .container{
               width: 90%;
            }
          
        }
    </style> 
</head>
<body>
    <?php
        $name = $email = $password ="";
        $nameerr = $emailerr = $passworderr = $cpassworderr="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameerr="Name is required";
            }
            else{
                $name=test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameerr="Only letters and white spaces allowed";
                }
            }
            if(empty($_POST["email"])){
                $emailerr="Email is required";
            }
            else{
                $email=test_input($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailerr="Invalid email format";  
                }
            }
            if(empty($_POST["password"])){
                $passworderr="Password is required";
            }else{  
                $password=test_input($_POST["password"]);
                if(!preg_match("#[0-9]+#",$password)) {
                    $passworderr = "Password Must Contain At Least 1 Number!";
                }
                if(!preg_match("#[A-Z]+#",$password)) {
                    $passworderr = "Password Must Contain At Least 1 Capital Letter!";
                }
                if(!preg_match("#[a-z]+#",$password)) {
                    $passworderr = "Password Must Contain At Least 1 Lowercase Letter!";
                   
                }
                if (strlen($_POST["password"]) < 8) {
                    $passworderr = "Password Must Contain At Least 8 Characters!";
                } 
                if(empty($_POST["cpassword"])){
                    $cpassworderr="Confirm password is required";
                }else{
                    $cpassword=test_input($_POST["cpassword"]);
                    if($password!= $cpassword){
                        $cpassworderr="Password do not match";
                    }
                }
            }    
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
   
       <div class="header">
         <h1  class="header-text">BAHAUDDIN ZAKARIA UNIVERSITY MULTAN </h1>
       </div>
       <h1 class="welcome">Welcome to the department of computer engineering registration System!</h1><br>
    <div class="container">
        <form action="signup.php" method="POST">
            <h1>Create a new account</h1>

     <?php
         require_once "database.php";
         if($_SERVER["REQUEST_METHOD"]=="POST" && empty($namerr) && empty($emailerr) && empty($passworderr) && empty($cpassworderr)){
        
           $sql= "SELECT * FROM user14 WHERE email=?";
           $stmt=mysqli_prepare($conn , $sql);
           mysqli_stmt_bind_param($stmt , 's' ,$email);
           mysqli_stmt_execute($stmt);
           $result=mysqli_stmt_get_result($stmt);
           if(mysqli_num_rows($result)>0){
              echo"<div class='exist' > Email already exists! Login now</div>";
           }
           else{

            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            $sql=" INSERT INTO user14 ( name, email, password) VALUES ( ?,?,?)";
            $stmt=mysqli_prepare($conn , $sql);
            mysqli_stmt_bind_param($stmt , 'sss' , $name , $email , $hashedpassword );
            $result = mysqli_stmt_execute($stmt);
            if(!$result){
              echo"<div class='fail' > Oops! Something went wrong </div>";
            }else{
               echo"<div class='exist success' > You're registered successfully! Log in now</div>";
            } 
           
           }
           
         }
       ?>

            <span class="err" style="margin-top: 2.5em;">* Mandatory feilds</span><br>
            <label for="Name">Name:<span class="err">*</span> <span class="err"><?php echo $nameerr ?></span></label>
            <input type="text" name="name"   id="name" placeholder="Your name" class="input"  >
            <label for="email">Email:<span class="err">*</span><span class="err"><?php echo $emailerr ?></span></label>
            <input type="email" name="email" id="email"  class="input" placeholder="Your email">
            <label for="password">Password:<span class="err">*</span><span class="err"><?php echo $passworderr ?></span></label>
            <input type="password" name="password" id="password"    class="input" placeholder="Password">
            <label for="password">Confirm Password:<span class="err">*</span><span class="err"><?php echo $cpassworderr ?></span></label>
            <input type="password" name="cpassword" id="cpassword"   class="input" placeholder="Confirm Password">
            <button type="submit" value="submit" class="btn"><b>Create account</b></button>
            <p style="margin-top: 2.5em;">Already have an account?  <a href="login.php" target="_blank"  >Log in</a> </p>
        </form>
    </div>
    <footer class="footer">
      <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-06) , BZU Multan All rights reserved.</p>
    </footer>
</body>
</html>