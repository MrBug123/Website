<?php
ob_start();
session_start();

// Check if the username session variable is empty
if(empty($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <!-- Add any additional head elements, such as styles or scripts -->
</head>
<body>
    <h1>Welcome to the Success Page</h1>
    <p>This is the success.php page. Add your success content here.</p>

    <!-- Provide a logout option -->
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
