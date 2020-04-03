<?php

class Blog_post {
    private $blog_id;
    private $user_id;
    private $itle;
    private $body;
    private $main_img;
    private $second_img;
    private $third_img;
    private $category;
    private $dbh;
    
    function __construct(){
        $this->dbh = new PDO("mysql:dbname=Screw-It;host=localhost;", 'root', '');
    }
    
    function createNew(){
        $this->setByParams(-1,date("d.m.Y h:m", author))
    }
    
    function createNewFromPOST(){
        
    }
    
    function getBlogId(){
        return $this->blog_id;
    }
    
    function getUserId(){
        return $this->user_id;
    }
    
         function getTitle() {
        return $this->title;
    }
    
         function getBody() {
        return $this->body;
    }
    
         function getMainImg() {
        return $this->main_img;
    }
    
         function getSecondImg() {
        return $this->second_img;
    }
    
         function getThirdImg() {
        return $this->third_img;
    }
    
        function getCategory() {
        return $this->category;
    }
    
    function setBlogId($blog_id){
        $this->blog_id = $blog_id;
    }
    
    function setUserId($user_id){
        $this->user_id=$user_id;
    }
    
         function setTitle($title) {
        $this->title = $title;
    }
    
         function setBody($body) {
        $this->body = $body;
    }
    
         function setMainImg($main_img) {
        $this->main_img = $main_img;
    }
    
         function setSecondImg($second_img) {
        $this->second_img = $second_img;
    }
    
         function setThirdImg($third_img) {
        $this->third_img = $third_img;
    }
    
        function setCategory($category) {
        $this->category = $category;
    }
    
    function setByParams(){
        
    }
    
    function setByRow(){
        $this->setByParams(
                $row['blog_id']
                $row['user_id'],
                $row['title'],
                $row['body'],
                $row['main_img'],
                $row['second_img'],
                $row['third_img'],
                $row['category'],
                );
    }
    
    function sqlInsertEntry(){
        
    }
    
    function sqlSelectEntryById($blog_id){
        
    }
    
    function sqlUpdateEntryById($blog_id){
        
    }
    
    private function validateString(){
        
    }
    
    private function is_valid_category($category) {
        $UpperCategory = ucfirst($category);
        $validCategory = array('Diy', 'Gardening', 'Decorating', 'Crafts', 'Crime', 'Up cycling furniture', 'Home', 'Before and after', 'Kids', 'Skincare');
        $valid = TRUE;
        
          if (in_array($UpperCategory, $validCategory)){
         return $valid;
        }
        else {
            echo "Not a valid category!";
        }
    }
}
