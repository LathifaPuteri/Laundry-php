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
            include 'sidebar.php';
        ?>

        <?php
            include 'koneksi.php';
            $sql = 'select * from user where id_user = '.$_GET['id_user'];
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($result);
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
                                <form class="form-valide" action="proses_ubah_user.php?id_member=<?echo $data['id_member']?>" method="post">
                                    <input type="hidden" name="id_user" type="hidden" value="<?=$data['id_user']?>">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="nama"> Name <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter a name.." value="<?=$data['nama_user']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="username">Username <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="username" name="username" rows="5" placeholder="Enter a address.." ><?=$data['username']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="password" placeholder="Choose a safe one.." value="">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="role">Role <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                        <?php $arr_role=array('Admin'=>'Admin','Kasir'=>'Kasir');?>
                                                    <select name="role" class="form-control">
                                                    <option></option>
                                                        <?php foreach ($arr_role as $key_role => $val_role):
                                                            if($key_role==$data['role']){
                                                                $selek="selected";
                                                            } else {
                                                                $selek="";
                                                            }
                                                        ?>
                                                        <option value="<?=$key_role?>" <?=$selek?>><?=$val_role?></option>
                                                        <?php endforeach ?>
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