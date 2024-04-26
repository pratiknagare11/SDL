<?php
 session_start();
    include('connect.php');
     if(isset($_SESSION['name']))
    {
      $user= $_SESSION['name'];
    }


if(isset($_POST['delete'])){

   $name = $_POST['name'];
   $sql = "DELETE FROM `cart` WHERE name ='$name'";
   $result= $conn->query($sql);
   echo'cart item deleted!';
}

if(isset($_POST['delete_all'])){
   $sql ="DELETE FROM cart ";
   $result= $conn->query($sql);
   // header('location:cart.php');
   echo'deleted all from cart!';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="products">

   <h1 class="title">Complaints</h1>

   <div class="box-container">
     <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>department</th>
                <th>complaint</th>
                <th>add to cart</th>
            </tr>

      <?php
         $sql = "SELECT * FROM cart ";
        $result = $conn->query($sql);

    if($result->num_rows>0)
    {

        while($row = $result->fetch_assoc()){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="name" value="<?= $row['name']; ?>">
         </button>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['department']; ?></td>
                <td><?= $row['complaint']; ?></td>
                <td><button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');">X</td>
            </tr>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>
      </table>
   </div>

   <div class="more-btn">
      <a href="menu.php" class="btn">veiw all</a>
   </div>

   <form action="" method="post">
         <button type="submit" name="delete_all" onclick="return confirm('delete all from cart?');">delete all</button>
      </form>

</section>
</body>
</html>

