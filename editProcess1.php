<?php
    include "myconnection.php";
        
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $bahan = $_POST["bahan"];
    $buat = $_POST["cara_pembuatan"];
    $harga = $_POST["harga"];
        
    $query = "UPDATE food SET nama='$nama', bahan='$bahan', cara_pembuatan='$buat', harga='$harga' WHERE id=$id";
    
    if(mysqli_query($connect, $query)) {
        header('Location:adminCRUD.php');
    } else {
        header('Location:editForm1.php?error=gagal');
    }
    
    mysqli_close($connect);
?>