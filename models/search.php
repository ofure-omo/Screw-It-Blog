<?php

/* class Search extends DB {
    
    protected function getSearch($userSearch){
        $sql = "SELECT * FROM Blog_posts WHERE title LIKE '%?%";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userSearch]);
        
        $results = $stmt->fetchAll();
        return $results;
                
    }
 */

Class Search {
   
   
   public function find($search) {
    
    $db = Db::getInstance();
   
       
    if (isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($db, $_POST['search']);
        $sql = "SELECT * FROM blog_posts WHERE title LIKE '%$search%' OR body LIKE '%$search%'";
        $result = mysqli_query($db, $sql);
            $queryResults = mysqli_num_rows($result);
            
               
if($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo "<a href='article.php?title=".$row['title']."&date=".$row['date_posted']."'><div class='article-box'>
            <h3>".$row['title']."</h3>
                <p>".$row['body']."</p>
                    <p>".$row['date_posted']."</p>"
                . "<div></a>";
    }
    }else {
        echo "There are no results matching your search";
    }
    }
    }

    public function runSearch($searchterm) {
      $db = Screw_it::getInstance();

      $stmt = $db->prepare("SELECT * FROM blog_posts WHERE title LIKE ?");
      $stmt->execute(["%" . $_POST['search'] . "%"]);

       foreach($results->fetch(PDO::FETCH_ASSOC) as $blogpost) {
        $list[] = new Blog($blogpost['title'], $blogpost['body'], $blogpost['category']);
      }
      return $list;
      
    }
}

/*
      
      if($queryResults > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
       echo "<div>
        <h3>".$row['a_title']."</h3>
       <p>".$row['a_date_posted']."</p>
   <div>";
       
   }
    }}
    
// model always has protected functions that just do the database functions
// the functions are only referred to by the controller and view
// each query should be in a different method

            
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM product');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $product) {
        $list[] = new Product($product['id'], $product['name'], $product['price']);
      }
      return $list;
    }
}*/