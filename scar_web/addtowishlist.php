<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

include 'config.php';


$user_id = $_SESSION['user_id'];
      $pid = $_GET['cid'];
      $pid = filter_var($pid, FILTER_SANITIZE_STRING);
      $name = $_GET['cname'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $price = $_GET['cprice'];
      $price = filter_var($price, FILTER_SANITIZE_STRING);
      $image = $_GET['cimage'];
      $image = filter_var($image, FILTER_SANITIZE_STRING);

   

  
   
      $query = "SELECT * FROM `wishlist` where id = $user_id";

      




      $read=$conn->query($query); 

      if(mysqli_num_rows($read) > 0){
         $message[] = 'already added to cart!';
      }else{
        $insert_cart = $conn->prepare("INSERT INTO `wishlist`(user_id, car_id, name, price, image) VALUES(?,?,?,?,?)");
        $insert_cart->execute([$user_id, $pid, $name, $price, $image]);

         $message[] = 'wishlisted!';
         
      }
      header("Location: wishlisted.php");
   
   
      
   

   
 

?>