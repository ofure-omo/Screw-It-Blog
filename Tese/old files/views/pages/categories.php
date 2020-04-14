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
   
    <?php
    
    if (empty($category)){
        echo "to be continued";
    }
    else {
               
        // Row 1
            echo "<div class='card-deck' style=' padding-left: 2%; max-height: 250px; display:flex;'>";
                for($i = 1; $i <= $countBlogs; $i++) {
        
                echo "<div style ='flex: initial; flex-direction:column; flex-wrap: wrap; width: 18%; min-width:30px; margin-bottom:30px;' class='card'>";
                    
                        echo "<a href='?controller=blog&action=read&blog_id=".${"blog$i"}->blog_id."class='btn btn-primary'><img style='padding-top: 5%; ; height: 250px; width:300px; object-fit: cover;' class='card-img-top' src=".${"blog$i"}->main_image." alt=".${"blog$i"}->title.">";
                        echo "</a>"; 
                            echo "<div class='card-body' style='padding-bottom: 15%; max-height: 300px'>";
                                echo "<h5 class='card-title'>".${"blog$i"}->title."</h5>";
                                echo "<p class='card-text'>".${"blog$i"}->bodyShort."</p>";
                                echo "<div style='align-self:flex-end;'>";
                                echo "<a href='?controller=blog&action=read&blog_id=".${"blog$i"}->blog_id."class='btn btn-primary'>View blog</a>";
                                echo "</div>";
                            echo "</div>";
                            
                            echo "<div class='card-footer'";
                                echo "<p class='text-muted'>";
                                    $d = strtotime(${"blog$i"}->date_posted);
                                    echo "Posted on " . date("jS F Y", $d) . "<br></p>";
                            echo "</div>";  
                           
                echo "</div>";
                                       
                }
            echo "</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; 
          
            
           

    
    }
    

    
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <?php  // CATEGORY SEARCH
        
        
        /*
         if (!empty($category)){ 
            echo "<br><br>";
            $url = "<img src='views/images/HP_images/$category.png' style='width:300px'>";        
            echo $url."<br>";
            echo $header."<br>";
            echo $results;
        
        }
        
        // VIEW ALL
        else {
            
        // test - OOP
        echo $header."<br>";
        
        echo "OOP RESULTS <br>";
        echo "Title: ".$blog1->title."<br>";
        echo "Text: ".$blog1->body."<br><br>";
        
        echo "Title: ".$blog2->title."<br>";
        echo "Text: ".$blog2->body."<br><br>";
        
        // test - array
        echo "ARRAY RESULTS <br>";
                
        // test - echo all array
        foreach($title as $result) {
            echo $result, '<br>';
        }
        }
        
        */
        ?>
    
        
    </center>    
    </body>
</html>