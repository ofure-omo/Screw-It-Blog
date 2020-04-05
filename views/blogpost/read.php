<!DOCTYPE html>
<html>
    <head>
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
        crossorigin="anonymous"></script>
        <script src="jquery.min.js"></script>
    </head>
    <body>

        <style>
            .blog-container{
                margin: auto;
                width: 60%;
                border: 3px solid green;
                padding: 20px;
                margin-top: 100px;
                margin-bottom: 50px;
            }

            #title {
                text-align: center;
                border: 1px solid red;
            }

            .header-info {
                display: inline-block;
                margin-left: 20px;
                font-size: 0.9em;
                margin-top: 20px;
            }

            .body {
                margin-top: 20px;
                line-height: 1.8em;
                border: 1px solid red;
            }


            .row {
                display: flex;
                flex-wrap: wrap;
                padding: 0 4px;
                border: 1px solid red;
            }

            .column {
                margin-top: 8px;
                vertical-align: middle;
                width: 100%;
                border: 1px solid red;
            }

            .third_image {
                border: 1px solid red;
            }

            .blog_tags {
                text-align: center;
                margin-top: 10px;
                border: 1px solid red;
                font-size: 0.8em;
            }

            #comment-container {
                margin: auto;
                width: 60%;
                border: 3px solid green;
                padding: 20px;
                margin-top: 50px;
                margin-bottom: 70px;

            }

            #social-media{
                border: 1px solid red;
                margin-top: 50px;
                font-size: 1.3em;
                
            }

            .fa {
                padding: 10px;
                cursor: pointer;
            }

            .fa-heart-o {
                user-select: none;
                float: right;
            }

            .fa-heart-o:hover {
                color: red;
            }


        </style>

        <!--text to be replaced with data from the blog_post table -->
        <div class='blog-container'>
            <div id='title'>
                <h1>HOW TO TRANSFORM YOUR LIVING ROOM WITH ONLY 2 ITEMS</h1> <!--header section to retrieve data from db -->

                <p class='header-info'>Author:fffffffff</p>
                <p class='header-info'>Date: 10/10/2000</p>
                <p class='header-info'>Category: Lifestyle</p> 

            </div>

            <div id="tags">
                <p class="blog_tags"><i class="fa fa-tags" aria-hidden="true">diy</i> <!-- will use a foreach function that will show the tag icon foreach tag-->
                    <i class="fa fa-tags" aria-hidden="true">kitchen</i> 
                    <i class="fa fa-tags" aria-hidden="true">dining</i></p> <!-- will be populated with tags retrieved from the db-->
            </div>

            <div id='body-container'> <!--main body section -->
                <p class='body'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.  </p>

            </div>
            <div id='img_container row'> <!--grid for 2 images, that will be positioned side by side at at the same size, when viewing on phone they will lay on top of each other -->
                <div id='main_image column'>
                    <?php
                    //use when displaying images in their grids
                    $file = 'views/blogposts/images/' . $blog->main_image . '.jpg';
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='150' />";
                        echo $img;
                    } else {
                        echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
                    }
                    ?>
                </div>
                <div id='second_image column'>
                    <?php
//use when displaying images in their grids
                    $file = 'views/blogposts/images/' . $blog->second_image . '.jpg';
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='150' />";
                        echo $img;
                    } else {
                        echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
                    }
                    ?>
                </div>
            </div>
            <div id='body-container'> <!--body 2 section -->
                <p class='body'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
            </div>
            <div id='third_image'>
                <?php
//use when displaying images in their grids
                $file = 'views/blogposts/images/' . $blog->third_image . '.jpg'; //retrieve image name and concatenate it with location of image
                if (file_exists($file)) {
                    $img = "<img src='$file' width='150' />";
                    echo $img;
                } else {
                    echo "<img src='views/images/standard/_noproductimage.png' width='150' />"; //assign a noimage image that will be used if image on db not found
                }
                ?>
            </div>
            <div id="social-media"> <!--retrieve url links from user table-->
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-pinterest"></i>
                <i class="fa fa-heart-o" onclick="myFunction(this)"></i> 
                
                
                <script>
            function myFunction(x) {
                x.classList.toggle("fa-heart");
            }
        </script>
            </div>
        </div>
        <div id="comment-container">
            <h4>COMMENTS</h4>
            <p>comment section</p>
        </div>
       
    </body>

</html>

<!--<p>This is the requested product:</p>

<p>Product ID: <?php
/* echo $product->id; ?></p>
  <p>Product Name: <?php echo $product->name; ?></p>
  <p>Product Price: £<?php echo $product->price; ?></p>
 */
/*<?php //use when displaying images in their grids
$file = 'views/blogposts/blogpost_images/' . $blog->main_image . '.jpg || .jpeg';
if (file_exists($file)) {
    $img = "<img src='$file' width='150' />";
    echo $img;
} else {
    echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}
?>*/
	
