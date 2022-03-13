<?php 
    include 'koneksi.php';

    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $sql = "
    insert into paket (jenis,harga)
    values ('" . $jenis . "', '" . $harga . "');
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success add paket');location.href='tambah_paket.php';</script>";
    // printf(mysqli_error($conn));
}else{
    echo "<script>alert('Failed add paket');location.href='tambah_paket.php';</script>";
    // printf(mysqli_error($conn));
}
?>