<?php
    include "myconnection.php";

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    $sosmed = $_POST["medsos"];
    $deskripsi = $_POST["deskripsi"];

    $query = "INSERT INTO saran(nama, email, no_hp, media_sosial, deskripsi) 
        VALUE ('$nama', '$email', '$nohp', '$sosmed', '$deskripsi')";

    if(mysqli_query($connect, $query)) {
        header("Location:homeCRUD.php?error=berhasil");
    } else {
        header("Location:homeCRUD.php?error=gagal");
    }

    mysqli_close($connect);
?>