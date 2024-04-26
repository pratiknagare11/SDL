<?php
// Establish connection to MySQL database
// $servername = "localhost";
// $username = "root";
// $password = "Pr@tik2003";
// $dbname = "complaint_management_system";

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Retrieve complaint from form
// $name = $conn->real_escape_string($_POST['name']);
// $email = $conn->real_escape_string($_POST['email']);
// $department = $conn->real_escape_string($_POST['department']);
// $complaint = $conn->real_escape_string($_POST['complaint']);


// // Insert complaint into database
// $sql = "INSERT INTO complaints (name, email, department, complaint) VALUES ('$name', '$email', '$department', '$complaint')";

// if ($conn->query($sql) === TRUE) {
//     echo "Complaint submitted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();






$servername = "localhost";
$username = "root";
$password = "Pr@tik2003";
$dbname = "complaint_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection Failed" .$conn -> connect_error);
}
else{
    // alert("Connection Successfulll!!");
    echo "Connection Successfulll!!";
}

$name = $_POST["name"];
$email = $_POST["email"];
$dept = $_POST["department"];
$text = $_POST["complaint"];

$sql = "Insert into complaints (name, email, department, complaint) values ('$name', '$email', '$dept', '$text')";

if($conn -> query($sql) === TRUE){
    echo "Complaint Submitted Successful!!";
}
else{
    echo "Error: " . $conn->error;
}

$conn -> close();

?>










