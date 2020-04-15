<head>

</head>


<body>
    
<!-- HEADER DETAILS -->

    <br>
    <div class="container-fluid">
        <div class="row">
            
            
            <div class="dropdown" style="padding-left:2rem;">
                <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Useful Links
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="https://analytics.google.com/analytics/web/#/">Google Analytics</a>
                  <a class="dropdown-item" href="https://www.insightdiy.co.uk/news-uk.htm">DIY News</a>
                  <a class="dropdown-item" href="https://www.diy.com/">B&Q</a>
                  <a class="dropdown-item" href="https://cat-bounce.com/">Click for cats</a>
                </div>
            </div>
            
            <!-- TODAY'S DATE --> 
            <p><i class="fa fa-calendar" style="font-size: 1rem; padding-top:0.6rem; padding-left:2rem;"></i>    
                <?php
                echo date("jS F Y");
                ?>
            </p>
            
        </div>
    </div>
    
    
    <!-- PROFILE -->    
    <center>
    <div class="container" style="max-width:28rem;">
        <div class="col" style="">
            <div class="row" style="">
            <div class="col" style="">        
            <?php
                    // PROFILE PIC
        
                        if (!empty($details['user_id'])){
                            $imageSrc = $details['user_id'];
                            echo "<img src='views/images/jasper.jpg' style='height: 7rem; width: 7rem; object-fit: cover; margin-top: 0.1rem; border-radius: 50%;'>";
                        } else {
                            $imageSrc = $details['user_id'];
                        }
        
                ?> 
            </div>
            
            <div class="col" style="">
                <div class="row" style="justify-content: center; padding-top:1.1rem;">
                    
                    <!-- MEMBER SINCE... --->
                   <h1><b><span style="color: #FCA15F;"><?= $details['username'] ?></span></b></h1> 
                   
                </div>
                <div class="row" style="justify-content: center; text-align-last: center">
                    <p style="font-size: 12px;">Moderator since
                        <?php
                        $d = strtotime($details['date_joined']);
                        echo date("jS F Y", $d);
                        ?>
                    </p>
                </div>
            </div>
                
                
            </div>
        </div>
    </div>
    
    <div class="container"><br></div>

    <!-- BIO / EDIT BIO -->
        <p style="font-size: 14px; margin-left:30%; margin-right:30%;">
            <?php 
            if (!empty($details['bio'])) {
                echo $details['bio'];
            } else {
                echo "add a bio? <i class='fa fa-edit' style='font-size:14px'></i></i>";
            }
            ?>

            <br><br><br>
            
<!-- SCREW-IT STATS ------------------------------------------------------------------->            
        
        <div class="container">
            <h6 style="background-color: #fafafa; padding: 0.5rem;"><b>Screw-It:</b>  website performance</h6>
            <div class="row row-cols-3">
                <div class="col"><i class='fas fa-pencil-alt'></i> Total Blogs</div>
                <div class="col"><i class='fas fa-user-circle'></i> Total users</div>
                <div class="col"><i class='fas fa-users'></i> Total Bloggers</div>
                
                <div class="col" style="background-color: greenyellow;"><?php echo $blogsCount[0]['count'] ?></div>
                <div class="col" style="background-color: greenyellow;"><?php echo $memCount[0]['count'] ?></div>
                <div class="col">4</div>
                
                <div class="col" style="">new</div>
                <div class="col">new</div>
                <div class="col">new</div>
                
                
                <div class="col"><i class='far fa-heart'></i> Total Likes</div>
                <div class="col"><i class='far fa-comment-dots'></i> Total Comments</div>
                <div class="col"><i class='far fa-comments'></i> Total replies</div>
                <div class="col">4</div>
                <div class="col" style="background-color: greenyellow;"><?php echo $commsCount[0]['count'] ?></div>
                <div class="col">4</div>
            </div>
        </div>
        <br><br><br>
        
        <!-- ADMIN -->
        
        <div class="container">
            <h6 style="background-color: #fafafa; padding: 0.5rem;"><b>Screw-It:</b>  admin</h6>
            <div class="row row-cols-1">
                
                <div class="col"><i class='fas fa-user-plus'></i> Create blogger</div>
                
                <div class="col"><i class='fas fa-comment-slash'></i> Review Comments</div>
                
                <div class="col"><i class='fas fa-user-slash'></i> Remove User</div>
                
                <div class="col"><i class='fas fa-lock'></i> Lock Account</div>

            </div>
        </div>
            
            
            
            
            
<!-- ------------------------------------------------------------------------------------------------>  


<h6>Admin</h6>
<div>
    <div><i class='fas fa-user-plus'></i> <?php echo "Create new blogger" ?>   </div>
    <div><i class='fas fa-comment-slash'></i> <?php echo "Review Comments" ?>   </div>
    <div><i class='fas fa-user-slash'></i> <?php echo "Remove User" ?>   </div>
    <div><i class='fas fa-lock'></i> <?php echo "Lock account" ?>   </div>

</div>

        
<h6>Review latest comments</h6>

<?php 

foreach ($comms as $comment){
    
                echo "<div>";
                    echo "<div>";
                        $d = strtotime($comment['date_posted']);
                        echo date("jS F Y", $d);
                    echo "</div>";
                    echo "<div>";    
                        echo $comment['user_id'];
                    echo "</div>";
                    echo "<div>";        
                        echo $comment['title'];
                    echo "</div>";
                    echo "<div>";    
                        echo $comment['user_id'];
                    echo "</div>";
                    echo "<div>";        
                        echo $comment['comment'];
                    echo "</div>";
                    echo "<div>";    
                        $len = 40;
                        if (strlen($comment['body'])<$len) {
                            $bodyShort = $comment['body'];
                            }
                        else {
                            $bodyShort = substr($comment['body'],0,$len); 
                        }
                echo "</div>";
                
    }

?>
        
        
</center>    
</body>

