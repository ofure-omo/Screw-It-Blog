<?php

class Register { //extends Users {

    public function sanitiseInput() {
        
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $user_fn = filter_input(INPUT_POST, 'user_fn', FILTER_SANITIZE_SPECIAL_CHARS);
        $user_ln = filter_input(INPUT_POST, 'user_ln', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $dob = $_POST['dob'];
        $answer_1 = filter_input(INPUT_POST, 'answer_1', FILTER_SANITIZE_SPECIAL_CHARS);

        $userArray = ['username' => $username, 'password' => $password, 'user_fn' => $user_fn, 'user_ln' => $user_ln, 'email' => $email, 'dob' => $dob, 'answer_1' => $answer_1];

        return $userArray;
    }

    public function addUser($userArray) {
        //getInstance for db connection?
        
        $db = Screw_it::getInstance();
        

        $sql = "INSERT INTO Users (username, password, user_fn, user_ln, email, dob, answer_1)"
                . " VALUES (:username, :password, :user_fn, :user_ln, :email, :dob, :answer_1)";
        // Set parameters
        $param_username = $userArray['username'];
        $param_password = password_hash($userArray['password'], PASSWORD_DEFAULT); // Creates a password hash
        $param_user_fn = $userArray['user_fn'];
        $param_user_ln = $userArray['user_ln'];
        $param_email = $userArray['email'];
        $param_dob = $userArray['dob'];
        $param_answer_1 = $userArray['answer_1'];

        if ($stmt = $db->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":user_fn", $param_user_fn, PDO::PARAM_STR);
            $stmt->bindParam(":user_ln", $param_user_ln, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":dob", $param_dob, PDO::PARAM_STR); //not string - yes it is!
            $stmt->bindParam(":answer_1", $param_answer_1, PDO::PARAM_STR);
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: ../views/pages/login_page.php");//change this
            } else {
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            unset($stmt);
        }
    }

}
