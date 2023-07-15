<?php
include 'config.php';




    $req_id = $_GET['id'];


    $dl_query = "DELETE FROM wishlist where id = {$req_id}";
    mysqli_query($conn, $dl_query);


    header("Location: wishlisted.php");

    ?>