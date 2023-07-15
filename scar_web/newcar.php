<?php
include 'header.php';
include 'config.php';

if (!isset($_SESSION['ownername'])) {
  header("Location: ownerlogin.php");
}

?>
<?php


if (isset($_POST['submit'])) {
    $name        = $_POST['name'];
    $price     = $_POST['price'];
    $scost     = $_POST['scost'];
    $mcost     = $_POST['mcost'];
    $loclink1     = $_POST['loclink1'];
    $loclink2     = $_POST['loclink2'];

    // $access      = $_POST['access'];
    $bspace       = $_POST['bspace'];
    $utility     = $_POST['utility'];
    $owner = $_POST['ownername'];
    $status      = $_POST['status'];
    $city        = $_POST['city'];
    $engine = $_POST['engine'];
    $seat = $_POST['seat'];

    $descrip     = mysqli_real_escape_string($conn, $_POST['descrip']);
    $target_dir  = "uploads/";
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    $temp_file   = $_FILES["images"]["name"];
    move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);
    $query   = "INSERT INTO cars (name,price,s_cost,m_cost,city,bspace,seat,engine,ownername,utility,descrip,status,loclink1,loclink2,images) VALUES ('$name','$price','$scost','$mcost','$city','$bspace','$seat','$engine','$owner','$utility','$descrip','$status','$loclink1','$loclink2','$temp_file')";
    $insert  = $conn->query($query);
    $last_id = $conn->insert_id;
    $c       = count($_FILES['img']['name']);
    if ($insert) {
        if ($c <= 7) {
            for ($i = 0; $i < $c; $i++) {
                $img_name = $_FILES['img']['name'][$i];
                move_uploaded_file($_FILES['img']['tmp_name'][$i], "uploads/" . $img_name);
                $query_multi = "INSERT INTO details(images,proid) VALUES
                                ('$img_name','$last_id')";
                $ins         = $conn->query($query_multi);
            }
        } else {
            echo "MAX LIMIT EXCEED";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/insertstyle.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="main-div">
      <center><h1 class="div-title">Add new Car</h1></center>
      <form action="" method="post" enctype="multipart/form-data">
        <input
          type="text"
          name="name"
          class="form-input"
          placeholder="Car Company - Car Name"
          required
        />

        <input
          type="number"
          name="price"
          class="form-input"
          placeholder="Price"
          required
        />

        <input
          type="number"
          name="scost"
          class="form-input"
          placeholder="Service Cost"
          required
        />

        <input
          type="number"
          name="mcost"
          class="form-input"
          placeholder="Maintanance Cost"
          required
        />


        <input
          type="text"
          name="ownername"
          class="form-input"
          placeholder="Owner name"
          required
        />

        <select     class="form-input" name="city" id="" required>
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Surat">Surat</option>

          <option value="Rajkot">Rajkot</option>
          <option value="Vadodara">Vadodara</option>
          <option value="Bhavnagar">Bhavnagar</option>
          <option value="Jamnagar">Jamnagar</option>
          <option value="Navsari">Navsari</option>
        </select>

        <input
        type="text"
          class="form-input"
          name="loclink1"
   
          placeholder="Location link 1"
          required
        />

        <input
        type="text"
          class="form-input"
          name="loclink2"
   
          placeholder="Location link 2"
          required
        />

    

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
          class="form-input"
          placeholder="Boot Space"
          required
        />

        <input
          type="text"
          name="utility"
          class="form-input"
          placeholder="Utility"
          required
        />


        <input
          type="text"
          name="engine"
          class="form-input"
          placeholder="Engine"
          required
        />
        
        <select class="form-input" name="seat" id="" required>
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
          id="textArea"          
          placeholder="Description"
        ></textarea>

        <select class="form-input" name="status" id="" required>
          <option value="automatic">Automatic</option>
          <option value="manual">Manual</option>
        </select>

        <label class="label">
        <input class="input-image" type="file" name="images" required />
        <span>Main image</span>
        </label>

        <br><br>

        <label class="label">
        <input class="input-image" type="file" name="img[]" multiple required />
        <span>Extra IMage</span>
        </label>
        <br>

        <br>

        <button type="submit" name="submit" class="submit-btn">
          Submit
        </button>
      </form>
    </div>
  </body>
</html>