<?php
session_start();
header('location:website.html');
$con =mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "not connect";
}
mysqli_select_db($con,'website project');
$email =$_POST['email'];
$pass =$_POST['pass'];
$cpass =$_POST['cpass'];

$q ="SELECT *from `signup` WHERE `Email`='$email'&& `Password`='$pass'";

$result=mysqli_query($con,$q);

$num =mysqli_num_rows($result);

if($num ==1){
    $_SESSION['Email ID']=$email;
    header('location:websitePage.php');
}
else{
    header('location:website.html');
}
?>