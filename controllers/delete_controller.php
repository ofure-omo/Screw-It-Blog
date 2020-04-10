<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of delete_controller
 *
 * @author Abs29
 */
class delete_controller {
    
   public function delete(){
       if (isset($_GET['user_ID'])) {
	$id = $_GET['user_ID'];
	$pdo->query("DELETE FROM Users WHERE user_ID= " . $id . "; ");
	echo "<div class='msg'>
        <h2 class='del'>User has been deleted</h2>
        </div>";
}
}

}