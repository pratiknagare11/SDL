<?php

$servername = "localhost";
$username = "root";
$password = "Pr@tik2003";
$dbaname = "login";

$conn = new mysqli($servername, $username, $password, $dbaname);

if($conn->connect_error){
    die("Connection Failed!!" . $conn->connect_error);
}
else{
    echo "<script> alert('Connection Successful'); </script>";
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from register where username = '$username'";
    $result = $conn->query($sql);

    if($result -> num_rows > 0){
        $row = $result->fetch_assoc();

        if($row["username"] == $username && $row["password"] == $password){
            echo "Success!!";
            header("Location : index.php");
            exit();
        }
        else{
            echo "Invalid Username & Password!!";
        }
    }
    else{
        echo "Username not found or multiple users with";
    }
}

$conn -> close();

?>


