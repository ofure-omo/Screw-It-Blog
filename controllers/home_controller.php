<?php

class HomeController {

   public function home() {
       
       $title = BlogHP::getAllTitles();
       $body = BlogHP::getAllBody();
       
       //OOP
       $blog1 = new BlogHP(); 
       $position = 0;
       $blog1->title = $title[$position];
       $blog1->body = $body[$position];
       
       $blog2 = new BlogHP(); 
       $position = 1;
       $blog2->title = $title[$position];
       $blog2->body = $body[$position];
       
       // Procedural
           
       $blog1text = BlogHP::getLatestBlogText();
       $blog1title = BlogHP::getLatestBlogTitle();
       $blogimage = BlogHP::getLatestBlogImage();
       $blogid = BlogHP::getBlogId();
       $url = "'".BlogHP::getLatestBlogImage()."'";
       
       $titles = BlogHP::getAllTitles();
       $blogtitle1 = $title[0];
       $blogtitle2 = $title[1];
    


       $category[] = "create";
       $category[] = "decorate";
       $category[] = "renovate";
    
       require_once('views/pages/home.php');
       
   }

 /*   
include "../../models/Homepage.php";

    $blog1 = new BlogHP; //Create Object from Model Class
    $blog1text = $blog1->getLatestBlogText();
    $blog1title = $blog1->getLatestBlogTitle();
    $url = "'".$blog1->getLatestBlogImage()."'";*/
 }