
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <br><br>
        <h2 style="padding-left:2.7em">Login</h2>
        <section class="main-section">
            

            <form action="" method="post">
                <div> 
                    <label>Username</label>
                    <input type="text" name="username" autocomplete='off' required>
                </div>    
                <div>
                    <label>&nbsp;Password</label>
                    <input type="password" name="password" required>
                </div>
                <br>
                <div>
                    <input type="submit" name="submit" value="Log in">
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