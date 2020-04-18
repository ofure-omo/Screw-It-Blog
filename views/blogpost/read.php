<?php include_once $_SERVER ['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'Screw-it' . DIRECTORY_SEPARATOR . 'controllers/comments_controller.php'; ?>
<meta charset="UTF-8">
<body>
    <!--          HEADER       -->
    <?php if ($blog['layout'] == '1' && $blog['published'] === 'published'): ?>
        <div class='read-header'>


            <h1 id="read-title"><?php echo $blog['title']; ?></h1> <!--header section to retrieve data from db -->

            <div>
                <?php
                if (isset($blog['profile_pic'])) {
                    $blogimg = $blog['profile_pic'];
                    $img = "<img src=$blogimg alt='profile picture' class='avatar'>";
                    echo $img;
                } else {
                    echo "<img src='views/images/ryan.jpg' alt='Ryan Gosling' class='avatar'>";
                }
                ?>
            </div>
            <p class='header-info' id ='author'>Written by:<a href='?controller=blogger&action=about' style='text-decoration: none;'> <?php echo $blog['username']; ?></a> <!--should be replaced with username based on the session id-->
                on the <?php
                $d = strtotime($blog['date_posted']);
                echo date('jS F Y', $d);
                ?></p>  
            
            <!--links to a different category oage depending on the blogs category -->
            <?php
            $categories = $blog['category']; 
            if ($categories == 'RENOVATE') {
                $category = "<p class='category'><a href='?controller=categories&action=searchCategory&category=renovate' style='text-decoration: none;'> $categories</p></a> ";
                echo $category;
            } else {
                echo "";
            }
            ?>
            <?php
            $categories = $blog['category'];
            if ($categories == 'CREATE') {
                $category = " <p class='category'><a href='?controller=categories&action=searchCategory&category=create' style='text-decoration: none;'> $categories</p></a ";
                echo $category;
            } else {
                echo "";
            }
            ?>
            <?php
            $categories = $blog['category'];
            if ($categories == 'DECORATE') {
                $category = " <p class='category'><a href='?controller=categories&action=searchCategory&category=decorate' style='text-decoration: none;'> $categories</p></a> ";
                echo $category;
            } else {
                echo "";
            }
            ?>

            <div id="social-media" style="dispaly:inline-block; "> <!--retrieve url links from user table-->
                <a href="<?php echo 'http://.' . $blog['facebook_url']; ?>"><i class="fa read-fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?php echo 'http://' . $blog['insta_url']; ?>"><i class="fa read-fa fa-instagram" aria-hidden="true"></i></a>
                <a href="<?php echo 'http://' . $blog['twitter_url']; ?>"><i class="fa read-fa fa-twitter" aria-hidden="true"></i></a>
                
<!--                 can only like if you are logged in  -->
                    <?php if(isset($_SESSION['loggedin'])): ?>
                <a href="?controller=blog&action=likes&blog_id=<?= $blog['blog_id'] ?>" style="text-decoration: none;"> 
                    <i onclick="myFunction(this)" class="fa fa-heart-o read-fa like" name="like"></i>
                    
                </a><span style="margin-left:2px; font-size:0.5em;"><?php echo $likes; ?></span>
                <?php endif; ?>
                <?php if(!isset($_SESSION['loggedin'])): ?>
                <i onclick="myFunction2(this)" class="fa fa-heart-o read-fa like" name="like"></i>
                 <span style="margin-left:2px; font-size:0.5em;"><?php echo $likes; ?></span>
                <?php endif; ?>
            </div>

        </div>

        <!--        BLOG CONTENT-->

        <div class='read-blog-container'>
            <div id='body-container'> 
                <p class='body' id='body1'> 
                    <?php $body = (nl2br($blog['body']));
                    echo $body; //echo nl2br($body);  
                    ?> 
                </p>

            </div>
            <div id='img_container r' class='row'> 
                <div id='main_image ' class='column'>

                    <?php
                    $blogimg = $blog['main_image'];
                    $img = "<img class='d-block w-100' src='" . $blogimg . "' alt='First slide' style='width:100%' alt='blog image1'/>";
                    echo $img;
                    ?>

                </div>
                <div id='second_image ' class='column'> 

    <?php
    $blogimg = $blog['second_image'];
    $img = "<img class='d-block w-100' src='" . $blogimg . "'alt='First slide' style='width:100%' alt='blog image1'/>";
    echo $img;
    ?>

                </div>
            </div>
            <div id='body-container'> 
                <p class='body'> <?php (nl2br($blog['body2'])); ?> </p>
                <div class='container-fluid' style=''>
        <div class="row">
           

    <?php
    $blogimg = $blog['third_image'];
    $img = "<img class='d-block w-100' src=$blogimg alt='First slide' style='width:100%' alt='blog image1'/>";
    echo $img;
    ?>
            </div>
<!--                   DISPLAY TAGS-->
            <?php foreach ($tag as $newtag): ?>
                
               <div class="tags"> 
                    <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> 

    <?php endforeach; ?>

     </div>
                </div>

        <!--        MORE BLOGS: pulls 3 random blogs from the database-->
        
        <div class='more-blogs'>
            <h4 class='more-blogs-header' style="margin-bottom:45px;">blogs you might like:</h4>
        </div>
        <div class='container-fluid'>
        <div class="row">
            
            <div class="row row-cols-1 row-cols-md-3" style="">
            <?php foreach($list as $card):  ?>

                     <div class='col mb-4'>
                        <div class='card h-100'>
                           <a href='?controller=blog&action=read&blog_id=<?= $card['blog_id'] ?>'>
                               <img style='padding-top: 5%;  height: 250px; width:600px; object-fit: cover;' class='card-img-top' src="<?= $card['third_image'] ?>" alt="<?= $card['title'] ?>">
                           </a>
                                <div class='card-body'>
                                   <h5 class='card-title'><?php echo $card['title']; ?></h5></div>
                                   <div style="margin-bottom: 20px;"><a href="?controller=blog&action=read&blog_id=<?= $card['blog_id'] ?>">View blog</a></div>
                                
                                <div class='card-footer'>
                                    <p class='text-muted' style='font-size:0.75em;'>
                                      <?php   $d = strtotime($card['date_posted']);?>
                                  Posted on <?php echo date("jS F Y", $d);?> <br></p> 
                               </div>
                            </div>
                    </div>
                
                <?php endforeach; ?>
    </div>
    </div> 
        </div>
       
            </div>
     
    </body>
    
     <!--        COMMENTS AND REPLIES-->
      <div style='margin-top: 40px; text-align: center; text-transform: uppercase;' class="comment-title"><h4> comments</h4> </div>

         <div class="comment-container" style="width: 750px;">
        <div class="comment-row">
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1">Comment</label>
                <textarea style=" resize:none;" class="form-control comment-form-control" name="comment" id="mainComment" rows="3" placeholder="write your comment here" ></textarea><br>
                <button style="float:right;"class="btn-primary btn"  id='addComment'>Comment </button><br>
            </div>
        </div>
        <div class="comment-row">
            <div class="col-md-12">
                <h4><b>355 comments</b></h4>
                <div class="user_comments">
                    <div class='comment'>
                        <div class='user'>Tese O <span class='time'>04/05/2020</span></div>
                        <div class='user_comment'>my comment</div>
                        <div class='replies'>
                            <div class='comment'>
                                <div class='user'>Tese O <span class='time'>04/05/2020</span></div>
                                <div class='user_comment'>my comment</div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script scr='text/javascript'>

                        function myFunction(x) {
                            x.classList.toggle("fa-heart");
                            alert('You\'ve liked this blogpost!');
                        }
                        
                        function myFunction2(x) {
                           
                            alert('Please login or register to like this post!');
                        }
                        
                        
$(document).ready(function () {

$("#addComment").on('click', function () {
    var comment = $("#mainComment").val();
    
    if(comment !== "") {
        $.ajax({
            url: 'controllers/comments_controller.php',
            method: 'POST',
            datatype: 'JSON',
            data: {
                addComment: comment
            }, success: function(response) {
                console.log(response);
            }
        });
    } else 
              alert('Please check your comment!');
});

});

    </script>
<?php endif; ?>
<style>

    .user {
        font-weight: bold;
        color: black;
    }

    .time {
        color: grey;
        font-size: 0.8em;
    }

    .user_comment {
        color: black;
    }

    .replies .comment {
        margin-top: 20px;
    }

    .replies {
        margin-left: 20px;
    }

    .read-blog-container{
        margin: auto;
        width: 65%;

    }

    .comment-container{
        margin: auto;
        width: 55%;
        margin-top: 30px;
        margin-bottom: 50px;
    }

    .read-header {
        text-align: center;
        font-size: 1.5em;
        margin: auto;
        width: 65%;
        margin-top: 50px;
    }

    .avatar {
        vertical-align: middle;
        width: 70px;
        height: 70px;
        border-radius: 55%;
        margin-right: 20px;
        margin: auto;

    }

    #read-title {
        font-size: 45px;
        margin-bottom: 20px;
    }

    .header-info {
        margin-left: 35px;
        margin-right: 35px;
        font-size: 0.6em;
        margin-top: 10px;
        text-align:center;
        font-style: italic;
    }

    .category {
        font-size: 0.6em;
        text-align: center;
    }

    .main-header{
        margin: auto;
        width: 80%;
        padding: 20px;

    }

    .body {
        margin-top: 10px;
        line-height: 2.5em;
        font-size: 0.95em;
    }

    #body1 {
        margin-top: 55px;
    }

    .tag {
        display: inline-block;           
        margin: 7px 5px;
        font-size: 0.7em;
        text-transform: uppercase;
    }

    .tag-btn {
        text-align: center;
        background: #ebebeb;
        border-radius: 5px;
        margin: 5px;
        margin-top: 30px;

        border-style: none;


    }

    .tag-btn:hover {
        background-color: #fca15f;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.12), 0 6px 20px 0 rgba(0, 0, 0, 0.05);
    }


    .tags{
        text-align: center;
        display: inline;
    }


    i.read-fa{
        font-size: 16px;
    }

    .read-fa {
        padding: 10px;
        cursor: pointer;
        font-size: 0.8em;
        color: #fca15f;
    }

    .like {
        color: #fca15f;
        cursor: pointer;
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
        margin-bottom: 20px;
    }
    
    .more-blogs-header {
        text-align: center;
        text-transform: uppercase;
        margin-top: 80px;
    }

    @media only screen and (max-width: 1000px) {
        .blog-container{

            width: 70%;

        }
        #read-title{
            font-size: 0.9em; 
            margin-top:20px;
        }

        .read-blog-container {
            /*           margin-top: 30px;*/
            width: 85%;
        }

        .body {
            margin-top: 10px;
            line-height: 1.4em;
            font-size: 0.6em;
        }


        #body1 {
            margin-top: 30px;  
            text-align: center;

        }

        .avatar {
            width: 50px;
            height: 50px;
        }


    }
    @media only screen and (max-width: 400px) {
        .header-info {
            font-size: 0.35em;

        }

        .category {
            font-size: 0.35em;

        }
        i.read-fa {
            font-size: 10px;
        }

        .read-blog-container{
            margin: auto;
            width: 82%;
            padding: 20px;

        }

        .read-header {
            padding-bottom: 0px;
            width: 82%;
            margin-top: 50px;
        }

    }


</style> 


