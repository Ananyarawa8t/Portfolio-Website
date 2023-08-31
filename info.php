<?php

$con = mysqli_connect('localhost','root','Rawat@945');

if($con)
{
 echo "Connection Successful";
}
else
{
    echo "No Connection";
}
mysqli_select_db($con,'userinformation');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into users (user,email,mobile,comments)  
values ('$user','$email','$email','$comments')";

echo "$query";
mysqli_query($con, $query);

header('location:index.php');


?>