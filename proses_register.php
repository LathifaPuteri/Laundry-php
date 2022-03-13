<?php 
    if($_POST){

        //koneksi
        include 'koneksi.php';
        // session_start();


        //get data
        $name = $_POST["nama"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];


        $queryCheckUsn = "SELECT * FROM user 
                    WHERE username = '$username' ";
        $resultUsn = mysqli_query($conn, $queryCheckUsn);
        $dataUsn = mysqli_fetch_assoc($resultUsn);

        if(mysqli_num_rows($resultUsn) > 0){
            echo 
                "<script>
                    alert('Username already taken, choose another username');
                    document.location.href = 'register.php';
                </script>";
            return false;
        } 
        // else {
        //     $queryUsn = "INSERT INTO `user` (`nama_user`, `username`, `password`, `role`)
        //     values ('" . $name . "', '" . $username . "', '" . $password . "', '" . $role . "');
        //     ";
        // }

        // $queryUsn = "INSERT INTO `user` (`nama_user`, `username`, `password`, `role`)
        // values ('" . $name . "', '" . $username . "', '" . $password . "', '" . $role . "');
        // ";
        // $resultUsn = mysqli_query($conn, $queryUsn);

        
       

        // if($dataUsn > 0){
        //     echo 
        //         "<script>
        //             alert('Username already taken, choose another username');
        //             document.location.href = 'register.php';
        //         </script>";
        //     return false;
        // }

        // //check password
        // if($password !== $cpassword){
        //     echo 
        //         "<script>
        //             alert('Password and password confirmation are not matched, try again');
        //             document.location.href = '../register.php';
        //         </script>";
        //     return false;
        // }

        //enkripsi password
        $pass_encrypted = md5($password);

        //insert data
        $querySignUp = "INSERT INTO user
                        VALUE ('', '$name', '$username', '$pass_encrypted', '$role') ";
        $insert = mysqli_query($conn, $querySignUp);
        
        if($insert){
            $_SESSION['role']         = $_POST['role'];
            $_SESSION['username']     = $_POST['username'];
            $_SESSION['status_login'] = true;
            echo 
                "<script>
                    alert('Registration success');
                    document.location.href = 'login.php';
                </script>";
        }else {
            echo    
                "<script>
                    alert('There is something wrong, try again');
                    document.location.href = 'register.php';
                </script>";
        }

        
    }
?>