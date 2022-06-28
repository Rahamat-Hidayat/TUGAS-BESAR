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
                include "myconnection.php";
                $id = $_GET["id"];
                $query = "SELECT * FROM transaksi WHERE id='$id'";
                $result = mysqli_query($connect, $query);
                while($row=mysqli_fetch_array($result)){
            ?>
            <table class="table table-borderless table-sm" >
                    <h1 class="text-center">S T R U K</h1>
                    <h1 class="text-center">P E N J U A L A N</h1>
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
            <?php
                }
            ?>
            <a href="adminCRUD.php">
                <button type="button" class="btn-sm btn-dark">Kembali</button>
            </a>
            </div>
        </div>
        
        <script>
		    window.print();
	    </script>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>