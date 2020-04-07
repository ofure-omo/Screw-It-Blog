

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
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
=======
        <form action="" method="POST" enctype="multipart/form-data">
>>>>>>> 274bc7122bda1a3dc313c7485c8e497bcd93f023
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
                <label>Answer 1</label>
                <input type="text" name="answer_1" autocomplete='off' required value="">
            </div> 
            <div>
<<<<<<< HEAD
                <label>Security Question: Who is your favourite Ryan?</label>
                <input type="text" name="answer_1" autocomplete="off" required value="">
=======
                <input type="submit" name="submit" value="submit">
>>>>>>> 274bc7122bda1a3dc313c7485c8e497bcd93f023
            </div>
            <div>
                <input type="submit" value="Register Now">
            </div>
            <p>Already have an account? </br><a href="placeholder">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>

