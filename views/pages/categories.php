<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Screw it Blog</title>
    </head>
    <body>
    <center>
        <?php

        // CATEGORY SEARCH
        
        if (!empty($category)){ 
        echo $header."<br>";
        $url = "<img src='views/images/HP_images/$category.png'>";        
        echo $url;
        
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
        
        
        ?>
        
    </center>    
    </body>
</html>