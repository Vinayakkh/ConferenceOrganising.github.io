<?php
include "conn.php";
$passwordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirmPassword = $_POST["cpass"];
if($firstname!="" && $email!="" && $password!=""){
    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        $passwordError = "Password and confirm password do not match";
    } else {
        // Check if username and email are not already taken
        $query = "SELECT * FROM registration WHERE username = '$firstname' OR email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $passwordError = "Username or email already taken";
        } else {
            // Insert new user data into the database
            $insertQuery = "INSERT INTO registration (username, email, password) VALUES ('$firstname', '$email', '$password')";
            $insertResult = mysqli_query($conn, $insertQuery);

            if ($insertResult) {
                $registrationSuccess = "Registration successful";
                header("Location: index.php");
                exit();
            } else {
                $passwordError = "Error occurred while registering user";
            }
           
        }
    }
}
else{
    $passwordError = "All fields are mandatory";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginstyle.css" />
</head>
<body>
    <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Let's create your account!</div>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($passwordError)) { ?>
    <p style="color: red;"><?php echo $passwordError; ?></p>
<?php } ?>
        <form action="reg.php" method="POST">
            <div class="input-container ic1">
                <input id="firstname" class="input" name="name" type="text" placeholder=" "/>
                <div class="cut"></div>
                <label for="firstname" class="placeholder">First name</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" class="input" name="email" type="text" placeholder=" "/>
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input id="password" class="input" name="pass" type="password" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="password" class="placeholder">Password</label>
            </div>
            <div class="input-container ic2">
                <input id="confirm_password" class="input" name="cpass" type="password" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="confirm_password" class="placeholder">Confirm Password</label>
            </div>
           
            <button type="submit" class="submit">Submit</button>
        </form>
        <a href="Studentlogin.php" style="color:#eee;">Already have an account</a>
    </div>
</body>
</html>
