<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!--CSS-->
        <link rel="stylesheet" href="styleBeli.css">
    </head>
    <body>
        <?php
            if(isset($_GET["error"])) {
                $error = $_GET["error"];
            } else {
                $error = "";
            }

            $pesan="";
            if($error=="variabel_belum_diset") {
                $pesan="Anda harus mengakses halaman ini";
            } else if($error=="nama_kosong") {
                $pesan="Nama harus diisi";
            } else if($error=="nohp_kosong") {
                $pesan="No HP harus diisi";
            } else if($error=="pesanan_kosong") {
                $pesan="Menu Pesanan harus diisi";
            } else if($error=="jumlah_kosong") {
                $pesan="Jumlah harus diisi";
            } else if($error=="order_kosong") {
                $pesan="Order Pesanan harus diisi";
            }

            include "myconnection.php";

            $query1 = "SELECT nama FROM food";
            $result1 = mysqli_query($connect, $query1);

            $query2 = "SELECT nama FROM drink";
            $result2 = mysqli_query($connect, $query2);
        ?>
        <p style="color: red;"><?php echo $pesan; ?></p>
        <div class="container-fluid">
            <div class="card login-form">
                <div class="card-body">
                    <h1 class="card-title text-center">T R A N S A K S I</h1>
                </div>
                <div class="card-text">
                    <form enctype="multipart/form-data" action="beliProses.php" method="GET">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemesan</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. HP Pemesan</label>
                        <input type="text" class="form-control" name="noHP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Order Pemesan</label>
                        <select class="form-control" name="order">
                            <option>Choose..</option>
                            <option>Dine In</option>
                            <option>Delivery Order</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kota/Kabupaten(for DO)</label>
                        <input type="text" class="form-control" name="daerah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat(for DO)</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Menu Pesanan</label>
                        <select class="form-control" name="pesanan">
                            <option>Choose..</option>
                            <?php
                                while($row=mysqli_fetch_array($result1)) {
                            ?>
                            <option><?php echo $row['nama'];?></option>
                            <?php
                                }
                            ?>
                            <?php
                                while($row=mysqli_fetch_array($result2)) {
                            ?>
                            <option><?php echo $row['nama'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Pesanan</label>
                        <input type="text" class="form-control" name="jumlah">
                    </div>
                    <button type="submit" class="btn btn-dark">Beli</button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>