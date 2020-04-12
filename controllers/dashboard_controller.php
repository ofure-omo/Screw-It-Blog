<?php


class dashboardcontroller {
    //insert IF statement to direct to either member dashboard or blogger dashboard
     
    public function mem_details (){
<<<<<<< HEAD
        if(!isset($_SESSION['user_id'])) {   
      
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];

    } else { return call('pages', 'error');
        
    }
}

    public function fav_blog (){
        if(!isset($_SESSION['user_id'])) {   
      
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];

    } else { return call('pages', 'error');
        
    }
}

    public function comments (){
        if(!isset($_SESSION['user_id'])) {   
=======
        if(isset($_SESSION['user_id'])) {
>>>>>>> 0d37221abb412913c4915d4ad2bd5236cc5f43c6
      
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');

    } else { return call('pages', 'error');
        
    }
}
}
