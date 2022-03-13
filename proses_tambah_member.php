<?php 
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];

    $sql = "
    insert into member (nama_member,alamat,jenis_kelamin,telp)
    values ('" . $nama . "', '" . $alamat . "', '" . $jk . "', '" . $telp . "');
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success add class');location.href='tambah_member.php';</script>";
}else{
    echo "<script>alert('Failed add class');location.href='tambah_member.php';</script>";
    printf(mysqli_error($conn));
}
?>