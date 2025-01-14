<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "admin" and $pass = "smkbpsuhu"){
    echo "Anda BErhasil Login";
    echo "<br>";
    echo "Username : ". $user;
    echo "<br>";
    echo "Password : ". $pass;
    echo "<br>";
}else{
    echo "Maaf Username dan Pw Anda salah";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}

// echo "<a href='logout.php'>Logout</a>";
?>