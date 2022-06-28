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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#food">Food And Snack</a>
                          <a class="dropdown-item" href="#coffe">Coffe Based Drink</a>
                          <a class="dropdown-item" href="#nocoffe">Non-Coffe Drink</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--BANNER-->
    <div class="container-fluid">
        <div class="banner">
            <div class="container text-center">
                <!--Pengaturan teks rata tengah-->
                <h4 class="display-1 font-weight-bold">HALO!</h4>
                <h3 class="display-3 font-weight-bolder">Selamat Datang di Website Nama Toko</h3>
                <br>
                <a href="#menu">
                    <button type="button" class="btn btn-danger btn-lg">
                        NEXT
                    </button>
                    <!--Tombol Next untuk lanjut ke bagian About-->
                </a>
            </div>
        </div>
        
    </div>

      <!--Menu-->
    <div class="container-fluid bg-light" id="menu">
        <br><br><br><br>
        <h5 class="text-center text-warning">ASSORTMENTS</h5>
        <h1 class="text-center text-bold" >BUKU MENU</h1>
        <div class="line bg-warning"></div>
        <p class="text-center text-secondary">
            Berbagai macam makanan dan minuman sebagai pendamping secangkir kopi kamu.
        </p>
        <br>
        <br>
    </div>

    <!--Food-->
    <div class="container" id="food">
        <br>
        <br>
        <h3 class="text-secondary text-bold" >FOOD AND SNACKS</h3>
        <div class="garis bg-warning"></div>
        <p>Coffee Shop juga menyediakan makanan baik makanan berat maupun snack</p>
        <a href="tambah1.php">
            <button type="button" class="btn-sm btn-warning">Tambah Menu</button>
        </a>
        <div class="row pt-4 gx-4 gy-4"> <!--mengatur baris pada layar-->
            <?php
                include "myconnection.php";

                $query = "SELECT id, nama, bahan, cara_pembuatan, foto, harga FROM food";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4"> <!--Menambahkan card dari bootsrap-->
                <div class="card crop-img">
                    <img src="image/menu/<?php echo $row["foto"]; ?>"
                    class="card-img-top"
                    width="200"
                    height="200"
                    /> <!--mengatur gambar-->
                    <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
                    <h5 class="card-title">Harga</h5>
                    <h5 class="card-title"><?php echo $row["harga"]; ?></h5>
                        <a href="detail1.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Detail</button> 
                        </a>
                        <a href="editForm1.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Edit</button> 
                        </a>
                        <a href="foto1.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Tambah Foto</button> 
                        </a>
                        <a href="delete1.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Delete</button> 
                        </a>
                    </div>
                </div>
            </div>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
    </div>

    <!--Drink-->
    <div class="container" id="coffe">
        <br>
        <br>
        <h3 class="text-secondary text-bold">COFFE-BASED DRINKS</h3>
        <div class="garis bg-warning"></div>
        <p>Coffee Toffee IDN adalah perusahaan kopi dengan pengalaman lebih dari 14 tahun, mengklaim bahwa salah satu keahlian kami adalah menciptakan varian minuman berbasis kopi. Terdapat banyak sekali varian minuman kopi untuk semua kalangan. Mulai dari Espresso dan Manual Brew untuk kamu pencinta kopi sejati, minuman klasik kopi seperti cappuccino, latte, machiato sampai minuman kopi modern seperti Frappe Blend dan Es Kopi Susu.</p>
        <a href="tambah2.php">
            <button class="btn-sm btn-warning" type="button">Tambah Menu</button>
        </a>
        <div class="row pt-4 gx-4 gy-4"> <!--mengatur baris pada layar-->
            <?php
                include "myconnection.php";

                $query = "SELECT id, nama, bahan, cara_pembuatan, foto, harga FROM drink WHERE kategori = 'coffe'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4"> <!--Menambahkan card dari bootsrap-->
                <div class="card crop-img">
                    <img src="image/menu/<?php echo $row["foto"]; ?>"
                    class="card-img-top"
                    width="200"
                    height="200"
                    /> <!--mengatur gambar-->
                    <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
                    <h5 class="card-title">Harga</h5>
                    <h5 class="card-title"><?php echo $row["harga"]; ?></h5>
                        <a href="detail2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Detail</button> 
                        </a>
                        <a href="editForm2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Edit</button> 
                        </a>
                        <a href="foto2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Tambah Foto</button> 
                        </a>
                        <a href="delete2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Delete</button> 
                        </a>
                    </div>
                </div>
            </div>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
    </div>

    <div class="container" id="nocoffe">
        <br>
        <br>
        <h3 class="text-secondary text-bold">NON-COFFE DRINKS</h3>
        <div class="garis bg-warning"></div>
        <p>
            Kemungkinan besar kamu akan datang ke Coffee Toffee bersama orang - orang terdekatmu,  apakah itu keluarga, anak, rekan kerja, atau teman komunitasmu. Dan kami menyadari bahwa sebagian dari mereka menginginkan adanya pilihan menu non-kopi. Oleh karena itu kami juga menyediakan berbagai macam non-coffee juga di gerai  kami.
        </p>
        <p>
            Minuman - minuman ini tetap diracik menggunakan bahan bahan baku terbaik Indonesia, mulai dari teh, coklat sampai sirup yang digunakan. Kami memberikan perhatian dan apresiasi khusus terhadap menu non-coffee kami ini, karena kami memahami bahwa minuman - minuman akan dinikmati oleh orang - orang terpenting dalam hidup kamu.
        </p>
        <a href="tambah2.php">
            <button class="btn-sm btn-warning" type="button">Tambah Menu</button>
        </a>
        <div class="row pt-4 gx-4 gy-4"> <!--mengatur baris pada layar-->
            <?php
                include "myconnection.php";

                $query = "SELECT id, nama, bahan, cara_pembuatan, foto, harga FROM drink WHERE kategori = 'no coffe'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4"> <!--Menambahkan card dari bootsrap-->
                <div class="card crop-img">
                    <img src="image/menu/<?php echo $row["foto"]; ?>"
                    class="card-img-top"
                    width="200"
                    height="200"
                    /> <!--mengatur gambar-->
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row["nama"]; ?></h5>
                        <h5 class="card-title">Harga</h5>
                        <h5 class="card-title"><?php echo $row["harga"]; ?></h5>
                        <a href="detail2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Detail</button> 
                        </a>
                        <a href="editForm2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Edit</button> 
                        </a>
                        <a href="foto2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Tambah Foto</button> 
                        </a>
                        <a href="delete2.php?id=<?php echo $row["id"]; ?>">
                            <button type="button" class="btn-sm btn-default">Delete</button> 
                        </a>
                    </div>
                </div>
            </div>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
            <br>
            <br>
        </div>
    </div>

    <!--Review-->
    <div class="container-fluid pt-5 pb-5 review" id="review"> <!--Mengatru padding-->
        <div class="container">
            <h5 class="text-center text-warning" >REVIEW AND FEEDBACK</h5>
            <h1 class="text-center text-default text-bold">REVIEW</h1>
            <div class="line bg-warning"></div>
            <p class="text-center">KAMI MENYEDIAKAN LAYANAN DAN KRITIK</p>
            <?php
                include "myconnection.php";

                $query = "SELECT nama, email, no_hp, media_sosial, deskripsi FROM saran";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <form>
                <div class="row pb-3"> <!--mengatur baris dengan padding botton-->
                    <div class="col-md-6"> <!--mengatur grid pada layar-->
                        <!--Menambahkan form kritik-->
                            <input class="form-control form-control-lg mb-1" 
                            name="nama" value="<?php echo $row["nama"]; ?>">
                            <input class="form-control form-control-lg mb-1" 
                            name="nama" value="<?php echo $row["email"]; ?>">
                            <input class="form-control form-control-lg mb-1" 
                            name="nama" value="<?php echo $row["no_hp"]; ?>">
                            <input class="form-control form-control-lg mb-1" 
                            name="nama" value="<?php echo $row["media_sosial"]; ?>">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-lg" 
                        rows="6" name="deskripsi"><?php echo $row["deskripsi"]; ?>
                        </textarea>
                    </div>
                </div>   
            </form>
            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
    </div>

    <!--Transaksi-->
    <div class="container-fluid pt-5 pb-5 bg-light" id="transaksi"> <!--Mengatru padding-->
        <div class="container">
            <h5 class="text-center text-warning" >OUR TRANSACTION</h5>
            <h1 class="text-center text-default text-bold">TRANSAKSI</h1>
            <div class="line bg-warning"></div>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM transaksi";
                $result = mysqli_query($connect, $query);
                $pendapatan = 0;

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
            ?>
            <table class="table table-borderless table-sm" >
                <tbody>
                    <tr>
                        <th scope="row">Nama Pemesan:</th>
                        <td><?php echo $row['nama']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">No Telepon:</th>
                        <td><?php echo $row['no_hp']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Menu Pesanan:</th>
                        <td><?php echo $row['menu']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Harga Menu</th>
                        <td><?php echo $row['harga']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Jumlah Pesanan:</th>
                        <td><?php echo $row['jumlah']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total Harga:</th>
                        <td><?php echo ($row['jumlah'] * $row['harga']); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ongkos Kirim</th>
                        <td><?php echo $row['ongkir']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Total Bayar</th>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="cetak.php?id=<?php echo $row["id"]; ?>">
                <button type="button" class="btn-sm btn-dark">Cetak</button>
            </a>
            <?php
                        $pendapatan += $row['total'];
                    }
                } else {
                    echo "0 results";
                }
            ?>
            <h2 class="text-danger text-bolt">Pendapatan Total: <?php echo $pendapatan; ?></h2>
        </div>
    </div>

    <!--Copy Right-->
    <div class="container text-center pt-5 pb-5">
        &copy; 2022. <b>Jaya Coffe</b> | All Right Reserved
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>