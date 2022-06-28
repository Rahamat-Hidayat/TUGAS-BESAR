<?php
    include "myconnection.php";
        
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $kategori = $_POST["kategori"];
    $bahan = $_POST["bahan"];
    $buat = $_POST["cara_pembuatan"];
    $harga = $_POST["harga"];
        
    $query = "UPDATE drink SET nama='$nama', kategori='$kategori', bahan='$bahan', cara_pembuatan='$buat', harga='$harga' WHERE id=$id";
    
    if(mysqli_query($connect, $query)) {
        header('Location:adminCRUD.php');
    } else {
        header('Location:editForm1.php?error=gagal');
    }
    
    mysqli_close($connect);
?>