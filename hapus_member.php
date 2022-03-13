<?php 
    include 'koneksi.php';

    $id_member = $_GET['id_member'];

    $sql = "
        delete from member
        where id_member = '" . $id_member. "';
    ";

    $result = mysqli_query($conn, $sql);
    
    if($result) {
        echo "<script>alert('Succes delete this class');location.href='tampil_member.php';</script>";
        // printf('Failed delete student: ' . mysqli_error($conn));
    }else{
        echo "<script>alert('Failed delete this class');location.href='tampil_member.php';</script>";
        // exit();
    }
?>