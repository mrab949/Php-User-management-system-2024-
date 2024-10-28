<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recover password</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      flex-direction: column;
    }

    .fail {
      height: 2.1em;
      display: flex;
      align-items: center;
      background-color: rgba(217, 132, 132, 1);
      color: white;
      border-radius:8px;
      padding:3px;
    }

    .err {
      color: red;
    }

    .container {
      width: 70%;
      margin: auto;
      margin-top: 20px;
      box-shadow: 2px 2px 20px 2px #888888;
      background-color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      margin-bottom: 3em;
      flex-direction: column;
      padding: 2em 0 1em 0;
    }

    h1 {
      text-align: center;
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
      border-radius: 5px;
      margin: 0.5em 0px;
    }

    label {
      font-weight: 800;
    }

    .btn {
      background-color: #3867C6;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2%;
      border: 1.5px solid black;
      border-radius: 5px;
    }

    @media screen and (max-width: 490px) {
      .container {
        width: 90%;
      }

    }
  </style>
</head>

<body>

  <?php
$email = $emailerr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Invalid email format";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($emailerr)) {
    // Check if email exists in the database
    $sql = "SELECT * FROM user14 WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 0) {
        echo "<div class='fail'> Email does not exist </div>";
    } else {
        $user = mysqli_fetch_assoc($result);
        $password = $user['password']; 

        
        $to = $email;
        $subject = "Password Recovery";
        $email_body = "Your login password is: " . $password;
        $headers = "From: mrab949@gmail.come\r\n";

        if (mail($to, $subject, $email_body, $headers)) {
            header("location:login.php");
        } else {
            echo "<div class='fail'>Oops! Something went wrong, and we couldn't send your message.</div>";
        }
    }
}
?>


  <div class="container">
    <h1>Recover forgotten Password</h1>
    <p>Recover password by email.</p>
    <form action="" method="post">
      <label for="email">Email:<span class="err"><?php echo $emailerr ?></span></label>
      <input type="email" name="email" id="email" placeholder="Enter your email" class="input">
      <p><b>Note: </b>By clicking send password, Your login password will be sent to your email</p>
      <button type="submit" class="input btn">Send password</button>
    </form>
  </div>
</body>

</html>