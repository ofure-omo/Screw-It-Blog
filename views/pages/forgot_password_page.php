<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Forgotten Password</title>
    </head>
    <body>
        
        <div>
            <h2>Forgotten Password</h2>
            <p>Who is your favourite Ryan?</p>
            <form action="" method="post">
                <div>
                    
                    <label>Username</label>
                    <input type='text' name='username' autocomplete="off" required>
                </div>
                <div>
                    
                    <label>Favourite Ryan</label>
                    <input type="text" name="answer_1" autocomplete='off' required>
                </div>  
                    <div>
                <br>
                <input type="submit" name="submit" value="Submit Answer">
            </div>
               
                <div>
            <p>Don't have an account? </br><a href='?controller=register&action=registerUser'>Sign up now</a>.</p>
                </div>
              </form>
        </div>
    </body>
</html>
