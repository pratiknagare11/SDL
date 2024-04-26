<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Search</title>
</head>
<body>

<?php
// Create an indexed array of employee names
$employee_names = array(
    "John",
    "Jane",
    "Michael",
    "Emily",
    "David",
    "Sophia",
    "William",
    "Olivia",
    "Daniel",
    "Emma",
    "Matthew",
    "Ava",
    "Christopher",
    "Mia",
    "Andrew",
    "Ella",
    "James",
    "Grace",
    "Logan",
    "Lily"
);

rsort($employee_names);
  // foreach($employee_names as $item){ 
  //     echo $item . "<br>"; 
  // } 

// Check if a name exists in the array
if (isset($_GET['search_name'])) {
    $search_name = $_GET['search_name'];
    $result = array_search($search_name, $employee_names);
    
    if ($result) {
        echo "<p>{$search_name} is an employee.</p>";
        echo "<p>{$search_name}'s ID is {$result}. </p>";
    } else {
        echo "<p>{$search_name} is not found in the list of Employee's.</p>";
    }
}
?>
  <table border="1">
      <thead>
          <tr>
              <th>Employee Name</th>
          </tr>
      </thead>
      <tbody>
          <?php
          // Loop through sorted employee names and print in table rows
          foreach($employee_names as $item){
              echo "<tr><td>$item</td></tr>";
          }
          ?>
      </tbody>
  </table>
<!-- HTML form for user input -->
<form method="GET" action="">
    <label for="search_name">Enter employee name:</label>
    <input type="text" name="search_name" id="search_name" required>
    <button type="submit">Search</button>
</form>

</body>
</html>


