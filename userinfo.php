<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection successful  ";
}else {
     echo "no connection";
}
mysqli_select_db($con,'webapp1');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query="INSERT INTO contactus(user,email,mobile,comment)
values('$user','$email','$mobile','$comments')";
mysqli_query($con,$query);
header('location:index.php');
?>