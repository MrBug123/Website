<?php
$con = @mysqli_connect('localhost','root', '','login');
if(isset($_POST['login']) == "login")
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    $line = mysqli_fetch_assoc($result);

    if ($num >= 1) {
        // Set cookies
        setcookie('username', $line['username'], time() + 3600, '/'); // cookie expires in 1 hour
        setcookie('password', $line['password'], time() + 3600, '/');

        // Start a session
        session_start();
        $_SESSION['username'] = $line['username'];
        $_SESSION['password'] = $line['password'];

        header("location:success.php");
        exit;
    }
    else {
        header("location:login.php?err=true");
        exit;
    }
}
?>
