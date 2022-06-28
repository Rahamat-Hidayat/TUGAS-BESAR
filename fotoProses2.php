<?php
    $target = "image/menu/";
    $name = basename($_FILES["foto"]["name"]);

    $file = $target. basename($_FILES["foto"]["name"]);

    if(move_uploaded_file($_FILES["foto"]["tmp_name"],$file)) {
        $id = $_POST["id"];
        
        include "myconnection.php";
        $query = "UPDATE drink SET foto='$name' WHERE id='$id'";

        if(mysqli_query($connect, $query)) {
            header('Location:adminCRUD.php');
        } else {
            header('Location:foto1.php?error=gagal');
        }
    
        mysqli_close($connect);
    } else {
        header('Location:foto1.php?error=gagal');
    }
?>