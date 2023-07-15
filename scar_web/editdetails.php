<?php
include 'header.php';
include 'config.php';





$id = $_GET['prop_id'];


if (isset($_POST['submit'])) {
    $name        = $_POST['name'];
    $price     = $_POST['price'];
    // $access      = $_POST['access'];
    $bspace       = $_POST['bspace'];
    $utility     = $_POST['utility'];
    $owner = $_POST['ownername'];
    $status      = $_POST['status'];
    $city        = $_POST['city'];
    $engine = $_POST['engine'];
    // $loclink = $_POST['loclink'];
    $seat = $_POST['seat'];

    $descrip     = mysqli_real_escape_string($conn, $_GET['descrip']);

    $query   = "UPDATE `cars` SET `name`='$name',`price`='$price',`city`='$city',`bspace`='$bspace',`seat`='$seat',`engine`='$engine',`ownername`='$owner',`utility`='$utility',`descrip`='$descrip',`status`='$status' WHERE id = '$id'";
    $insert  = $conn->query($query);
    $last_id = $conn->insert_id;

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/insertstyle.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="main-div">
      <center><h1 class="div-title">Edit Property</h1></center>
      <form action="" method="post" enctype="multipart/form-data">
        <input
          type="text"
          value = "<?php echo $_GET['c_name']; ?>"
          name="name"
          class="form-input"
          placeholder="Car Company - Car Name"
          required
        />

        <input
          type="number"
          name="price"
          value = "<?php echo $_GET['c_price']; ?>"
          class="form-input"
          placeholder="Price"
          required
        />


        <input
          type="text"
          name="ownername"
          value = "<?php echo $_GET['c_owner']; ?>"
          class="form-input"
          placeholder="Owner name"
          required
        />

        <select     class="form-input" name="city" id=""  required>
        <option selected value = "<?php echo $_GET['c_city']; ?>"><?php echo $_GET['c_city']; ?></option>

          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Surat">Surat</option>

          <option value="Rajkot">Rajkot</option>
          <option value="Vadodara">Vadodara</option>
          <option value="Bhavnagar">Bhavnagar</option>
          <option value="Jamnagar">Jamnagar</option>
          <option value="Navsari">Navsari</option>
        </select>

    

        <!-- <textarea
          class="form-input"
          name="address"
          rows="3"
          id="textArea"
          placeholder="Full Address"
          required
        ></textarea> -->


        <!-- <input
        type="text"
          class="form-input"
          name="loclink"
   
          placeholder="Location link"
          required
        /> -->
          
        <!-- <input
          type="text"
          name="access"
          class="form-input"
          placeholder="Access"
          required
        /> -->

        <input
          type="number"
          name="bspace"
         value = "<?php echo $_GET['c_bspace']; ?>"
          class="form-input"
          placeholder="Boot Space"
          required
        />

        <input
          type="text"
          name="utility"
         value = "<?php echo $_GET['c_utility']; ?>"
          class="form-input"
          placeholder="Utility"
          required
        />


        <input
          type="text"
          name="engine"
          value = "<?php echo $_GET['c_engine']; ?>"
          class="form-input"
          placeholder="Engine"
          required
        />
        
        <select class="form-input" name="seat" id="" required>
        <option selected value = "<?php echo $_GET['c_seat']; ?>"><?php echo $_GET['c_seat']; ?></option>
          <option value="4">7 Seater</option>
          <option value="3">6 Seater</option>
          <option value="3">5 Seater</option>
          <option value="2">4 Seater</option>
          <option value="1">2 Seater</option>
        </select>



        <textarea
          class="form-input"
          name="descrip"
          rows="3"
          <?php echo $_GET['c_descrip']; ?>
          id="textArea"          
          placeholder="<?php echo $_GET['c_descrip']; ?>"
        ></textarea>

        <select class="form-input" name="status" id="" required>
        <option selected value = "<?php echo $_GET['c_status']; ?>"><?php echo $_GET['c_status']; ?></option>
          <option value="automatic">Automatic</option>
          <option value="manual">Manual</option>
        </select>

       
        <br>

        <br>

        <button type="submit" name="submit" class="submit-btn">
          Submit
        </button>
      </form>
    </div>
  </body>
</html>