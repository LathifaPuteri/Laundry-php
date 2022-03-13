<?php 
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password=$_POST['password'];
    $role = $_POST['role'];

    $sql = "
    insert into user (nama_user,username,password,role)
    values ('" . $nama . "', '" . $username . "', '" . md5($password) . "', '" . $role . "');
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success add user');location.href='tambah_user.php';</script>";
    // printf(mysqli_error($conn));
}else{
    echo "<script>alert('Failed add user');location.href='tambah_user.php';</script>";
    // printf(mysqli_error($conn));
}
?>