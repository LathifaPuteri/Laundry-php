<?php 
    include 'koneksi.php';

    $id_transaksi = $_GET['id_transaksi'];

    $sql = "
        delete from transaksi
        where id_transaksi = '" . $id_transaksi. "';
    ";

    $sql2 = "
    delete from detail_transaksi
    where id_transaksi = '" . $id_transaksi. "';
";

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    
    if($result && $result2) {
        echo "<script>alert('Succes delete this transaction');location.href='tampil_transaksi.php';</script>";
        // printf(mysqli_error($conn));
    }else{
        echo "<script>alert('Failed delete this transaction');location.href='tampil_transaksi.php';</script>";
        // printf(mysqli_error($conn));
        // exit();
    }
?>