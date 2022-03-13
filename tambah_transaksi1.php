<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quick Laundry</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        <?php
            include 'navheader.php';
            include 'header.php';
            include 'sidebar_kasir.php';
        ?>
        

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="proses_tambah_transaksi1.php" method="post">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="member">Select Member <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                <select name="member" class="form-control">
                                        <option></option>
                                            <?php
                                                include "koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM member");  // Use select query here 
                                                    
                                                while($member = mysqli_fetch_array($records))
                                                {
                                                    $selected = "";
                                                if($member['id_member'] == $data['id_member']){
                                                    $selected = 'selected';
                                                }
                                                    echo "<option value='". $member['id_member'] ."' ".$selected.">" .$member['nama_member'] ."</option>";  // displaying data in option menu
                                                }	?>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="paket">Select Type <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                <select name="jenis" class="form-control">
                                <option selected="true" disabled="true" class="def" name='jenis'></option>
                                            <?php 
                                                include 'koneksi.php';
                                                $recordsJenis = mysqli_query($conn, "SELECT * FROM paket");

                                                while($dataJenis = mysqli_fetch_assoc($recordsJenis)){
                                                    echo '<option value="'.$dataJenis['id_paket'].'">'.$dataJenis['jenis'].' -> '.$dataJenis['harga'].'</option>';  // displaying data in option menu
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="qty"> Quantity <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter quantity..">
                                </div>
                            </div>
                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tgl"> Date <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Enter a name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="batas_waktu"> Time Limit <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="batas_waktu" name="batas_waktu" placeholder="Enter a name..">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tgl_bayar"> Pay Day <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" placeholder="Enter a name..">
                                </div>
                            </div> -->
                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="status"> Status <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                <select name="status" class="form-control">
                                                <option></option>
                                                <option value="Baru">Baru</option>
                                                <option value="Proses">Proses</option>
                                                <option value="Selesai">Selesai</option>
                                                <option value="Diambil">Diambil</option>
                                            </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="dibayar"> Payment <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                <select name="dibayar" class="form-control">
                                                <option></option>
                                                <option value="Dibayar">Dibayar</option>
                                                <option value="Belum_dibayar">Belum Dibayar</option>
                                            </select>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="user"> Select User <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                <select name="user" class="form-control">
                                        <option></option>
                                            <?php
                                                include "koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM user");  // Use select query here 
                                                    
                                                while($user = mysqli_fetch_array($records))
                                                {
                                                    $selected = "";
                                                if($user['id_user'] == $data['id_user']){
                                                    $selected = 'selected';
                                                }
                                                    echo "<option value='". $user['id_user'] ."' ".$selected.">" .$user['nama_user'] ."</option>";  // displaying data in option menu
                                                }	?>
                                                </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
        <!--**********************************
            Content body end
        ***********************************-->
      
        <?php
        include 'footer.php';
        ?>
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>