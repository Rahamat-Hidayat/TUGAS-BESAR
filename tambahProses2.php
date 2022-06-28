<?php
    $target = "image/menu/";
    $name = basename($_FILES["foto"]["name"]);

    $file = $target. basename($_FILES["foto"]["name"]);

    if(move_uploaded_file($_FILES["foto"]["tmp_name"],$file)) {
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $bahan = $_POST["bahan"];
        $buat = $_POST["cara_pembuatan"];
        $harga = $_POST["harga"];
        
        include "myconnection.php";
        $query = "INSERT INTO food(nama, kategori, bahan, cara_pembuatan, foto, harga) VALUES 
        ('$nama', '$kategori', '$bahan', '$buat', '$name', '$harga')";

        if(mysqli_query($connect, $query)) {
            header("Location:adminCRUD.php");
        } else {
            header('Location:adminCRUD.php?error=gagal');
        }
    } else {
        header('Location:adminCRUD.php?error=gagal');
    }
    
    mysqli_close($connect);
?>