
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <div class="wrapper">
        <form action="registerins.php" method= "post">
            <h1> REGISTRATION </h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="Fname" placeholder="Full Name" required>
                </div>
                <div class="input-field">
                    <input type="text" name ="Username" placeholder="Username" required>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="email" name ="Email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <input type="number" name = "Contact" placeholder="Contact Number" required>
                </div>

            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="password" name= "Password" placeholder="Password" required>
                </div>
                
                
            </div>
            <label><input type="checkbox">All the informations provided above are true and correct</label>
        
            <button type="submit" class="button">REGISTER</button>
            
        </form>
    </div>
</body>
</html>