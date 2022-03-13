<?php 
    include 'koneksi.php';

    $id_paket = $_POST['id_paket'];
    
    $paket = $_POST['paket'];
    $harga = $_POST['harga'];

    $sql = "
        update paket set jenis = '" . $paket . "', harga = '" . $harga . "' where id_paket = '" . $id_paket . "';
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success edit paket');location.href='tampil_paket.php';</script>";
    // printf(mysqli_error($conn));
}else{
    echo "<script>alert('Failed add paket');location.href='tampil_paket.php';</script>";
    // printf(mysqli_error($conn));
}
?>