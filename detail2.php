<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body id="page-top">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Jaya Coffe</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#page-top">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#food">Food And Snack</a>
                          <a class="dropdown-item" href="#coffe">Coffe Based Drink</a>
                          <a class="dropdown-item" href="#nocoffe">Non-Coffe Drink</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="homeCRUD.html">Review</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminCRUD.php">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Kembali</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container ">
        <div class="container-fluid">
        <br><br><br><br>
            <div class="row">
                <div class="col-sm-4 bg-light">
                </div>
                <div class="col-sm-4">
                    <?php
                        include "myconnection.php";

                        $id = $_GET["id"];
                        $query = "SELECT id, nama, kategori, bahan, cara_pembuatan, foto, harga FROM drink WHERE id='$id'";
                        $result = mysqli_query($connect, $query);
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="card" style="width: 18rem;">
                        <img src="image/menu/<?php echo $row["foto"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $row["nama"]; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center"><?php echo $row["kategori"]; ?></li>
                            <li class="list-group-item"><?php echo $row["bahan"]; ?></li>
                            <li class="list-group-item"><?php echo $row["cara_pembuatan"]; ?></li>
                        </ul>
                        <div class="card-footer">
                            <h5 class="card-title text-center"><?php echo $row["harga"]; ?></h5>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-sm-4 bg-light">
                </div>
            </div>
        </div>
    </div>

    <!--Copy Right-->
    <div class="container text-center pt-5 pb-5">
        &copy; 2021. <b>Nama Coffe Shop</b> | All Right Reserved
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>