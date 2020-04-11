
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>

        <section class="main-section">
            <h2>Login</h2>

            <form action="" method="post">
                <div> 
                    <label>Username</label>
                    <input type="text" name="username" autocomplete='off' required>
                </div>    
                <div>
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <input type="submit" name="submit" value="Login">
                </div>
                <div>
                    <br><a href='?controller=security&action=loginUserSecurity'>Forgotten your password?</a>
                </div>
                <div>
                    <p>Don't have an account? <a href='?controller=register&action=registerUser'>Sign up now</a></p>
                </div>
            </form>
        </section>
    </body>
</html>