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

<?php
            include 'koneksi.php';
            $sql = 'select transaksi.*,
                    member.nama_member, 
                    user.nama_user  
                    from transaksi JOIN user ON user.id_user = transaksi.id_user 
                    JOIN member ON member.id_member = transaksi.id_member
                    order by id_transaksi';
            $result = mysqli_query($conn, $sql);
            ?>
        

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <!-- <div class="row"> -->
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Table Transaction</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Member</th>
                                                <th>Date</th>
                                                <th>Time Limit</th>
                                                <th>Pay Day</th>
                                                <th>Status</th>
                                                <th>Pay Ment</th>
                                                <th>User</th>
                                                <th>Action</th>
                                                <th>Details</th>
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  while($data=mysqli_fetch_array($result)){?>
                                            <tr>
                                                <td><?=$data['id_transaksi']?></td>
                                                <td><?=$data['nama_member']?></td>
                                                <td><?=$data['tgl']?></td>
                                                <td><?=$data['batas_waktu']?></td>
                                                <td><?=$data['tgl_bayar']?></td>
                                                <td><?=$data['status']?></td>
                                                <td><?=$data['dibayar']?></td>
                                                <td><?=$data['nama_user']?></td>
                                                
                                                <td>
                                                <a href="ubah_transaksi1.php?id_transaksi=<?php echo $data['id_transaksi']?>"><button class="btn btn-primary px-2">Edit</button></a>
                                                <!-- <a class="btn btn-danger px-2" href="hapus_transaksi.php?id_transaksi=<?php echo $data['id_transaksi']?>" onclick="return confirm('Are you sure to delete the data from transaksi <?php echo $data['id_transaksi'] . '?'?>')">Delete</a> -->
                                                <td><a href="tampil_detail_transaksi1.php?id_transaksi=<?php echo $data['id_transaksi']?>"><button class="btn btn-primary px-2">Detail</button></a></td>
                                                <td><a target="_blank" href="cetak1.php?id_transaksi=<?php echo $data['id_transaksi']?>"><button class="btn btn-primary px-2">Print</button></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                <!-- </div> -->
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