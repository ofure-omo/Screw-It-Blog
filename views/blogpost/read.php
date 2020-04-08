
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
                <h1><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

                <p class='header-info'>Author: <?php echo $blog['usernmame']; ?></p>
                <p class='header-info'>Date: <?php echo $blog['date_posted']; ?></p>
                <p class='header-info'>Category: <?php echo $blog['category']; ?></p> 

            </div>

            <div id="tags">
                <p class="blog_tags"><i class="fa fa-tags" aria-hidden="true">diy</i> <!-- will use a foreach function that will show the tag icon foreach tag-->
                    <i class="fa fa-tags" aria-hidden="true">kitchen</i> 
                    <i class="fa fa-tags" aria-hidden="true">dining</i></p> <!-- will be populated with tags retrieved from the db-->
            </div>

            <div id='body-container'> <!--main body section -->
                <p class='body'> <?php echo $blog->body; ?></p>

            </div>
            <div id='img_container row'> <!--grid for 2 images, that will be positioned side by side at at the same size, when viewing on phone they will lay on top of each other -->
                <div id='main_image column'>
                    <?php
                    //use when displaying images in their grids
                    $file = 'views/blogpost/images/' . $blog->image . '.jpg';
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='150' />";
                        echo $img;
                    } else {
                        echo "no image";
                    }
                    ?>
                </div>
                <div id='second_image column'>
                    <?php
//use when displaying images in their grids
                    $file = 'views//blogpost/images/' . $blog->image . '.jpg';
                    if (file_exists($file)) {
                        $img = "<img src='$file' width='150' />";
                        echo $img;
                    } else {
                        echo "no image";
                    }
                    ?>
                </div>
            </div>
            <div id='body-container'> <!--body 2 section -->
                <p class='body'> <?php echo $blog->body2; ?></p>
            </div>
            <div id='third_image'>
                <?php
//use when displaying images in their grids
                $file = 'views/blogpost/images/' . $blog->image . '.jpg'; //retrieve image name and concatenate it with location of image
                if (file_exists($file)) {
                    $img = "<img src='$file' width='150' />";
                    echo $img;
                } else {
                    echo "no image"; //assign a noimage image that will be used if image on db not found
                }
                ?>
            </div>
            <div id="social-media"> <!--retrieve url links from user table-->
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-pinterest"></i>
                <a href="read.php?type=blog_post&id=<?php echo $blog_post->blog_id; ?>"><i class="fa fa-heart-o" onclick="myFunction(this)"></i> </a>
                
                
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




<!--<p>This is the requested product:</p>

<p>Product ID: 
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
	
