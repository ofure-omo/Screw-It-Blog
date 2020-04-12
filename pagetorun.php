<?php session_start(); ?>

        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'home';
        $action     = 'home';
  }

    require_once('views/Page_Template.php');
        ?>
