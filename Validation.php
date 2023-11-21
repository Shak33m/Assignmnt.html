<?php
session_start();

$con=mysqli_connect('localhost','root');

mysqli_connect_db($con, 'userregistration');

$name=_POST['user'];
$pass=_POST['password'];

$s="select * from usertable where name= '$name' && password='$pass' ";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1){
    header('location:Loginpage.html');
}else{
    $_SESSION['username']
    header('location:Assignment.html')
    
}

?>