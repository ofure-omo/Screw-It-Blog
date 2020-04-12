<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_controller
 *
 * @author linzicarlin
 */
class LoginController {
    
  /*      function loginUser() {
            
        if (!isset($_SESSION['loggedin'])) {
            
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
       require_once('views/pages/login_page.php');
      
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $product = Login::login();
      
        require_once('views/pages/home.php');
        }
      else
          { echo "error";
      }

    }*/
    
   
    public function loginUser() {

        
        //check if session is set. If set redirect
        if (!isset($_SESSION['loggedin'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                Login::login();
             //return call('home', 'home');
            }
        } else {

            echo 'You are already logged in!';
        }
        require_once('views/pages/login_page.php');
    }


}
