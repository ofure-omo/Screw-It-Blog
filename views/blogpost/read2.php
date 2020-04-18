 <?php if($blog['layout'] === '2' && $blog['published'] === 'published'): ?>

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
            <p class='header-info' id ='author'>Written by:<a href='?controller=blogger&action=about' style='text-decoration: none;'> <?php echo $blog['user_fn'] . PHP_EOL . $blog['user_ln']; ?></a> <!--should be replaced with username based on the session id-->
                on the <?php
                $d = strtotime($blog['date_posted']);
                echo date('jS F Y', $d);
                ?></p>
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
                <?php if(isset($_SESSION['loggedin'])): ?>
                <a href="?controller=blog&action=likes&blog_id=<?= $blog['blog_id'] ?>" style="text-decoration: none;"> 
                    <i onclick="myFunction(this)" class="fa fa-heart-o like" name="like"></i>
                    <span style="margin-left:2px; font-size:0.5em;"><?php echo $likes; ?></span>
                </a>
                <?php endif; ?>
                <?php if(!isset($_SESSION['loggedin'])): ?>
                <i onclick="myFunction(this)" class="fa fa-heart-o like" name="like"></i>
                 <span style="margin-left:2px; font-size:0.5em;"><?php echo $likes; ?></span>
                <?php endif; ?>
            </div>

        </div>

        <!--        BLOG CONTENT-->
      
   <div class='read-blog-container'>
        <div id='body-container' > 
            <p class='body' id='body1'> 
               <?php $body = (nl2br($blog['body']));
                echo $body; //echo nl2br($body);  ?> 
                </p>
        </div>
                
                <h5 style="text-align:center; text-transform:uppercase; margin-bottom:20px; margin-top: 30px;">gallery</h5>
                
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" ride='true'>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <?php  $blogimg = $blog['main_image'];
                $img =  "<img class='d-block w-100' src='".$blogimg."'  alt='First slide' style='width:50%' alt='blog image1'/>"; 
                echo $img; ?>
    </div>
    <div class="carousel-item">
     <?php $blogimg = $blog['second_image'];
                $img = "<img class='d-block w-100' src='".$blogimg ."'alt='Second slide' style='width:50%' alt='blog image2'/>";
                echo $img;?>
    </div>
    <div class="carousel-item">
      <?php  $blogimg = $blog['third_image'];
            $img = "<img class='d-block w-100' src=$blogimg alt='Third slide' style='width:50%' alt='blog image1'/>";
            echo $img; ?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

       

 
       
            <?php foreach ($tag as $newtag): ?>
                
               <div class="tags"> 
                    <button class='tag-btn'><p class='tag'> <?php echo $newtag ?></p></button> 

    <?php endforeach; ?>

     </div>
                </div>

        <!--        MORE BLOGS-->
        
        <div class='more-blogs'>
            <h4 class='more-blogs-header' style="margin-bottom:45px;">blogs you might like:</h4>
        </div>
        <div class='container-fluid' style=''>
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
        <!--        COMMENTS-->

        <div style='margin-top: 40px;' class="comment-title"><h4> comments</h4> </div>
    <?php if (isset($_SESSION['loggedin'])): ?>

        <form method='POST' action="" enctype="multipart/form-data">
            <textarea style='width:700px; resize: none;' name='message' rows='4'></textarea><br>
            <input style='width:100px; height: 40px; background-color:#fca15f; border:none; font-weight: 400; border-radius: 8px; cursor: pointer;' type='submit' value='Comment' name='submit'>
        </form>
      
        
        <?php endif; ?>
        
        <?php if (!isset($_SESSION['loggedin'])): ?>

        <p style='text-align: center; color: #3F7CAC;'>Want to comment? Why not
            <a href='?controller=register&action=registerUser' style='text-decoration: none; 
                     text-transform:bold;'> sign up </a>and become a member or <a href='?controller=login&action=loginUser' 
                  style='text-decoration: none; text-transform:bold;'> log in</a></p>";
                  <?php endif; ?>



    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <!--<script type="text/javascript">
                    $(document).ready(function () {
                        $("#like-btn").click(function () {
                            $("#like-btn").css("color", "red");
                        });
                    });


    </script>-->
    <script scr='text/javascript'>

                        function myFunction(x) {
                            x.classList.toggle("fa-heart");
                            alert('You\'ve liked this blogpost!');
                        }
                        
                        function myFunction(x) {
                           
                            alert('Please login or register to like this post!');
                        }

//                        $(document).ready(function () {
//
//
//
//                            $('#comment_form').on('submit', function (event) {
//                                event.preventDefault();
//                                var form_data = $(this).serialize();
//                                $.ajax({
//                                    url: "?controller=comments&action=add&blog_id=<?= $blog['blog_id']; ?>",
//                                    method: 'POST',
//                                    data: form_data,
//                                    dataType: 'JSON',
//                                    success: function (data) {
//                                        if (data.error != '') {
//                                            $('#comment_form')[0].reset();
//                                            $('#comment_message').html(data.error);
//                                        }
//                                    }
//                                });
//                            });
//
//                            $('#comment_id').val('0');
//                            load_comment();
//
//    //                            function load_comment() {
//    //
//    //                                $.ajax({
//    //                                    url: "?controller=comments&action=post&blog_id=<?= $blog['blog_id']; ?>",
//    //                                    method: 'POST',
//    //                                    success: function (data) {
//    //                                        $('#display_comment').html(data);
//    //                                    }
//    //                                });
//    //                            }
//    //
//    //                            $(document).on('click', '.reply', function () {
//    //                                var comment_id = $(this).attr("id");
//    //                                $('#comment_id').val(comment_id);
//    //                                $('#comment_content').focus();
//    //                            });
//
//
//                        });



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


    i.fa{
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
        i.fa {
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


