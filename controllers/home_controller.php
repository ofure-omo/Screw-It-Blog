<?php

class HomeController {

   public function home() {

    
       $blog1text = BlogHP::getLatestBlogText();
       $blog1title = BlogHP::getLatestBlogTitle();
       $blogimage = BlogHP::getLatestBlogImage();
       $blogid = BlogHP::getBlogId();
       $url = "'".BlogHP::getLatestBlogImage()."'";
        


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