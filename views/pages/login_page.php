
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        
        <div>
            <h2>Login</h2>
            <p>Please enter your username and password</p>
            <form action="login_controller.php" method="post">
                <div>
                    
                    <label>Username</label>
                    <input type="text" name="username" autocomplete='off' required>
                </div>    
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
                <div>
                    <a href="forgot_password_page.php">Forgotten your password?</a>
                </div>
                <div>
            <p>Don't have an account? </br><a href="register.php">Sign up now</a>.</p>
                </div>
              </form>
        </div>
    </body>
</html>