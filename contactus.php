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
  <title>Contact Us</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f8f9fa;

      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;


    }

    #i {
      display: flex;

      margin-top: 4em;

      justify-self: center;
      border-radius: 50%;
      height: 15em;
      width: 15em;
    }

    h1 {
      color: #34495e;
      text-align: center;
      margin-bottom: 1em;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      background-color: #fff;
      padding: 2em;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 80%;
      margin: 0 auto 4em auto;
    }

    label {
      margin-bottom: 0.5em;
      color: #34495e;
      font-weight: bold;
    }

    input,
    textarea {
      padding: 0.8em;
      margin-bottom: 1em;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    input:focus,
    textarea:focus {
      border-color: #5c6545;
      outline: none;
    }

    button {
      padding: 0.8em;
      background-color: #5c6545;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.3s;
      text-decoration: none;
      text-align: center;
    }

    button:hover {
      background-color: #3e4530;
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
  </style>
</head>

<body>
  
   <?php require("navbar.php");?>
  
  <img  id="i" src="mypic.jpg" alt="">
  <h2 style="text-align: center; color:blue; margin-bottom: 4em;">@codewithrizwan</h2>
  <div class="contact-form">
    <h1>Contact Us</h1>
    <form action="mailto:mrab949@gmail.com" method="post" enctype="text/plain">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" required>

      <label for="message">Message:</label>
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message..." required></textarea>

      <button type="submit">Send</button>
    </form>
  </div>
  <footer class="footer">
    <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-06) , BZU Multan All rights reserved.</p>
  </footer>
</body>

</html>