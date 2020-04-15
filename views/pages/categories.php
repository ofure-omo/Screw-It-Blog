<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Screw it Blog</title>
    </head>
    <body>
    <center>
        <h6 style=""><?php echo "<br><br>".$url."<br><br>"; ?></h6>
        
        <p style="<?php echo $styl ?>"><?php echo $header;?></p>
        
        <p><br><?php echo $results;?></p>
        
       
    <!-- CARDS ------------------------------------------------------------------->    
        
        
    <div class='container-fluid' style=''>
        <div class="row">
            
            <div class="row row-cols-1 row-cols-md-5" style="padding-left:2rem; padding-right:2rem;"> <!-- shows 5 cards per 1 row -->
        
        <!-- CARD -->
        
        <?php
    

                for($i = 1; $i <= $countBlogs[0]; $i++) {
        
                    echo "<div class='col mb-4'>";
                    echo    "<div class='card h-100' style=''>";
                    echo        "<a href='?controller=blog&action=read&blog_id=".${"blog$i"}->blog_id."class='btn btn-primary'><img style='padding-top: 5%; ; height: 250px; width:300px; object-fit: cover;' class='card-img-top' src=".${"blog$i"}->main_image." alt=".${"blog$i"}->title.">";
                    echo        "</a>";
                    echo            "<div class='card-body'>";
                    echo                "<h5 class='card-title'>".${"blog$i"}->titleShort."</h5>";
                    echo                "<p class='card-text'>".${"blog$i"}->bodyShort."</p>";
                    echo                "<a href='?controller=blog&action=read&blog_id=".${"blog$i"}->blog_id."class=''>View blog</a>";
                    echo            "</div>";
                    echo            "<div class='card-footer'>";
                    echo                "<p class='text-muted'>";
                                         $d = strtotime(${"blog$i"}->date_posted);
                    echo                "Posted on " . date("jS F Y", $d) . "<br></p>";
                    echo            "</div>";
                    echo        "</div>";
                    echo "</div>";
                    
                }
                
                ?>
        
        <!-- end of card -->
            
        </div>
        </div>
                                       
                

    </div>    
        
        
        
        
        
    
        
    </center>    
    </body>
</html>