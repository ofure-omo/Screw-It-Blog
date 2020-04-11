<?php



echo $_SESSION["user_type"];

class dashboardcontroller {
    //insert IF statement to direct to either member dashboard or blogger dashboard
     
    public function mem_details (){
        if(!isset($_SESSION['user_id'])) {
      
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];

    } else { return call('pages', 'error');
        
    }
}
}