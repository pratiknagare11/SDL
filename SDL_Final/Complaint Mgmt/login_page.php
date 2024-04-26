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
            
            echo "<script>window.location.href = 'index.php';</script>";

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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <div class = "container">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="username">Username</label>
            <input type="text" name = "username" id = "username" required>

            <label for="password">Password</label>
            <input type="password" name = "password" id = "password" required>

            <button type="submit" id="submit">Login</button>
        </form>
    </div>
</body>
</html>