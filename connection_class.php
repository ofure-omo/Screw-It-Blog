<?php

class Screw_it {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;Screw-It=php_mvc', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
}
