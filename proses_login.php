<?php 
    if($_POST){
        include "koneksi.php";
        $username=$_POST['username'];
        $password=$_POST['password'];


        $sql_user=mysqli_query($conn, "select * from user where username = '" . $username . "'
         and password = '" . md5($password) . "'");

        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        }else{
            if(mysqli_num_rows($sql_user)>0){
                $dt_login=mysqli_fetch_assoc($sql_user);
                if($dt_login['role'] == "Admin"){
                    session_start();
                    $_SESSION['username']=$dt_login['username'];
                    $_SESSION['password']=$dt_login['password'];
                    $_SESSION['role'] = "Admin";
                    echo "<script>alert('Success login to your admin account');location.href='index.php';</script>";
                    // printf(mysqli_error($conn));
                }elseif($dt_login['role'] == "Kasir"){
                    session_start();
                    $_SESSION['username']=$dt_login['username'];
                    $_SESSION['password']=$dt_login['password'];
                    $_SESSION['role'] = "Kasir";
                    echo "<script>alert('Success login to your casir account');location.href='index_kasir.php';</script>";
                    // printf(mysqli_error($conn));
                }

            }else{
                // echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
                printf(mysqli_error($conn));
            }
        }
    }
?>