<?php require('head.php');?>

<body class="font-mali">

<?php require('menu.php'); ?>
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h1 class="h3 mb-0 text-white">แบบประเมินการได้รับการสนับสนุนจากครอบครัว (The Family APGAR Questionnaire)</h1>
                    </div>
                    <div class="card-body">
                        <form name="assessment" action="reportapgar.php" method="post" enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="alert-primary">
                                        <tr class="text-center" style="vertical-align: middle;">
                                            <th>คำถาม</th>
                                            <th>บ่อยครั้ง (2)</th>
                                            <th>เกิดขึ้นบ้าง (1)</th>
                                            <th>แทบไม่เกิด (0)</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A. การให้ความช่วยเหลือเมื่อมีปัญหา เช่น การให้คำปรึกษา การช่วยเหลือทางสุขภาพ สิ่งของ/เงิน</td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="one" id="one1"
                                                        value="2" checked>
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="one" id="one2"
                                                        value="1">
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="one" id="one3"
                                                        value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ฺP. การพูดคุยและการแก้ปัญหาร่วมกัน เช่น การให้ข้อมูลข่าวสาร การประเมินสถานการณ์สะท้อนคิด</td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="two" id="two1"
                                                        value="2" checked>
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="two" id="two2"
                                                        value="1">
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="two" id="two3"
                                                        value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>G. การยอมรับความต้องการในการทำสิ่งใหม่ๆ</td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                        value="2" checked>
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                        value="1">
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                        value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A. การแสดงความรักและเอาใจใส่ เช่น การให้ความรัก ความเห็นอกเห็นใจและความห่วงใย</td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="four" id="four1"
                                                        value="2" checked>
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="four" id="four2"
                                                        value="1">
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="four" id="four3"
                                                        value="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R. การใช้เวลาอยู่ร่วมกัน</td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="five" id="five1"
                                                        value="2" checked>
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="five" id="five2"
                                                        value="1">
                                            </td>
                                            <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="five" id="five3"
                                                        value="0">
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
                        <p class="text-right"></p>
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


                    
                    