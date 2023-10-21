<?php
include('connect.php');

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

    </style>

    <title>Hello, world!</title>
</head>

<body>

    <?php

    $ID = $_GET['id'];

    $sql = "SELECT `id`, `name`, `price`, `image` FROM `img` WHERE id=$ID";

    $sql_run = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($sql_run);





    ?>




    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Update data in php</h1>

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $data['name']; ?>"
                            placeholder="enter name">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" value="<?= $data['price']; ?>"
                            placeholder="enter price">
                    </div>
                    <div class="mb-3">

                        <td></td><input type="file" name="image" value="<?= $data['image']; ?>"><img
                            src="<?= $data['image']; ?>" width="200px" height="200px" alt=""></td>
                    </div>

                    <input type="hidden" name="edit_id" value="<?= $data['id'] ?>">
                    <button class="btn btn-danger centered" name="update_btn">update</button>


                </form>

            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>