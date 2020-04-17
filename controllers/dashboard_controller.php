<?php

include 'Users.php';

class dashboardcontroller {

    public function mem_details() {

        if (isset($_SESSION['user_id'])) {
            $details = dashboard::getDetails(($_SESSION['user_id']));
            $comms = dashboard::getCountComments(($_SESSION['user_id']));
            $commenttext = dashboard::getComments(($_SESSION['user_id']));
            require_once('views/pages/mem_dash.php');
            echo $_SESSION["user_type"];
            
        } if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $details[0];
            Dashboardcontroller::updateProfile($id);
            require_once('views/pages/mem_dash.php');
        } else {
            return call('pages', 'error');
        }
    }
        public function delete() {
            Blogger::deleteAccount($_GET['user_id']);
          //  require_once('Views/pages/home.php');

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
