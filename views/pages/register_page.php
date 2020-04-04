

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <div>
        <h2>Register your details</h2>
        <p>Please fill this form to create an account</p>
        <form action="" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" autocomplete='off' required value="">
            </div> 
            <div>
                <label>Password</label>
                <input type="password" name="password" autocomplete='off' required>
            </div>
             <div>
                <label>First Name</label>
                <input type="text" name="user_fn" autocomplete='off' required value="">
            </div> 
             <div>
                <label>Last Name</label>
                <input type="text" name="user_ln" autocomplete='off' required value="">
            </div> 
             <div>
                <label>Email Address</label>
                <input type="email" name="email" autocomplete='off' required value="">
            </div> 
             <div>
                <label>Date of Birth</label>
                <input type="date" name="dob" autocomplete='off' required value="">
            </div> 
            <div>
                <input type="submit">
            </div>
            <p>Already have an account? </br><a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>

