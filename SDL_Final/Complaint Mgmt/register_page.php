<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <h1>Registration Form</h1>
    <div class = "container">
        <form action = "register.php" method="post">
            <label for="name">Name</label>
            <input type = "text" id = "name" name = "name" required>
            
            <label for="name">Username</label>
            <input type = "text" id = "username" name = "username" required>

            <label for="name">Password</label>
            <input type = "password" id = "password" name = "password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>