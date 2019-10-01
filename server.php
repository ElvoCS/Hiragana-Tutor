<?php 
session_start();

$db = mysqli_connect('localhost', 'root', '', 'login');

$email="";
$password="";


if(isset($_POST['signup'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo 'hello';
            

    mysqli_query($db, "INSERT INTO info (email, password) VALUES ('$email', '$password')"); 
    
    $_SESSION['message'] = "Info saved"; 
    header('location: index.php');
    
}


?>