<?php
$Email = $password = "";
$EmailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Email"])) {
        $EmailErr = "Email is Required";
    } else {
        $Email = $_POST["Email"];
    }

    if (empty($_POST["Password"])) {
        $passwordErr = "Password is Required";
    } else {
        $password = $_POST["Password"];
    }

    if ($Email && $password) {
        include("connections.php");

        $check_Email = mysqli_query($connections, "SELECT *FROM login_db WHERE Email='$Email'");
        $check_Email_row = mysqli_num_rows($check_Email);

        if ($check_Email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_Email)) {
                $db_password = $row["Password"];
                $db_account_type = $row["Account_type"];
                if ($password == $db_password) {
                if ($db_account_type == "1") {
                    echo "<script>window.location.href='admin.php';</script>";
                } else {
                    echo "<script>window.location.href='user.php';</script>";
                }
            } else {
                $passwordErr = "Incorrect password";
            }
            }
         }
        
        else {
            $EmailErr = "Email is not registered";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
            <h1>Login</h1>
            <form autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="enter-box">
                <div class="icon"><i class="fas fa-user"></i>
                <input type="Email" placeholder="Email" Name ="Email" required>
                <span class="error-message"><?php echo $EmailErr; ?></span>
                </div>
            </div>
            <div class="enter-box">
                <div class="icon"><i class="fas fa-lock"></i>
                <input type="password"placeholder="Password" Name = "Password" required>
                <span class="error-message"><?php echo $passwordErr; ?></span>
                </div>
            </div>
            <div class="remember">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="button">Login</button>
            <div class="register">
                <p>Don't have an account yet? <a href="register.php">Sign In</a></p>
            </div>
        </form>
    </div>
</body>
</html>