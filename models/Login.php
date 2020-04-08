<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

    public static function checkPassword() {

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
        
        $stmt = $db->prepare("SELECT username, password FROM Users WHERE username = :username");

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);


    }

}
