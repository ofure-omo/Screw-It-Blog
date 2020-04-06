<?php

include "../../models/Homepage.php";

    $blog1 = new BlogHP; //Create Object from Model Class
    $blog1text = $blog1->getLatestBlogText();
    $blog1title = $blog1->getLatestBlogTitle();
    $url = "'".$blog1->getLatestBlogImage()."'";
    
    
