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
  <title>First Semester Results</title>
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

    .caption {
      font-weight: 900;
      padding: 1em;
      color: rgb(116, 2, 2);
      background-color: aquamarine;
    }

    .about {
      padding: 0.3em;
    }

    table {
      width: 70%;
      border-collapse: collapse;
      margin: 20px auto;
      font-family: Arial, sans-serif;
    }

    th,
    td {
      padding: 7px;
      text-align: center;
      border: 1px solid #ddd;
    }

    .info {
      background-color: burlywood;
      border: 1px solid #714E4E;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .result {
      border: 2px solid black;
      border-radius: 5px;
      margin: 2em auto 5em auto;
      width: 70%;
      display: flex;
      height: 2.4em;
      align-items: center;
      justify-content: space-between;
      padding: 10px;
      background-color: gold;

    }

    a {
      text-decoration: none;
      color: white;
    }

    .mov-button {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1em 3em;
      margin-bottom: 3em
    }

    .button {
      border: 1px solid black;
      padding: 6px;
      background-color: seagreen;
      border-radius: 5px;
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

    }
  </style>
</head>

<body>
<?php require("navbar.php");?>
  <div class="header">
     
    <h1 class="header-text">BAHAUDDIN ZAKARIA UNIVERSITY MULTAN </h1>
  </div>
  <h1 class="welcome">Welcome to the department of computer engineering result System!</h1><br>

  <h2 style="text-align:center; color: saddlebrown">First Semester result</h2>
  <table>
    <caption class="caption about">About</caption>
    <tr>
      <th class="info">Name :</th>
      <th class="info">Muhammad Rizwan</th>
    </tr>
    <tr>
      <th class="info">Roll No :</th>
      <th class="info">2023-CPE-06</th>
    </tr>
  </table>
  <table>
    <caption class="caption">Result</caption>
    <tr>
      <th>Subjects</th>
      <th>Mids</th>
      <th>Final</th>
      <th>Sessional</th>
      <th>GPA</th>

    </tr>
    <tr>
      <th>Computer fundamental T</th>
      <td>29</td>
      <td>45</td>
      <td>15</td>
      <td>4</td>
    </tr>
    <tr>
      <th>Computer fundamental P</th>
      <td>N/A</td>
      <td>60</td>
      <td>12</td>
      <td>3.6</td>
    </tr>
    <tr>
      <th>Computer Workshop Practice</th>
      <td>N/A</td>
      <td>60</td>
      <td>10</td>
      <td>3.5</td>
    </tr>
    <tr>
      <th>Applied physics T</th>
      <td>22</td>
      <td>47</td>
      <td>17</td>
      <td>4</td>
    </tr>
    <tr>
      <th>Applied physics P</th>
      <td>N/A</td>
      <td>70</td>
      <td>16</td>
      <td>4.0</td>
    </tr>
    <tr>
      <th>Circuit Analysis T</th>
      <td>24</td>
      <td>40</td>
      <td>10</td>
      <td>3.7</td>
    </tr>
    <tr>
      <th>Circuit Analysis P</th>
      <td>N/A</td>
      <td>75</td>
      <td>15</td>
      <td>4</td>
    </tr>
    <tr>
      <th>Communication skills</th>
      <td>24</td>
      <td>42</td>
      <td>17</td>
      <td>4</td>
    </tr>
    <tr>
      <th>Calculus</th>
      <td>30</td>
      <td>45</td>
      <td>15</td>
      <td>4</td>
    </tr>
  </table>
  <div class="result">
    <p>Overall semester result </p>
    <p>3.84</p>
  </div>
  <div class="mov-button">
    <button class="button"><a href="welcome.php" target="_blank">Home</a></button>
    <button class="button"><a href="semester2.php" target="_blank">next</a></button>
  </div>

  <footer class="footer">
    <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-06) , BZU Multan All rights reserved.</p>
  </footer>

</body>

</htphp