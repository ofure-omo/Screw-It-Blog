<?php

class Users {
    
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

    /* function getUser_ID() {
      return $this->user_ID;
      }

      function getUsername() {
      return $this->username;
      }

      function getPassword() {
      return $this->password;
      }

      function getUserfirstname() {
      return $this->user_fn;
      }

      function getUsersurname() {
      return $this->user_ln;
      }

      function getEmail() {
      return $this->email;
      }

      function getDob() {
      return $this->dob;
      }

      function getAnswer_1() {
      return $this->answer_1;
      }
      function setUser_ID($user_ID) {
      $this->user_ID = $user_ID;
      }
      function setUsername($username) {
      $this->username = $username;
      }

      public function setPassword($password) {
      if ($this->is_valid_password($password) === TRUE) {
      $this->password = $password;
      }
      }

      function setUserfirstname($userfirstname) {
      $this->userfirstname = $userfirstname;
      }

      function setUsersurname($usersurname) {
      $this->usersurname = $usersurname;
      }

      function setEmail($email) {
      $this->email = $email;
      }

      function setDob($dob) {
      $this->dob = $dob;
      }

      function setAnswer_1($answer_1) {
      $this->answer_1= $answer_1;
      } */


    /*private function is_valid_password($password) {
        $valid = TRUE;
        $number = preg_match('/\d/', $password);
        if (strlen($password) < 6 || strlen($password) > 12) {
            $valid = FALSE;
            echo "Password must be between 6 and 12 characters." . PHP_EOL;
        };
        if (!$number) {
            $valid = FALSE;
            echo "Password must contain at least one number." . PHP_EOL;
        }
        return $valid;
    }*/

}
