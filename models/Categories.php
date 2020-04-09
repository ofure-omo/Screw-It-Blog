<?php

class Categories {
    
    public $title;
    public $category;
    public $date_posted;
    public $body;
    public $blog_id;
    public $likes;
    public $comments;

// Catagories

public function getAllTitles(){
    $sql = "select title from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $title[] = $row['title'];
    }

    return $title;
}

public function getAllBody(){
    $sql = "select body from blog_posts";
    $stmt = Screw_it::getInstance()->query($sql);
    $result = $stmt->fetchAll();
    
    foreach( $result as $row ) {
    $body[] = $row['body'];
    }

    return $body;
}

    
}

