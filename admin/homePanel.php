<?php
include("connect.php");
include("login.php");
if (!isset($_SESSION['na'])) // If session is not set then redirect to Login Page
{
    echo $_SESSION['na'];
    header("Location:index.php");
}
//$sql = "SELECT id, name, images FROM products";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " .'<img src="'.$img.'"/>' . "<br>";
//    }
//} else {
//    echo "0 results";
//}
?>

