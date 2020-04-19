<?php

class dashboardcontroller {

    public function mem_details() {

        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            $comms = dashboard::getCountComments(($_SESSION['user_id']));
            $comms = dashboard::getComments(($_SESSION['user_id']));
            $favourites = dashboard::getFavourites(($_SESSION['user_id']));
            $unfavourite = dashboard::unfavourite(($_SESSION['user_id']),'blog_id');
            require_once('views/pages/mem_dash.php');
            //echo $_SESSION["user_type"];
            
            
            // If post request sent
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $details[0];
                dashboard::updateProfile($id);
                
                require_once('views/pages/mem_dash.php');
            } 
            
        } 
    }

}
    /*
    public function fav_blog() {
        if (isset($_SESSION['user_id'])) {

            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
        } else {
            return call('pages', 'error');
        }
    }

    public function comments() {
        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
        } else {
            return call('pages', 'error');
        }
    }

    public function deleteUser() {
        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
        } else {
            return call('pages', 'error');
        }
    }

    public function unfavourite() {
        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
        } else {
            return call('pages', 'error');
        }
    }

    public function deleteComment() {
        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
        } else {
            return call('pages', 'error');
        }
    }

}
     * /*
     * 
     */
