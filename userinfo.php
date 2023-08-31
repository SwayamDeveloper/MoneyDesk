<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Swayamjg@123';
$db_name = 'test';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn) {
    echo "Connection succesfull";
}else{
    echo "No connection";
}



mysqli_select_db($conn, 'test');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfodata1(user,mobile,comments)values('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($conn, $query);
header('location:index.php');


?>

