

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <section class="main-section">
    <h1>Register a New Account</h1>
    <span>
    <div>
        
        <p>Enter your details to create an account</p>
        <div>
        <form action="" method="POST" enctype="multipart/form-data">
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
                <label>Security Question: Who is your favourite Ryan?</label>
                <input type="text" name="answer_1" autocomplete='off' required value="">
            </div> 
            <div>
                <br>
                <input type="submit" name="submit" value="Register Now">
            </div>
            <p>Already have an account? </br><a href='?controller=login&action=login'>Login here</a>.</p>
        </form>
    </div> 
    </span>
    </section>
</body>
</html>