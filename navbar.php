<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
    
        .nav {
            display: flex;
            width: 100%;
            gap: 10em;
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
        }
    
        .nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap:4em;
        }
    
        .nav-link {
            color: #A0A0A0;
            display: inline;
            text-decoration: none;
            cursor: pointer;
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
        }
    
        .logout-btn a {
            text-decoration: none;
            color: white;
            font-weight: 900;
        }
    
        .logout-btn:hover {
            background-color: #d32f2f;
        }
    
        
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
            
            .nav li a {
                padding: 1em 38.7%;
    
            }
    
            .nav li {
                text-align: center;
                padding: 1em 0;
                border-bottom: 1px solid #333;
            }
    
            .hamburger {
                display: flex;
            }
    
            .logout-btn {
                width: 100%;
                text-align: center;
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
            <li><a href="semester1.php" class="nav-link" target="_blank" class="semester-link">Semester1</a></li>
            <li><a href="semester2.php" class="nav-link" target="_blank" class="semester-link">Semester2</a></li>
            <li><a href="semester3.php" class="nav-link" target="_blank" class="semester-link">Semester3</a></li>
            <li><button class="logout-btn"><a href="logout.php" target="_blank">Logout</a></button></li>
        </ul>
    </nav>
    
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav ul');
            navLinks.classList.toggle('show');
        }
    </script>
</body>
</html>