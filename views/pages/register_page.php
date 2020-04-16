<!--
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
</html>-->

<div class="flex-container">
    
                <section class="intro-section-about"> 
                    <h1>Register with us </h1>
                    </section>
    
        <section class="main-section">
            <span>
                <div>

                    <p>Enter your details to create an account</p>
                    <div>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div>
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" autocomplete='off' required value="">
                            </div> 
                            <div>
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete='off' required>
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
                                <label>Upload a profile pic</label>
                                <input type="hidden" 
                                       name="MAX_FILE_SIZE" 
                                       value="10000000" />
                                <input type="file" name="profile_pic" />
                               <!-- <input type="submit" value="send" />-->
                            </div>
                            <div>
                                <br>
                                <input type="submit" name="submit" value="Register Now">
                            </div>
                            <p>Already have an account? </br><a href='?controller=login&action=login'>Login here</a>.</p>

                    </div> 
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    </form>
            </span>
        </section>
        <script>
            var myInput = document.getElementById("password");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function () {
                document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function () {
                document.getElementById("message").style.display = "none";
            }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function () {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if (myInput.value.match(lowerCaseLetters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }

                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if (myInput.value.match(upperCaseLetters)) {
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                }

                // Validate numbers
                var numbers = /[0-9]/g;
                if (myInput.value.match(numbers)) {
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                }

                // Validate length
                if (myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }
            }

        </script>
    </body>
</html>
