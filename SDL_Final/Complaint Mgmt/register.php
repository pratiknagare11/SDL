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

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "Insert into register(name, username, password) VALUES ('$name', '$username', '$password')";

if($conn -> query($sql) === TRUE){
    echo "Data Registerd Successfully";

    echo "<script>window.location.href = 'login_page.php';</script>";
}
else{
    echo "Error". $conn -> error;
}

$conn -> close();
?>