
<body>

    <style>
        .blog-container{
            margin: auto;
            width: 60%;
            border: 0.2px solid black;
            padding: 20px;
            margin-top: 100px;
            margin-bottom: 50px;
        }

        #title {
            text-align: center;
            
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
            
        }


        .blog_tags {
            text-align: center;
            margin-top: 10px;
            
            font-size: 0.8em;
        }

        #comment-container {
            margin: auto;
            width: 60%;
            
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 70px;

        }

        #social-media{
            
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
            color: black;
        }

        .fa-heart-o:hover {
            color: red;
        }

        .row {
            display: flex;
        }

        .column {
            flex: 33.33%;
            padding: 10px;
            margin: 10px;
          
        }
        
        .third_image {   
        
        }


    </style> 

    <!--text to be replaced with data from the blog_post table -->
    <div class='blog-container'>
        <div id='title'>
            <h1><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

            <p class='header-info'>Author: <?php echo $blog['user_id']; ?></p>
            <p class='header-info'>Date: <?php echo $blog['date_posted']; ?></p>
            <p class='header-info'>Category: <?php echo $blog['category']; ?></p> 

        </div>

        <div id="tags">
            <p class="blog_tags"><i class="fa fa-tags" aria-hidden="true">diy</i> <!-- will use a foreach function that will show the tag icon foreach tag-->
                <i class="fa fa-tags" aria-hidden="true">kitchen</i> 
                <i class="fa fa-tags" aria-hidden="true">dining</i></p> <!-- will be populated with tags retrieved from the db-->
        </div>

        <div id='body-container'> <!--main body section -->
            <p class='body'> <?php echo $blog['body']; ?></p>

        </div>
        <div id='img_container r' class="row"> <!--grid for 2 images, that will be positioned side by side at at the same size, when viewing on phone they will lay on top of each other -->
            <div id='main_image ' class="column">
                <?php
                $blogimg = $blog['main_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
                echo $img;
                ?>
            </div>
            <div id='second_image ' class="column">
                <?php
                $blogimg = $blog['main_image'];
                $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
                echo $img;
                ?>
            </div>
        </div>
        <div id='body-container'> <!--body 2 section -->
            <p class='body'> <?php echo $blog['body2'] ?></p>
        </div>
        <div class='third_image'>
            <?php
            $blogimg = $blog['main_image'];
            $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%'/>";
            echo $img;
            ?>
        </div>
        <div id="social-media"> <!--retrieve url links from user table-->
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-pinterest"></i>
            <a href='#'><i class="fa fa-heart-o" onclick="myFunction(this)"></i> </a>


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




