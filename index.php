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




    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>image crud in php</h1>

                <form action="connect.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="enter name">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="enter price">
                    </div>
                    <div class="mb-3">

                        <input type="file" name="image" placeholder="enter image">
                    </div>


                    <button class="btn btn-danger centered" name="upload_btn">Upload</button>


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