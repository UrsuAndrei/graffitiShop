<?php
session_start();
include('connect.php');
if (isset($_POST['na']) and isset($_POST['pa'])){
    $usernamea = $_POST['na'];
    $password = hash('sha256', $_POST['pa']);
    $query = "SELECT * FROM login_admin WHERE username='$usernamea' and password='$password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    if ($count == 1){
        $_SESSION['na'] = $usernamea;
        header("Location:homePanel.php");
    }else{
        $fmsg = "Invalid Login.";
    }
}