<?php
session_start();
if(!isset($_SESSION['user14'])){
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About me</title>
  <style>
    * {
       
      box-sizing: border-box;
    }


    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #EDBE86;
    }

    .cv-container {
      width: 83%;
      margin: auto;
      display: flex;
      justify-content: center;
      margin-top: 50px;
      padding: 20px;
    }

    .sidebar {
      width: 30%;
      background-color: black;
      color: white;
      padding: 20px;
      box-sizing: border-box;
    }

    .main-content {
      width: 70%;
      background-color: white;
      padding: 20px;
      box-sizing: border-box;
    }

    .profile-image {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    .section-heading {
      border-bottom: 2px solid #FBA700;
      padding-bottom: 10px;
      font-size: 24px;
      margin-bottom: 15px;
    }

    h5 {
      margin: 5px 0;
      font-size: 18px;
    }

    .section-description {
      margin-bottom: 15px;
    }

    .contact-info {
      background-color: #2D2D2D;
      border-left: 30px solid #FFD100;
      padding-left: 10px;
      margin-top: 8px;
      font-size: 16px;
    }

    .contact-info-item {
      margin: 5px 0;
    }

    .personal-info {
      margin-top: 20px;
      background-color: #FF8C00;
      padding: 15px;
      font-size: 30px;
      text-align: center;
    }

    .about-section,
    .work-experience-section,
    .skills-section {
      margin-top: 20px;
    }

    .work-experience-item {
      display: flex;
      margin-bottom: 15px;
    }

    .work-experience-year {
      width: 30%;
      font-weight: bold;
    }

    .work-experience-description {
      width: 70%;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .skill {
      flex: 1 1 45%;
      border-bottom: 2.5px solid black;
      padding: 5px 0;
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

    @media (max-width: 768px) {
      .cv-container {
        width: 100%;

        flex-direction: column;
        align-items: center;
      }

      .sidebar,
      .main-content {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <?php require("navbar.php");?>

  <div class="cv-container">
    <div class="sidebar">
      <img src="mypic.jpg" alt="Profile Picture" class="profile-image">
      <h4 class="section-heading">Education</h4>
      <div class="section-description">
        <h5>Enter your major</h5>
        <p>Name of your university <br>2006-2010</p>
      </div>
      <div class="section-description">
        <h5>Enter your major</h5>
        <p>Name of your university <br>2010-2014</p>
      </div>
      <h4 class="section-heading">References</h4>
      <div class="section-description">
        <h5>Imran Khan</h5>
        <p>Director | Name of company<br>T+921234567789</p>
      </div>
      <div class="section-description">
        <h5>Fahad Mustafa</h5>
        <p>Web Developer | Company<br>T+92134637543</p>
      </div>
      <div class="contact-info">
        <p class="contact-info-item"><strong>Phone:</strong> +926757656789</p>
        <p class="contact-info-item"><strong>Email:</strong> example@gmail.com</p>
        <p class="contact-info-item"><strong>Website:</strong> www.example.com</p>
        <p class="contact-info-item"><strong>Address:</strong> Shaheen Colony</p>
      </div>
    </div>
    <div class="main-content">
      <div class="personal-info">
        <h3 style="margin: 0;"><b>MUHAMMAD RIZWAN</b></h3>
        <p style="margin: 0;">2023-CPE-06</p>
      </div>
      <div class="about-section">
        <h4 class="section-heading">ABOUT ME</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="work-experience-section">
        <h4 class="section-heading">WORK EXPERIENCE</h4>
        <div class="work-experience-item">
          <p class="work-experience-year">2015-2017</p>
          <div class="work-experience-description">
            <h5>Job Position Here</h5>
            <p>Company Name / California, USA</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="work-experience-item">
          <p class="work-experience-year">2017-2020</p>
          <div class="work-experience-description">
            <h5>Job Position Here</h5>
            <p>Company Name / California, USA</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="work-experience-item">
          <p class="work-experience-year">2020-Present</p>
          <div class="work-experience-description">
            <h5>Job Position Here</h5>
            <p>Company Name / California, USA</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="skills-section">
        <h4 class="section-heading">SOFTWARE SKILLS</h4>
        <div class="skills-list">
          <div class="skill">Adobe Photoshop</div>
          <div class="skill">Adobe Illustrator</div>
          <div class="skill">Adobe InDesign</div>
          <div class="skill">Microsoft Word</div>
          <div class="skill">Microsoft PowerPoint</div>
          <div class="skill">HTML-5/CSS-3</div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <p>© 2024 : Powered by Mr.Rizwan (2023-CPE-06) , BZU Multan All rights reserved.</p>
  </footer>

</body>

</html>