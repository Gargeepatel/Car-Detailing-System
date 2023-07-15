<?php 

session_start();



include 'header.php';
include 'config.php';





$query="SELECT * FROM cars"  ;




$read=$conn->query($query); 



?>

      
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SCAR | Cars</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/cart.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Top Cars</h3>
</div>

<!-- shopping cart section starts  -->

<section class="products">


   <div class="box-container">

      <?php
      
         $grand_total = 0;
         $query="SELECT * FROM `cars`"  ;




         $read=$conn->query($query); 
         
         if(mysqli_num_rows($read) > 0){
            while($data = $read->fetch_assoc()){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="cart_id" value="<?= $fetch_cart['id']; ?>">
         <img src="uploads/<?= $data['images']; ?>" alt="">
            <div class="name"><?= $data['name']; ?></div></a>
            <div class="name" style="font-size: 1.6rem; opacity: 70%;">Engine: <?= $data['engine']; ?></div>
         <div class="flex">
            <div class="price"><span>₹</span><?= $data['price']; ?></div>
<a href="addtowishlist.php?cid=<?php echo $data['id']?>&cname=<?php echo $data['name']?>&cimage=<?php echo $data['images']?>&cprice=<?php echo $data['price']?>"><i class="bi bi-bookmark-heart-fill fa-3x"></i></a>
            <a href="aboutcar.php?posts=<?php echo $data['id']?>" class="visit-car-btn">Quick View Car <i class="bi bi-arrow-up-right"></i></a>
         </div>
      </form>
      <?php
            }
         }
      ?>

   </div>



</section>

<!-- shopping cart section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

    
  </body>
</html>
<!-- 
<div class="main-div">
  <a href="single.php?posts=<?php echo  $row['id'];  ?>"><div class="card-div">
    <h1><?php echo  $row['name'];   ?></h1>

    <h2><?php echo  $row['monthly'];   ?></h2>

    <h2><?php echo  $row['address'];   ?></h2>
    <img src="uploads/<?php echo  $row['images']; ?>" class="upld_img" />
    <br />
    <a href="single.php?posts=<?php echo  $row['id'];  ?>">Details</a>
  </div>
</div>
</a>
