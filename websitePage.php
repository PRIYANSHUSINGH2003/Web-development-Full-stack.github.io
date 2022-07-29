<?php
    session_start();
    if(!isset($_SESSION['Email'])){
        // header('location:website.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Design</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Priyanshu Singh</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">SERVICE</a></li>
                    <li><a href="">DESIGN</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <input type="search" name="" id="srch" placeholder="Type To text">
                <a href="#"><button id="btn">Search</button></a>
            </div>
            <h2 class="user_ID"><span class="user">Welcome :</span> <?php echo "<span class='email'>".$_SESSION['Email ID']."</span>"; ?></h2>
            <ul><li class="logout"><a href="logout.php">Logout</a></li></ul>
        </div>
        <div class="content">
            <h1>Web Desgin & <br><span>Development</span><br>Course</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis atque incidunt quos<BR> voluptatem quo, odio porro beatae, provident saepe, illum id pariatur. Amet facilis dolore<BR> soluta ipsa odit! Porro, natus.</p>
            <button class="cm"><a href="#">JOIN US</a></button>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="websitelogo.js"></script>
</body>
</html>