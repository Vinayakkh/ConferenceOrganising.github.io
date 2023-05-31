
<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM Registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $num = mysqli_num_rows($result);
        
        if ($num == 1) {
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];
            
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
            exit();
        } else {
            $showError = "Invalid Credentials";
        }
    } else {
        $showError = "Error occurred while executing the query";
    }
}
if ($showError) echo '<script>var error = "' . $showError . '"; alert(error);</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/92c6f2cae7.js" crossorigin="anonymous"></script>
    <title>Vinayak's login page</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
     
    <div class="Head">
        <h1>Confrence Login</h1>
        <form action="Studentlogin.php" method="post">
        <div class="box">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
        </div>
        <div class="box">
            <i class="fa fa-key"></i>
            <input type="password" name="password" id="password"
            placeholder="Enter Your Password">
        </div>
        <button class="btn">Log In</button><br>
</form>
        Not a User?<a href="reg.php">Sign up</a>
    </div>

</body>

</html>