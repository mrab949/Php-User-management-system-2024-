<?php
session_start();
if(!isset($_SESSION['user14'])){
    header("location:login.php");
    exit();
}
?>





<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .nav {
      display: flex;

      background-color: black;
      align-items: center;
      justify-content: space-between;
      height: 2.3em;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    img {
      width: 4em;
      height: 2em;
      margin-left: 1em;
    }

    .nav ul {
      display: flex;
      list-style: none;
      justify-content: space-between;
      padding: 0;
      margin: 0;
      width: 80%;
    }

    .nav-link {
      color: #A0A0A0;
      display: inline;
      text-decoration: none;
      cursor: grabbing;
      padding: 0 0.5em;
    }

    .nav-link:hover {
      background-color: #575757;
      border-radius: 5px;
    }

    .logout-btn {
      background-color: #f44336;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      transition: background-color 0.3s;
      border: 5px;
    }

    .logout-btn a {
      text-decoration: none;
      color: white;
      font-weight: 900;
    }

    .logout-btn:hover {
      background-color: #d32f2f;
    }

    /* Hamburger Menu */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }

    .hamburger div {
      width: 25px;
      height: 3px;
      background-color: white;
      margin: 4px;
      transition: 0.4s;
    }

    @media (max-width: 768px) {
      .nav ul {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 2.3em;
        left: 0;
        width: 100%;
        background-color: black;
        padding: 0;
        margin: 0;
      }

      .nav ul.show {
        display: flex;
      }

      .nav li {
        text-align: center;
        padding: 1em;
        border-bottom: 1px solid #333;
      }

      .nav li a {
        padding: 1em 38.7%;

      }

      .hamburger {
        display: flex;
      }

      .logout-btn {
        width: 100%;
        text-align: center;
      }
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

    .wlcmname {
      text-align: center;
      color: saddlebrown;
    }

    .footer {
      text-align: center;
      background-color: black;
      color: white;
      padding: 1px 7px;
      width: 100%;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 80%;
      max-width: 800px;
      margin: 5em auto 3em auto;
    }

    header h1 {
      margin: 0;
      padding-bottom: 10px;
      border-bottom: 2px solid #ddd;
    }

    .dashboard-links {
      display: flex;
      justify-content: space-around;
      margin: 20px 0;
    }

    .semester-link {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-decoration: none;
      color: #333;
      transition: transform 0.3s ease;
    }

    .semester-logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
      border: 2px solid #ddd;
      transition: border-color 0.9s;
    }

    .semester-link:hover .semester-logo {
      border-color: #4285f4;
    }

    @media (max-width: 400px) {
      .welcome {
        padding: 0.2em;
      }

      .dashboard-links {
        flex-direction: column;
        align-items: center;
      }

      .semester-link {
        margin-bottom: 15px;
      }

      .nav {
        gap: 12px;
        align-items: center;
      }

      .nav-link {
        font-weight: 100;
      }
    }
  </style>
</head>

<body>
  <nav class="nav">
    <img src="mypic.jpg" alt="">
    <div class="hamburger" onclick="toggleMenu()">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <ul>
      <li><a href="welcome.php" class="nav-link">Home</a></li>
      <li><a href="contactus.php" class="nav-link">Contact Us</a></li>
      <li><a href="aboutus.php" class="nav-link">About Us</a></li>
      <li><button class="logout-btn"><a href="logout.php" target="_blank">Logout</a></button></li>
    </ul>
  </nav>
  <div class="header">
     
    <h1 class="header-text">BAHAUDDIN ZAKARIA UNIVERSITY MULTAN </h1>
  </div>
  <h1 class="welcome">Welcome to the department of computer engineering dashboard!</h1><br>

  <h1 class="wlcmname">Welcome <?php echo $_SESSION['user14'] ; ?></h1>
  <div class="container">
    <header>
      <h1>Dashboard</h1>
    </header>

    <div class="dashboard-links">
      <a href="semester1.php" target="_blank" class="semester-link">
        <img src="background.jpg" alt="First Semester" class="semester-logo">
        <span>First Semester</span>
      </a>
      <a href="semester2.php" target="_blank" class="semester-link">
        <img src="computer_engineering.jpg" alt="Second Semester" class="semester-logo">
        <span>Second Semester</span>
      </a>
      <a href="semester3.php" target="_blank" class="semester-link">
        <img src="background.jpg" alt="Third Semester" class="semester-logo">
        <span>Third Semester</span>
      </a>
    </div>
  </div>
  <footer class="footer">
    <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-06) , BZU Multan All rights reserved.</p>
  </footer>
  <script>
    function toggleMenu() {
      const navLinks = document.querySelector('.nav ul');
      navLinks.classList.toggle('show');
    }
  </script>
</body>

</html>