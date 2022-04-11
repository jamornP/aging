<?php require('head.php');?>

<body class="font-mali">

<?php require('menu.php'); ?>
<div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h1 class="h3 mb-0 text-white">แบบคัดกรองโรคซึมเศร้า 2 คำถาม</h1>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <form name="assessment" action="report2q.php" method="post" enctype="multipart/form-data">
                                <div class="table-responsive ">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="alert-primary">
                                            <tr class="text-center">
                                                <th>คำถาม</th>
                                                <th>มี</th>
                                                <th>ไม่มี</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก หดหู่ เศร้า หรือท้อแท้สิ้นหวัง
                                                    หรือไม่</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one1"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one2"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก เบื่อ ทำอะไรก็ไม่เพลิดเพลิน
                                                    หรือไม่</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two1"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two2"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>

                                        </tfoot>

                                    </table>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>

                                    </div>
                                </div>


                            </form>
                            <hr>
                            <p class="text-right">ที่มา : สมุดบันทึกสุขภาพผู้สูงอายุ กรมอนามัย กระทรวงสาธารณสุข,2557</p>
                        </div>
                    </div>
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