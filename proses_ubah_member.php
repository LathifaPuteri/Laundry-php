<?php 
    include 'koneksi.php';

    $id_member = $_POST['id_member'];
    
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];


    $sql = "
        update member set nama_member = '" . $nama . "', alamat = '" . $alamat . "', jenis_kelamin = '" . $jk . "', telp = '" . $telp . "'
        where id_member = '" . $id_member . "';
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success edit class');location.href='tampil_member.php';</script>";
}else{
    echo "<script>alert('Failed add class');location.href='tampil_member.php';</script>";
    // printf(mysqli_error($conn));
}
?>