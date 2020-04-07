<?php

class Register{
    
        public $username;
    public $password;
    public $user_fn;
    public $user_ln;
    public $email;
    public $dob;
    public $answer_1;

    function __construct($username, $password, $user_fn, $user_ln, $email, $dob, $answer_1) {

        $this->username = $username;
        $this->password = $password;
        $this->user_fn = $user_fn;
        $this->user_ln = $user_ln;
        $this->email = $email;
        $this->dob = $dob;
        $this->answer_1 = $answer_1;
    }


    //moved contents of the sanitiseInput into the add user function!

    /* public function sanitiseInput() {

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
      $user_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
      $user_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $dob = $_POST['dob'];
      $answer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);

      $userArray->execute (['username' => $username, 'password' => $password, 'user_fn' => $user_fn, 'user_ln' => $user_ln, 'email' => $email, 'dob' => $dob, 'answer_1' => $answer_1]);

      return $userArray;
      } */

    public static function addUser() {

        $db = Screw_it::getInstance();
        //getInstance for db connection?
        
        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
         if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
             $hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }
     
         if (isset($_POST['user_fn']) && $_POST['user_fn'] != "") {
            $filteredUser_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        }
     
         if (isset($_POST['user_ln']) && $_POST['user_ln'] != "") {
            $filteredUser_ln= filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);         
        }
     
         if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['dob']) && $_POST['dob'] != "") {
            $filteredDob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['answer_1']) && $_POST['answer_1'] != "") {
            $filteredAnswer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);
        }      

        //$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        //$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        //$user_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        //$user_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        //$dob = $_POST['dob'];
        //$answer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);

        //$userArray->execute (['username' => $username, 'password' => $password, 'user_fn' => $user_fn, 'user_ln' => $user_ln, 'email' => $email, 'dob' => $dob, 'answer_1' => $answer_1]);
        //return $userArray;

        $stmt = $db->prepare("INSERT INTO Users (username, password, user_fn, user_ln, email, dob, answer_1)
                 VALUES (:username, :password, :user_fn, :user_ln, :email, :dob, :answer_1);");
        // Set parameters
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":user_fn", $user_fn);
        $stmt->bindParam(":user_ln", $user_ln);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":dob", $dob); //not string - yes it is!
        $stmt->bindParam(":answer_1", $answer_1);

        $username = $filteredUsername;
        $password = $hashedPassword;
        $user_fn = $filteredUser_fn;
        $user_ln = $filteredUser_fn;
        $email = $filteredEmail;
        $dob = $filteredDob;
        $answer_1 = $filteredAnswer_1;

        $stmt->execute();
        // Attempt to execute the prepared statement
        /* if ($stmt->execute()) {
          // Redirect to login page
          header("location: login.php");//change this
          } else {
          echo "Something went wrong. Please try again later.";
          }
          // Close statement
          unset($stmt); */
    }

}
