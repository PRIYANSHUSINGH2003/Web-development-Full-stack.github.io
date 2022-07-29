<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
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
    </div>
    <div class="form">
        <h2>Registration</h2>
        <form action="signUP.php" method="post">
                <input type="Email" name="email" placeholder="Enter Your Email ID">
                <input type="password" name="pass" placeholder="Enter Your Password">
                <input type="password" name="cpass" placeholder="Enter Your Confirm Password">
            <button class="btn" name="submit"><a href="http://127.0.0.1:5501/Project%20website/website.html">Sign UP</a></button>
            <?php
            if(isset($_POST['submit'])){
                $email=$_POST['email'];
                if(preg_match('/[^a-zA-Z\d]+@[a-zA-Z\d]+\.[a-zA-Z\d\.]{2,}+$/',$email)){
                    echo "<br><span style='color:red;';>Only Carrect Email are allowed in Email ID</span>";
                }
                $pass=$_POST['pass'];
                if(empty($pass)){
                    echo "<br><span style='color:red;';>Please Enter Your Password</span>";
                }
                $cpass=$_POST['cpass'];
                if($pass !=$cpass){
                    echo "<br><span style='color:red;';>This Password is not Correct</span>";
                }
                }
            ?>
        </form>
    </div>
</body>
</html>