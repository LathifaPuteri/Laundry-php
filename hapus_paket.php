<?php 
    include 'koneksi.php';

    $id_paket = $_GET['id_paket'];

    $sql = "
        delete from paket
        where id_paket = '" . $id_paket. "';
    ";

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        echo "<script>alert('Succes delete this paket');location.href='tampil_paket.php';</script>";
        // printf(mysqli_error($conn));
    }else{
        echo "<script>alert('Failed delete this paket');location.href='tampil_paket.php';</script>";
        // printf(mysqli_error($conn));
        // exit();
    }
?>