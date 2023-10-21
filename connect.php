<?php


$host = "localhost";
$username = "root";
$password = "laravel";
$database_name = "crud";

$conn = mysqli_connect($host, $username, $password, $database_name);

if (!$conn) {

    die("Connnection Failed: " . mysqli_connect_error());
}
// else{
//     echo"connection successfully";
// }


// code for insert into database

if (isset($_POST['upload_btn'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $image_des = "uploadimage/" . $img_name;


    move_uploaded_file($tmp_name, 'uploadimage/' . $img_name);


    //  print_r($_FILES['image']);

    $sql = "insert into img (name,price,image) values('$name','$price','$image_des')";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {

        echo "Data inserted successfully";
        header('Location: fetch_data.php');

    } else {
        echo "Data not inserted";
        header('Location: index.php');
    }





}


// code for UPDATE data 

if (isset($_POST['update_btn'])) {

    $update_id = $_POST['edit_id'];

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $image_des = "uploadimage/" . $img_name;


    move_uploaded_file($img_loc, 'uploadimage/' . $img_name);


 
    $update_data = "UPDATE `img` SET `name`='$name',`price`='$price',`image`='$image_des' WHERE id='$update_id'";

    $update_data_run = mysqli_query($conn,$update_data);


    if($update_data_run){
        echo "data updated successfully";
        header('Location: fetch_data.php');
    }
    else{
        echo "data not updated ";
        header('Location: fetch_data.php');

    }


}


?>