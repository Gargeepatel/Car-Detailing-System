<?php include 'header.php'; ?>

<?php

// session_start();

include 'config.php';

 if(isset($_GET['posts'])){
$id=$_GET['posts']; 
$query2= "SELECT * FROM cars where id='$id'";
$readd=$conn->query($query2); } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About car</title>
    <link rel="stylesheet" href="css/productstyle.css" />
  </head>
  <body>

    <?php while ($data= $readd->fetch_assoc()) { ?>
    <div class="main-div">
      <div class="left-div">
      <h1 class="prpt-name"><?php echo  $data['name'];   ?></h1>

        <img src="uploads/<?php echo  $data['images']; ?>" class="upld_img" />
      </div>
      <div class="right-div">
        <h1 class="prpt-price">
          Price<br />
          <span>₹<?php echo  $data['price'];   ?></span>
        </h1>

        <h1 class="prpt-price">
          Transmission<br />
          <span><?php echo  $data['status'];   ?></span>
        </h1>

        <h1 class="prpt-price">
          Location<br />
          <span><?php echo  $data['city'];   ?></span>
        </h1>

        <!-- <a href="requestproperty.php"><button class="contact-btn">CONTACT OWNER</button></a> -->
      </div>
    </div>

    <div class="cent-div">
      <!-- <h1 style="color: rgb(225, 223, 223)"></h1> -->
      <h1 class="prpt-price with-bg">
      Description:<br />
        <span><?php echo $data['descrip'];  ?></span>
      </h1>
      
      <!-- <p class="content-desc"></p> -->


      <div class="images">
        <h1 style="color: rgb(225, 223, 223); margin-top: 4rem">Images:</h1>
        <br />

        <?php  $image_name="SELECT * FROM cars as p join details as d 
      on p.id =d.proid where d.proid =".$data['id'];
     $_SESSION['prop_id'] = $data['id'];
      $read1=$conn->query($image_name); foreach ($read1 as $value) { ?>

        <div class="image">
          <img src="uploads/<?php echo $value['images']; ?>" />
        </div>

        <?php  } ?>
      </div>
      <h1 class="prpt-price with-bg">
        Boot Space Area<br />
        <span><?php echo  $data['bspace'];   ?></span>
      </h1>
      <h1 class="prpt-price with-bg">
        Utility<br />
        <span><?php echo  $data['utility'];   ?></span>
      </h1>

      <h1 class="prpt-price with-bg">
        Type<br />
        <span><?php echo  $data['seat'];   ?> Seater</span>
      </h1>

      <h1 class="prpt-price with-bg">
        Service Cost<br />
        <span>₹<?php echo  $data['s_cost'];   ?> </span>
      </h1>

      <h1 class="prpt-price with-bg">
      Maintanance Cost<br />
        <span>₹<?php echo  $data['m_cost'];   ?> </span>
      </h1>

      
      <h1 class="prpt-price with-bg">
        Owner<br />
        <span><?php echo  $data['ownername'];   ?> </span>
      </h1>

      <div class="map-div" style="margin-bottom: 2rem; overflow: hidden;">
        <h1 style="color: #fff; padding: 1rem;">Location 1</h1>
        <iframe
          src="<?php echo  $data['loclink1'];  ?>"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

      
      <div class="map-div" style="margin-bottom: 2rem; overflow: hidden;">
        <h1 style="color: #fff; padding: 1rem;">Location 2</h1>
        <iframe
          src="<?php echo  $data['loclink2'];  ?>"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

    </div>
    <?php   } ?>
  </body>
</html>

<!-- 
<?php while ($data= $readd->fetch_assoc()) { ?>

<tr>
  <td> <?php echo $data['address'];  ?></td>
  <td><?php echo $data['access'];  ?></td>
  <td><?php echo $data['bspace'];  ?></td>
  <td><?php echo $data['utility'];  ?></td>
  <td><?php echo $data['descrip'];  ?></td>
  <td class="rooms">

      <?php  $image_name="SELECT * FROM properties as p join details as d 
            on p.id =d.proid where d.proid =".$data['id'];
            $read1=$conn->query($image_name);

            foreach ($read1 as $value) { ?>

              <img src="uploads/<?php echo $value['images']; ?>" />
              
            <?php  } ?>
            </td>
</tr>
<?php   } ?> -->
