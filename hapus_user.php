<?php 
    include 'koneksi.php';

    $id_user = $_GET['id_user'];

    $sql = "
        delete from user
        where id_user = '" . $id_user. "';
    ";

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        echo "<script>alert('Succes delete this user');location.href='tampil_user.php';</script>";
        // printf('Failed delete student: ' . mysqli_error($conn));
    }else{
        echo "<script>alert('Failed delete this user');location.href='tampil_user.php';</script>";
        // exit();
    }
?>