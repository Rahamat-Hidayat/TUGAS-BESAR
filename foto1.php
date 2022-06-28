<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!--CSS-->
        <link rel="stylesheet" href="styleFoto.css">
    </head>
    <body>
        <?php
            if(isset($_GET["error"])) {
                $error = $_GET["error"];
            } else {
                $error = "";
            }

            $massage = "";
            if($error == "gagal") {
                $massage = "Gagal tambah menu, silahkan coba kembali";
            }

            include "myconnection.php";
            $id = $_GET["id"];
            $query = "SELECT * FROM food WHERE id='$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <p style="color: red;"><?php echo $massage; ?></p>
        <div class="container-fluid">
            <div class="card login-form">
                <div class="card-body">
                    <h1 class="card-title text-center">TAMBAH</h1>
                    <h1 class="card-title text-center">FOTO</h1>
                </div>
                <div class="card-text">
                    <form enctype="multipart/form-data" action="fotoProses1.php" method="POST">
                    <?php
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Menu</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Foto Menu</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                    <?php
                        }
                    ?>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>