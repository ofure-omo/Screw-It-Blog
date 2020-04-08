

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
            .page-container{
                width: 40%;
                margin-left: 150px;
                margin-top: 50px;
            }

            h1 {
                margin-left: 150px;
                margin-top: 50px;
            }

            #customFile{
                cursor: pointer;
            }

            .button {

                border: none;
                color: white;
                padding: 10px 30px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                font-size: 16px;
                margin-top: 30px;
                margin-bottom: 30px;
                margin-left: 200px;
                cursor: pointer;
                background-color: black;
                border-radius: 7px;
                font-weight: bolder;
            }       

            .button:hover {
                color: white;
                background-color: #3f7cac;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .container-btn {

            }

            .img-upload {
                margin-bottom: 10px;
            }

            .blog-template {
                float: right; 
                height: 800px;
                margin-right: 150px;
            }

            #template-container {
                float:right;
                margin-top: 50px;
            }

            .blog-container {
                margin-left: 170px;
                text-transform: uppercase;
                margin-bottom: 0;

            }

            .img-title {
                margin-bottom: 0;
            }

            .file-type {
                padding-top: 20px;
            }
            
            #tags {
                margin-bottom: 20px;
            }


        </style>
</head>
<body>
    <h1>Register a New Account</h1>
    <span>
    <div class='page-container'>
        
        <p>Enter your details to create an account</p>
        <div class='form-container'>
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
</body>
</html>