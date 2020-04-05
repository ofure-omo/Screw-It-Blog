<?php

Class Search {
   
  
    public function find($search) {
      $db = Screw_it::getInstance();
      
      $query = "SELECT * FROM blog_posts WHERE title LIKE ?";
      $stmt = $db->prepare($query);
      
     $searchterm = "%" . $_POST['search'] . "%";
      $stmt->bindParam(1,$searchterm,PDO::PARAM_STR);
      $results = $stmt->execute();
     
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $data;
   
    }
}
