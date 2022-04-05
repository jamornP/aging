<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comprehensive Geriatric Assessment</title>
    <link rel="icon" href="./img/favicon.ico" type="">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <style>
    @import url("https://fonts.googleapis.com/css?family=Kanit");

    body {
        font-family: "Kanit";
    }
    </style>
</head>

<body id="page-top">
    <?php 
        if(isset($_POST['submit'])){
            
                    $one=$_POST['one'];
                    $two=$_POST['two'];
                    $tree=$_POST['tree'];
                    $four=$_POST['four'];
                    $five=$_POST['five'];
                    
                   
                   

                    $scor=$one+$two+$tree+$four+$five;
                    
        }
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
            require('menuleft.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require('naverbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินการได้รับการสนับสนุนจากครอบครัว (The Family APGAR Questionnaire)</h1>

                    </div>

                    <!-- Content Row ###############################################################-->
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <div class="card text-center border-success" style="max-width: 18rem;">
                                    <div class="card-header alert-success">
                                        ผลคะแนนการประเมิน
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"><?php echo $scor;?></h1>

                                    </div>
                                    <div class="card-footer text-muted alert-success">

                                    </div>
                                </div>
                            </div>
                            <div class="col"></div>

                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading"> การแปลผล
                                    </h4>
                                    <hr>

                                    <table class="table">
                                        <tbody class="text-dark">
                                            <tr>
                                                <th width="20%">0 - 3 คะแนน</th>
                                                <td>หมายถึง ผู้สูงอายุได้รับการสนับสนุน <label class="font-weight-bold">ระดับต่ำมาก</label></td>
                                            </tr>
                                            <tr>
                                                <th> 4 - 7 คะแนน</th>
                                                <td>หมายถึง ผู้สูงอายุได้รับการสนับสนุน <label class="font-weight-bold">ระดับปานกลาง</label> </td>
                                            </tr>
                                            <tr>
                                                <th>8 - 10 คะแนน</th>
                                                <td>หมายถึง ผู้สูงอายุได้รับการสนับสนุน <label class="font-weight-bold">ระดับระดับสูง</label>    </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                        <br>
                    <hr>
                    

                    <!-- Content Row ###############################################################-->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php 
                require('footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>