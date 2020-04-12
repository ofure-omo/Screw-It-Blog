<?php


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

    public function fav_blog (){
        if(!isset($_SESSION['user_id'])) {   
      
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];

    } else { return call('pages', 'error');
        
    }
}

    public function comments (){
        if(isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
         echo $_SESSION["user_type"];
    } else { return call('pages', 'error');
     
    }
}

   public function deleteUser(){
       if (isset($_GET['user_ID'])) {
	$id = $_GET['user_ID'];
	$pdo->query("DELETE FROM Users WHERE user_ID= " . $id . "; ");
	echo "<div class='msg'>
        <h2 class='del'>User has been deleted</h2>
        </div>";
}
}
   public function unfavourite(){
       if (isset($_GET['user_ID'])) {
	$id = $_GET['user_ID'];
	$pdo->query("DELETE FROM favourites WHERE (user_ID= " . $id . "& blog_ID= " . $blog_id ."; ");
	echo "<div class='msg'>
        <h2 class='del'>Favourite has been deleted</h2>
        </div>";
       }
}
  public function deleteComment(){
       if (isset($_GET['user_ID'])) {
	$id = $_GET['user_ID'];
	$pdo->query("DELETE FROM comments WHERE (user_ID= " . $id . "& comment_ID= " . $comment_id ."; ");
	echo "<div class='msg'>
        <h2 class='del'>Comment has been deleted</h2>
        </div>";
       }
  }
}
