<?php 
    include 'koneksi.php';

    $transaksi = $_POST['transaksi'];
    $paket = $_POST['paket'];
    $qty = $_POST['qty'];
    
    $sql = "
    insert into detail_transaksi (id_transaksi,id_paket,qty)
    values ('" . $transaksi. "', '" . $paket . "', '" . $qty . "');
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success add transaction');location.href='tambah_detail_transaksi.php';</script>";
}else{
    // echo "<script>alert('Failed add transaction');location.href='tambah_detail_transaksi.php';</script>";
    printf(mysqli_error($conn));
}
?>