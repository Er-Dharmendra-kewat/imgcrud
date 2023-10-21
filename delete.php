<?php

include'connect.php';

// error_reporting(0);



$ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM `img` WHERE id=$ID");


header('Location: fetch_data.php');


?>