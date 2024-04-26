<?php

if(isset($_POST['add_to_cart'])){
//    if($user == ''){
//       header('location:login.php');
//    } else {'
    if(isset($_SESSION['name']))
    {
      $user= $_SESSION['name'];
    }
      $name = $_POST['name'];
      $email = $_POST['email'];
      $department = $_POST['department'];
      $complaint = $_POST['complaint'];

      $sql = "SELECT * FROM `cart` WHERE name = '$name' ";
      $check_cart_numbers = $conn->query($sql);

      if($check_cart_numbers->num_rows > 0){
         echo'already added to cart!';
      } else {
         $insert_sql = "INSERT INTO `cart`(name, email, department, complaint) VALUES(' $name', '$email', '$department', '$complaint')";
         $conn->query($insert_sql);
         echo'added to cart!';     
      }
   }
// }

?>
