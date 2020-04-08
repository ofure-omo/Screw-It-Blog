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
    
    public function loginUser () {
        
        require_once('views/pages/login_page.php');
        //check if session is set. If set redirect
        if (isset($_SESSION['loggedin'])){
            return call('pages', 'error'); //placeholder - will send to dashboard once that's ready!
        } else {
            require_once('views/pages/login_page.php');
            Login::login();
            echo "Welcome " . $this->username;
            
            
            
        }
        //if not set run checkPassword
        
        //require login page
       
        //start session
    }
}
