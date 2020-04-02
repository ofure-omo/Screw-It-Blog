<?php

class Blog_post {
    protected $blog_title;
    protected $blog_body;
    protected $main_img;
    protected $second_img;
    protected $third_img;
    protected $category;
    
         function getBlogTitle() {
        return $this->blog_title;
    }
    
         function getBlogBody() {
        return $this->blog_body;
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
    
         function setBlogTitle($blog_title) {
        $this->blog_title = $blog_title;
    }
    
         function setBlogBody($blog_body) {
        $this->blog_body = $blog_body;
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
