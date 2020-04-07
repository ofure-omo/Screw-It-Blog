<?php


/**
 * Description of register_controller
 *
 * @author linzicarlin
 */
class register_controller extends Register {
    
    public function registerUser(){
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userArray = Register::sanitiseInput();
        $newUser = Register::addUser($userArray);
        $username = $userArray['username'];
        echo "Welcome " . $username;
        require_once('views/pages/register_page.php');
    }
    
 }    
}
/*if (isset($_POST['submit'])){
    
$user = new Users();

try
{
	$newUser = $user->addUser();
}
catch (Exception $e)
{
	// Something went wrong: echo the exception message and die 
	echo $e->getMessage();
	die();
}
while ($row = mysqli_fetch_array($newUser)){

    echo "Welcome" . $row['username'];
}

}*/