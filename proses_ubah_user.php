<?php 
    include 'koneksi.php';

    $id_user = $_POST['id_user'];
    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password=$_POST['password'];
    $role = $_POST['role'];
    
    $sql = "
        update user set nama_user = '" . $nama . "', username = '" . $username . "', password = '" . md5($password) . "', role = '" . $role . "'
        where id_user = '" . $id_user . "';
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success edit user');location.href='tampil_user.php';</script>";
}else{
    echo "<script>alert('Failed edit user');location.href='tampil_user.php';</script>";
    // printf(mysqli_error($conn));
}
?>