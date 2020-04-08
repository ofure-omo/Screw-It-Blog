<?php

/**
 * Description of Login
 *
 * @author linzicarlin
 */
class Login {

    public $username;
    public $password;

    function __construct($username, $password) {

        $this->username = $username;
        $this->password = $password;
    }

    public static function login() {

        $db = Screw_it::getInstance();

        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password']) && $_POST['password'] != "") {
            $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
            //$hashedPassword = password_hash($filteredPassword, PASSWORD_BCRYPT); //creates a password hash 
        }

        $username = $filteredUsername;
        $password = $filteredPassword;

        $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");

        $stmt->execute(array(':username' => $username));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $user['username'];
                $_SESSION["id"] = $user['id'];
            }

            //verify password
        }
    }

}
