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
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){
             
         
            //check if session is set. If set redirect
        if (!isset($_SESSION['loggedin'])){

           Login::login();
            echo "Welcome!";
            
        } else {

              return call('pages', 'error');//placeholder - will send to dashboard once that's ready!
            
        }

        //require login page
         }
        //start session
    }
}
