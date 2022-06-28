<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <!--CSS-->
        <link rel="stylesheet" href="styleStruk.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <?php
                    if(isset($_GET['nama']) AND isset($_GET['noHP']) AND isset($_GET['pesanan']) 
                    AND isset($_GET['jumlah']) AND isset($_GET['order'])) {
                        $nama = $_GET['nama'];
                        $no = $_GET['noHP'];
                        $menu = $_GET['pesanan'];
                        $jumlah = $_GET['jumlah'];
                        $status = $_GET['order'];
                        $daerah = $_GET['daerah'];
                        $alamat = $_GET['alamat'];

                    } else {
                        header("Location:beliForm.php?error=variabel_belum_diset");
                    }

                    include "myconnection.php";

                    $harga = 0;
                    $total = 0;
                    $ongkir = 0;
                    $bayar = 0;

                    $query1 = "SELECT nama, harga FROM food";
                    $result1 = mysqli_query($connect, $query1);
                    $query2 = "SELECT nama, harga FROM drink";
                    $result2 = mysqli_query($connect, $query2);
                    while($row1=mysqli_fetch_array($result1)) {
                        if($menu == $row1['nama']) {
                            $harga = $row1['harga'];
                        }
                    }
                    while($row2=mysqli_fetch_array($result2)) {
                        if($menu == $row2['nama']) {
                            $harga = $row2['harga'];
                        }
                    }

                    $total = $harga * $jumlah;

                    if(empty($daerah)) {
                        $ongkir = 0;
                    } else {
                        if($daerah == "Kota Blitar") {
                            $ongkir = 10000;
                        } else if($daerah == "Kabupaten Blitar") {
                            $ongkir = 15000;
                        } else {
                            $ongkir = 20000;
                        }
                    }

                    $bayar = $total + $ongkir;

                    if(empty($nama)) {
                        header("Location:beliForm.php?error=nama_kosong".$isi_form);
                    } else if(empty($no)) {
                        header("Location:beliForm.php?error=nohp_kosong".$isi_form);
                    } else if(empty($menu)) {
                        header("Location:beliForm.php?error=pesanan_kosong".$isi_form);
                    } else if(empty($jumlah)) {
                        header("Location:beliForm.php?error=jumlah_kosong".$isi_form);
                    } else if(empty($status)) {
                        header("Location:beliForm.php?error=order_kosong".$isi_form);
                    } else if(empty($alamat)) {
                    }

                    if($status == "Delivery Order") {
                ?>
                <table class="table table-borderless table-sm" >
                    <h1 class="text-center">S T R U K</h1>
                    <h1 class="text-center">P E N J U A L A N</h1>
                    <tbody>
                        <tr>
                            <th scope="row">Nama Pemesan:</th>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No Telepon:</th>
                            <td><?php echo $no; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Menu Pesanan:</th>
                            <td><?php echo $menu; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Harga Menu</th>
                            <td><?php echo $harga; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Pesanan:</th>
                            <td><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Harga:</th>
                            <td><?php echo $total; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Ongkos Kirim</th>
                            <td><?php echo $ongkir; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Bayar</th>
                            <td><?php echo $bayar; ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php
                    } else {
                ?>
                <table class="table table-borderless">
                    <h1 class="text-center">S T R U K</h1>
                    <h1 class="text-center">P E N J U A L A N</h1>
                    <tbody>
                        <tr>
                            <th scope="row">Nama Pemesan:</th>
                            <td><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No Telepon:</th>
                            <td><?php echo $no; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Menu Pesanan:</th>
                            <td><?php echo $menu; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Harga Menu</th>
                            <td><?php echo $harga; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Pesanan:</th>
                            <td><?php echo $jumlah; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Harga:</th>
                            <td><?php echo $total; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Bayar:</th>
                            <td><?php echo $bayar; ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="homeCRUD.php">
                    <button type="button" class="btn-sm btn-dark">Kembali</button>
                </a>
                <?php
                    }

                    $query = "INSERT INTO transaksi(nama, no_hp, menu, jumlah, harga, status, alamat, ongkir, total) VALUES 
                    ('$nama', '$no', '$menu', '$jumlah', '$harga', '$status', '$alamat. $daerah', '$ongkir', '$total')";
                    mysqli_query($connect, $query);
                ?>
            </div>
        </div>    

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>