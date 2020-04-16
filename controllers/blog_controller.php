<?php

class BlogController {

    public function readAll() {
        // we store all the posts in a variable
        $blogs = Blog::all();
        require_once('views/blogpost/readAll.php');
    }

    public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['blog_id'])) {
            return call('pages', 'error');
        }

        try {
            // we use the given id to get the correct post
            $blog = Blog::find($_GET['blog_id']);
            $likes = Blog::getlikes($_GET['blog_id']);
            $tag = Blog::findTagForBlog($_GET['blog_id']);
            Blog::checkLikes($_GET['blog_id']);
//            $cards = Blog::moreBlogs($_SESSION['user_id']);
            
            if($blog['layout'] === '1'){
            require_once('views/blogpost/read.php');}
            else {
            require_once('views/blogpost/read2.php');}
            
            
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }
    
//    public function chooseLayout(){
//        if($_SERVER['REQUEST_METHOD'] == 'GET') {
//           require_once('views/blogpost/choose_layout.php');
//           
//    } else {
//        Blog::layout();
//        require_once('views/blogpost/create.php');
//    }
//    }

    public function create() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['loggedin'])) {

            $tag = Blog::getTag();
            require_once('views/blogpost/create.php');
        } else {
            Blog::add();
            //function for: insert into tags values (tag) where tag = :tag AND where blog_id = lastinserted blog_id
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {


            if (!isset($_GET['blog_id'])) 
            return call('pages', 'error');            

            $tag = Blog::findTagForBlog($_GET['blog_id']); // we use the given id to get the correct product
            $tags = Blog::getTag(($_GET['blog_id']));
            $blog = Blog::find($_GET['blog_id']);

            require_once('views/blogpost/update.php');
        } else {

            $blog_id = $_GET['blog_id'];
            Blog::update($blog_id);
            Blog::deleteTags($blog_id);
            
            //$blog = Blog::all();
            //require_once('views/blogpost/readAll.php');
        }
    }
    

    public function delete() {
        Blog::remove($_GET['blog_id']);

        require_once('views/blogpost/read.php');
        //$blog = Blog::all();
        //require_once('views/blogpost/readAll.php');
    }

    public function likes() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            Blog::addlikes($_GET['blog_id']);
            
        }       
    }
}

?>