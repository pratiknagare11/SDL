<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header>
      <h1>Complaint Management System</h1>
    </header>

    <div class="container">
      <div class="form">
        <h2>Submit a Complaint</h2>
        <form action="submit_complaint.php" method="POST">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required /><br /><br />

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required /><br /><br />

          <label for="department">Department:</label>
          <select id="department" name="department" required>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option></select
          ><br /><br />
          <textarea
            name="complaint"
            rows="4"
            placeholder="Enter your complaint"
          ></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>

      <div class="complaints">
        <h2>Your Complaints</h2>
         <?php 
           $servername = "localhost";
           $username = "root";
           $password = "Pr@tik2003";
           $dbname = "complaint_management_system";
          
           $conn = new mysqli($servername, $username, $password, $dbname);
          
            
           if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
           }
          
         
           $sql = "SELECT * FROM complaints";
           $result = $conn->query($sql);
          
           if ($result->num_rows > 0) {
                
               while($row = $result->fetch_assoc()) {
                   echo "<p>" . $row['complaint'] . "</p>";
               }
           } else {
               echo "No complaints found";
           }
          
           $conn->close();
       ?>
      </div>
    </div>
  </body>
</html>
